<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Router;
use App\Helpers\Validator;
use App\Models\Credit;

class CreditController extends Controller
{

	public static function index()
	{
		$credit =  new Credit;
		$data = $credit->where('user_id', '=', $_SESSION['USER']->id)->get();
		view('dashboard/credits/grid', ['data' => $data]);
	}

	public static function create()
	{
		$data = $_POST;
		$errors = Validator::validate($data, [
			'card_number' => 'required',
			'card_type' => 'required',
			'exp_date' => 'required'
		]);

		// Check if there are any errors
		if (!empty($errors)) {
			// Display the errors
			Router::back();
		} else {
			$data['user_id'] = $_SESSION['USER']->id;
			// No errors, proceed with the rest of your code
			Credit::insert($data);
			Router::back();
		}
	}

	public static function delete($params)
	{
		$id = $params['id'];
		Credit::delete($id);
		Router::back();
	}
}
