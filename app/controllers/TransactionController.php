<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Router;
use App\Models\Notification;
use App\Models\Transaction;

class TransactionController extends Controller
{

	public static function index()
	{
		$from =  isset($_GET['from']) && !empty($_GET['from']) ? "'" .  $_GET['from'] . "'" :  "'1970-01-01'";
		$to =  isset($_GET['to']) && !empty($_GET['to']) ? "'" .  $_GET['to'] . "'" : "'" .  date('Y-m-d', strtotime('+1 days')) . "'";
		if ($_SESSION['USER']->role == 'admin') {
			$data = Transaction::innerJoin('users', 'id', 'user_id')
				->where('username', "like", isset($_GET['username']) && !empty($_GET['username'])  ? '%' . $_GET['username'] . '%' :  "%%")
				->where('type', "like", isset($_GET['status']) && !empty($_GET['status']) ? '%' .  $_GET['status'] . '%' :  "%%")
				->whereBeetween('created_at', $from, $to)
				->orderBy("transactions.id", "desc")
				->paginate("*, transactions.id as id", 10);
		} else {
			$data = Transaction::where('user_id', '=', $_SESSION['USER']->id)
				->where('type', "like", isset($_GET['status']) && !empty($_GET['status']) ? '%' .  $_GET['status'] . '%' :  "%%")
				->whereBeetween('created_at', $from, $to)
				->paginate("*", 10);
		}
		view('dashboard/transactions/grid', ['data' => $data]);
	}

	public static function create()
	{
		$data = $_POST;
		$data['user_id'] = $_SESSION['USER']->id;

		if ($_POST['type'] == 'withdraw') {
			$data['amount'] = -$_POST['amount'];
			if (Transaction::insert($data)) {
				Notification::insert([
					'user_id' => $_SESSION['USER']->id,
					'title' => "Withdraw",
					'message' => "You have withdrawed " . $_POST['amount'] . " from your account",
				]);
				Router::redirect('transactions');
			}
		} else if ($_POST['type'] == 'desposit') {
			if (Transaction::insert($data)) {
				Notification::insert([
					'user_id' => $_SESSION['USER']->id,
					'title' => "Deposit",
					'message' => "You have deposited " . $_POST['amount'] . " to your account",
				]);
				Router::redirect('transactions');
			}
		}

		Router::back();
	}
}
