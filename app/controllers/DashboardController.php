<?php

namespace App\Controllers;
/**
 * use App\Core\Controller to import the core controller
 * use App\Models\Contact to import the contact model
 * use App\Core\DB to import the database class
 * use PDO to import the PDO class
 * use App\Models\Contact to import the contact model

 */
use App\Core\Controller;
use App\Core\DB;
use App\Models\Contact;
use PDO;

class DashboardController extends Controller
{
	public static function index()
	{
		$stats = array();

		if ($_SESSION['USER']->role == 'admin') {
			// give me statistics
			$query = "SELECT COUNT(*) as tot_influencer FROM influencers";
			$tot_influencer = DB::query($query)->fetch(PDO::FETCH_OBJ)->tot_influencer;

			$query = "SELECT COUNT(*) as tot_brand FROM brands";
			$tot_brand = DB::query($query)->fetch(PDO::FETCH_OBJ)->tot_brand;

			// created_at in place in of created_at
			$query = "SELECT COUNT(*) as tot_transaction FROM transactions WHERE created_at > NOW() - INTERVAL 1 MONTH;";
			$tot_transaction = DB::query($query)->fetch(PDO::FETCH_OBJ)->tot_transaction;

			$query = "SELECT SUM(amount) as tot_deposit FROM transactions WHERE amount > 0 && created_at > NOW() - INTERVAL 1 MONTH;";
			$tot_deposit = DB::query($query)->fetch(PDO::FETCH_OBJ)->tot_deposit;

			$query = "SELECT SUM(amount) as tot_withdraw FROM transactions WHERE amount < 0 && created_at > NOW() - INTERVAL 1 MONTH;";
			$tot_withdraw = DB::query($query)->fetch(PDO::FETCH_OBJ)->tot_withdraw;

			$query = "SELECT SUM(balance) as tot_money FROM users";
			$tot_money = DB::query($query)->fetch(PDO::FETCH_OBJ)->tot_money;

			// Last 5 transactions
			$query = "SELECT * FROM transactions INNER JOIN users ON transactions.user_id = users.id ORDER BY created_at DESC LIMIT 5";
			$transactions = DB::query($query)->fetchAll(PDO::FETCH_OBJ);

			// Last 5 announcements
			$query = "SELECT * FROM announcements ORDER BY created_at DESC LIMIT 5";
			$announcements = DB::query($query)->fetchAll(PDO::FETCH_OBJ);

			$stats = [
				'tot_influencer' => $tot_influencer,
				'tot_brand' => $tot_brand,
				'tot_transaction' => $tot_transaction,
				'tot_deposit' => $tot_deposit,
				'tot_withdraw' => $tot_withdraw,
				'tot_money' => $tot_money,
				'transactions' => $transactions,
				'announcements' => $announcements
			];

			view('dashboard/dashboard', ['stats' => $stats]);
		} else if ($_SESSION['USER']->role == 'brand') {
			// give me statistics
			$balance = $_SESSION['USER']->balance;

			$query = "SELECT SUM(amount) as spend FROM transactions WHERE amount < 0 && user_id = :user";
			$spend = DB::query($query, ['user' => $_SESSION['USER']->id])->fetch(PDO::FETCH_OBJ)->spend;

			// $query = "SELECT SUM(amount) as earnings FROM transactions WHERE amount > 0&& user_id = :user";
			// $earnings = DB::query($query, ['user'=> $_SESSION['USER']->id])->fetch(PDO::FETCH_OBJ)['earnings'];

			$query = "SELECT COUNT(*) as tot_partnership FROM partnerships WHERE brand_id = :brand_id";
			$tot_partnership = DB::query($query, ['brand_id' => $_SESSION['USER']->id])->fetch(PDO::FETCH_OBJ)->tot_partnership;

			$query = "SELECT SUM(amount) as tot_deposit FROM transactions WHERE type = 'desposit' && user_id = :user";
			$tot_deposit = DB::query($query,  ['user'=> $_SESSION['USER']->id])->fetch(PDO::FETCH_OBJ)->tot_deposit;

			$query = "SELECT SUM(amount) as tot_withdraw FROM transactions WHERE type = 'withdraw' && user_id = :user";
			$tot_withdraw = DB::query($query,  ['user'=> $_SESSION['USER']->id])->fetch(PDO::FETCH_OBJ)->tot_withdraw;

			$query = "SELECT * FROM partnerships INNER JOIN users ON users.id = partnerships.influencer_id WHERE status is null && brand_id = :brand_id LIMIT 5";
			$proposals = DB::query($query, ['brand_id' => $_SESSION['USER']->id])->fetchAll(PDO::FETCH_OBJ) ?? [];

			$query = "SELECT * FROM transactions INNER JOIN users ON transactions.user_id = users.id WHERE user_id = " . $_SESSION['USER']->id . " ORDER BY created_at DESC LIMIT 5";
			$transactions = DB::query($query)->fetchAll(PDO::FETCH_OBJ);

			$stats = [
				'tot_spend' => $spend,
				'balance' => $balance,
				'tot_partnership' => $tot_partnership,
				'tot_deposit' => $tot_deposit,
				'tot_withdraw' => $tot_withdraw,
				'proposals' => $proposals,
				'transactions' => $transactions
			];

			view('dashboard/dashboardBrand', ['stats' => $stats]);
		} else if ($_SESSION['USER']->role == 'influencer') {
			// give me statistics
			$balance = $_SESSION['USER']->balance;

			$query = "SELECT SUM(amount) as spend FROM transactions WHERE amount > 0 && user_id = " . $_SESSION['USER']->id;
			$spend = DB::query($query)->fetch(PDO::FETCH_OBJ)->spend;

			$query = "SELECT SUM(amount) as earnings FROM transactions WHERE amount > 0 && user_id = " . $_SESSION['USER']->id;
			$earnings = DB::query($query)->fetch(PDO::FETCH_OBJ)->earnings;

			$query = "SELECT COUNT(*) as tot_partnership FROM partnerships WHERE influencer_id = " . $_SESSION['USER']->id . '&& status = "approved"';
			$tot_partnership = DB::query($query)->fetch(PDO::FETCH_OBJ)->tot_partnership;

			$query = "SELECT SUM(amount) as tot_deposit FROM transactions WHERE type = 'desposit' && user_id = " . $_SESSION['USER']->id;
			$tot_deposit = DB::query($query)->fetch(PDO::FETCH_OBJ)->tot_deposit;

			$query = "SELECT SUM(amount) as tot_withdraw FROM transactions WHERE type = 'withdraw' && user_id = " . $_SESSION['USER']->id;
			$tot_withdraw = DB::query($query)->fetch(PDO::FETCH_OBJ)->tot_withdraw;

			$query = "SELECT * FROM partnerships INNER JOIN users ON users.id = partnerships.brand_id WHERE status is null && influencer_id = " . $_SESSION['USER']->id . ' LIMIT 5 ';
			$proposals = DB::query($query)->fetchAll(PDO::FETCH_OBJ) ?? [];

			$query = "SELECT * FROM transactions INNER JOIN users ON transactions.user_id = users.id WHERE user_id = " . $_SESSION['USER']->id . " ORDER BY created_at DESC LIMIT 5";
			$transactions = DB::query($query)->fetchAll(PDO::FETCH_OBJ);

			$stats = [
				'tot_spend' => $spend,
				'balance' => $balance,
				'tot_partnership' => $tot_partnership,
				'tot_deposit' => $tot_deposit,
				'tot_withdraw' => $tot_withdraw,
				'proposals' => $proposals,
				'transactions' => $transactions
			];

			view('dashboard/dashboardInfluencer', ['stats' => $stats]);
		}
	}

	public static function contact()
	{
		$data = Contact::paginate();
		view('dashboard/contact/grid', ['data' => $data]);
	}
}
