<?php

namespace App\Controllers;

/**
 * use App\Core\Controller to import the core controller
 * use App\Models\Brand to import the brand model
 * use App\Models\DeletedAccount to import the deleted account model
 * use App\Models\Influencer to import the influencer model
 * use App\Models\User to import the user model
 * use App\Core\DB to import the database class
 * use App\Core\Router to import the router class
 * use App\Helpers\Validator to import the validator class
 * use PDO to import the PDO class

 */
use App\Core\Controller;
use App\Core\DB;
use App\Core\Router;
use App\Helpers\Validator;
use App\Models\Brand;
use App\Models\DeletedAccount;
use App\Models\Influencer;
use App\Models\User;
use PDO;
/**
 * AuthController class
 * this class is responsible for the authentication
 * this class extends the core controller
 * 
 */
class AuthController extends Controller
{
	/**
	 * login function
	 * this function is responsible for the login form
	 * it loads the login form view
	 */

	public static function login()
	{
		$arr = array();
		$errors = Validator::validate($_POST, [
			'email' => 'required|email',
			'password' => 'required',
		]);

		$remember_me = isset($_POST['remember']);

		if (empty($errors)) {
			// All fields are valid, process form data
			$arr['email'] = $_POST['email'];
			$row = User::where('email', '=', $arr['email'])->first();
			echo password_hash($_POST['password'], PASSWORD_DEFAULT);
			if ($row) {
				if (password_verify($_POST['password'], $row->password)) {
					echo "hi";
					print_r($row->id);
					$deleted = DeletedAccount::where("user_id", '=', $row->id)->first();
					if($deleted && $deleted->approved == true) {
						view("auth/login", array_merge($arr, ['errors' => ['Account was deleted']]));
						exit();
					}

					$_SESSION['USER'] = $row;

					if ($remember_me) {
						$token = bin2hex(random_bytes(22)); // Generate a unique token in 44 characters
						setcookie('remember_token', $token, time() + 86400 * 30, '/'); // Set a cookie that expires in 30 days
						User::update($row->id, ["token" => $token]);
					}

					// Redirect the user to the dashboard or homepage

					Router::redirect('dashboard');
				}
			}

			$errors[] =  "Login failed. Please check your login details and try again.";
		}

		view("auth/login", array_merge($arr, ['errors' => $errors]));
	}

	/**
	 * register function
	 * this function is responsible for the register form
	 * it loads the register form view
	 */
	public static function register()
	{
		$errors = array();
		$arr = array();

		$errors = Validator::validate($_POST, [
			'username' => 'required',
			'email' => 'required|email',
			'password' => 'required|password'
		]);

		$arr['username'] = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
		$arr['email'] = $_POST['email'];
		$arr['password'] = $_POST['password'];

		// Check if there are any errors
		if (!empty($errors)) {
			// Display the errors
			view("auth/register", array_merge($arr, ['errors' => $errors]));
		} else {
			// No errors, proceed with the rest of your code
			$row = User::where('email', '=', $arr['email'])->first();

			if (!$row) {
				$arr['password'] = password_hash($arr['password'], PASSWORD_DEFAULT);

				User::insert($arr);
				Router::redirect("login");
			} else {
				view("auth/register", array_merge($arr, ['errors' => ["This email already exist!"]]));
			}
		}
	}

	/**
	 * setprofile function
	 * this function is responsible for the welcome form
	 * it loads the welcome form view
	 * 
	 */

	public static function setprofile()
	{

		if ($_POST['role'] == 'influencer') {
			$data = $_POST;
			unset($data['email']);
			$data['user_id'] = $_SESSION['USER']->id;

			print_r($data);
			$errors = Validator::validate($data, [
				'first_name' => 'required',
				'last_name' => 'required',
				'contact' => 'required'
			]);

			// Check if there are any errors
			if (!empty($errors)) {
				// Display the errors
				view("auth/welcome", array_merge($_POST, ['errors' => $errors]));
			} else {
				// No errors, proceed with the rest of your code
				User::update($data['user_id'], ['role'=> 'influencer']);
				Influencer::insert($data);
				Router::redirect('dashboard');
			}
		} else if ($_POST['role'] == 'brand') {
			$data = $_POST;
			unset($data['email']);
			$data['user_id'] = $_SESSION['USER']->id;

			$errors = Validator::validate($data, [
				'name' => 'required',
				'revenue' => 'required',
				'contact' => 'required'
			]);

			// Check if there are any errors
			if (!empty($errors)) {
				// Display the errors
				view("auth/welcome", array_merge($_POST, ['errors' => $errors]));
			} else {
				// No errors, proceed with the rest of your code
				User::update($data['user_id'], ['role' => 'brand']);
				Brand::insert($data);
				Router::redirect('dashboard');
			}
		}
	}

	/**
	 * logout function
	 * this function is responsible for the logout
	 * it loads the login form view
	 */
	public static function logout()
	{
		User::update($_SESSION['USER']->id, ["token" => NULL]);

		if (!empty($_SESSION['USER']))
			unset($_SESSION['USER']);

			Router::redirect('login');
	}

	/**
	 * deleteRequest function
	 * this function is responsible for the delete request
	 * it loads the delete request view
	 * 
	 * 	 */

	public static function deleteRequest()
	{
		$requests = DB::query("SELECT *, deletedaccounts.id as id FROM deletedaccounts INNER JOIN users on users.id = deletedaccounts.user_id ORDER BY deletedaccounts.id desc")->fetchAll(PDO::FETCH_OBJ);
		view('dashboard/delete_requests/grid', ["requests" => $requests]);
	}

	/**
	 * delete function
	 * this function is responsible for the delete request
	 * it loads the delete request view
	 */

	public static function delete()
	{
		$approved = $_POST['approve'] ? 1 : ($_POST['reject'] ? 0 : null);
		DeletedAccount::update($_POST['id'], ['approved' => $approved]);
		Router::back();
	}
}
