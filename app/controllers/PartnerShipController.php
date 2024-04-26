<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\DB;
use App\Core\Router;
use App\Models\Brand;
use App\Models\Influencer;
use App\Models\Notification;
use App\Models\Partnership;
use App\Models\Transaction;
use App\Models\User;
use PDO;

class PartnershipController extends Controller
{
	public static $perPage = 10;

	public static function index()
	{
		$data  = array();
		if ($_SESSION['USER']->role == 'brand') {
			$query = 'select (p.sender_id = ' . $_SESSION['USER']->id . ') as is_sender, p.status, p.id, p.amount, p.duration, p.duration_unit, p.start_date, u.email, u.avatar, CONCAT(e.first_name, " ", e.last_name) AS name from partnerships p ';
			$query .= 'inner join users u on u.id = p.influencer_id ';
			$query .= 'inner join influencers e on u.id = e.user_id ';
			$query .= 'where brand_id = :brand_id and p.status is not null and p.status != "Payment Pending" ';
			$query .= "ORDER BY p.id desc ";
			$query .= "LIMIT " . static::$perPage;
			$query .= " OFFSET " . (($_GET['page'] ?? 1) - 1) * static::$perPage;
			$data['brand_id'] = $_SESSION['USER']->id;
			$results = DB::query($query, $data)->fetchAll(PDO::FETCH_OBJ);

			$query = 'select count(*) as count from partnerships ';
			$query .= 'where brand_id = :brand_id  and (status is not null or status != "Payment Pending")';
			
			$total = DB::query($query, $data)->fetch(PDO::FETCH_OBJ)->count;
			$data = [
				'results' =>  $results,
				'total' => $total,
				'nbr_pages' => ceil($total / static::$perPage),
				'perPage' => static::$perPage,
				'page' => ($_GET['page'] ?? 1)
			];
		} else if ($_SESSION['USER']->role == 'influencer') {
			$query = 'select (p.sender_id = ' . $_SESSION['USER']->id . ') as is_sender, p.status, p.id, p.amount, p.duration, p.duration_unit, p.start_date, u.email, u.avatar, e.name from partnerships p ';
			$query .= 'inner join users u on u.id = p.brand_id ';
			$query .= 'inner join brands e on u.id = e.user_id ';
			$query .= 'where influencer_id = :influencer_id and (p.status is not null or p.status != "Payment Pending")';
			$data['influencer_id'] = $_SESSION['USER']->id;
			$results = DB::query($query, $data)->fetchAll(PDO::FETCH_OBJ);

			$query = 'select count(*) as count from partnerships p ';
			$query .= 'where influencer_id = :influencer_id  and (status is not null or status != "Payment Pending")';
			$total = DB::query($query, $data)->fetch(PDO::FETCH_OBJ)->count;

			$data = [
				'results' =>  $results,
				'total' => $total,
				'nbr_pages' => ceil($total / static::$perPage),
				'perPage' => static::$perPage,
				'page' => ($_GET['page'] ?? 1)
			];
		} else if ($_SESSION['USER']->role == 'admin') {
			$data = Partnership::where("status", "!=", NULL)->where('status', '!=', 'Payment Pending')->paginate();
			foreach ($data['results'] as $pr) {
				$pr->brand = Brand::where('user_id', '=', $pr->brand_id)->first();
				$brand = User::find($pr->brand_id);
				$pr->brand->email = $brand->email;
				$pr->brand->avatar = $brand->avatar;
				$pr->influencer = Influencer::where('user_id', '=', $pr->influencer_id)->first();
				$influencer = User::find($pr->influencer_id);
				$pr->influencer->email = $influencer->email;
				$pr->influencer->avatar = $influencer->avatar;
			}
		}

		view('dashboard/partnerships/grid', ['data' => $data]);
	}

	public static function proposals()
	{
		$data  = array();

		if ($_SESSION['USER']->role == 'brand') {
			$query = 'select (p.sender_id = ' . $_SESSION['USER']->id . ') as is_sender, p.status, p.id, p.amount, p.duration, p.duration_unit, p.start_date, u.email, u.avatar, CONCAT(e.first_name, " ", e.last_name) AS name from partnerships p ';
			$query .= 'inner join users u on u.id = p.influencer_id ';
			$query .= 'inner join influencers e on u.id = e.user_id ';
			$query .= 'where brand_id = :brand_id  and (p.status is null or p.status = "Payment Pending")';
			$data['brand_id'] = $_SESSION['USER']->id;
			$results = DB::query($query, $data)->fetchAll(PDO::FETCH_OBJ);

			$query = 'select count(*) as count from partnerships p ';
			$query .= 'where brand_id = :brand_id  and (status is null or status = "Payment Pending")';
			$total = DB::query($query, $data)->fetch(PDO::FETCH_OBJ)->count;

			$data = [
				'results' =>  $results,
				'total' => $total,
				'nbr_pages' => ceil($total / static::$perPage),
				'perPage' => static::$perPage,
				'page' => ($_GET['page'] ?? 1)
			];
		} else if ($_SESSION['USER']->role == 'influencer') {
			$query = 'select (p.sender_id = ' . $_SESSION['USER']->id . ') as is_sender, p.status, p.id, p.amount, p.duration, p.duration_unit, p.start_date, u.email, u.avatar, e.name from partnerships p ';
			$query .= 'inner join users u on u.id = p.brand_id ';
			$query .= 'inner join brands e on u.id = e.user_id ';
			$query .= 'where influencer_id = :influencer_id and (p.status is null or p.status = "Payment Pending")';
			$data['influencer_id'] = $_SESSION['USER']->id;
			$results = DB::query($query, $data)->fetchAll(PDO::FETCH_OBJ);

			$query = 'select count(*) as count from partnerships p ';
			$query .= 'where influencer_id = :influencer_id  and (status is null or status = "Payment Pending")';
			$total = DB::query($query, $data)->fetch(PDO::FETCH_OBJ)->count;

			$data = [
				'results' =>  $results,
				'total' => $total,
				'nbr_pages' => ceil($total / static::$perPage),
				'perPage' => static::$perPage,
				'page' => ($_GET['page'] ?? 1)
			];
		} else if ($_SESSION['USER']->role == 'admin') {
			$data = Partnership::where("status", "=", NULL)->orWhere('status', '=', 'Payment Pending')->paginate();
			foreach ($data['results'] as $pr) {
				$pr->brand = Brand::where('user_id', '=', $pr->brand_id)->first();
				$brand = User::find($pr->brand_id);
				$pr->brand->email = $brand->email;
				$pr->brand->avatar = $brand->avatar;
				$pr->influencer = Influencer::where('user_id', '=', $pr->influencer_id)->first();
				$influencer = User::find($pr->influencer_id);
				$pr->influencer->email = $influencer->email;
				$pr->influencer->avatar = $influencer->avatar;
			}
		}

		view('dashboard/partnerships/grid', ['data' => $data]);
	}

	public static function create()
	{
		$data = $_POST;
		$data['sender_id'] = $_SESSION['USER']->id;
		if ($_SESSION['USER']->role == 'influencer') {
			$data['influencer_id'] = $data['sender_id'];
			$data['brand_id'] = $data['to'];
		} else if ($_SESSION['USER']->role == 'brand') {
			$data['influencer_id'] = $data['to'];;
			$data['brand_id'] = $data['sender_id'];
		} else {
			echo "fail";
			exit();
		}

		unset($data['to']);
		Partnership::insert($data);
		$partnership = Partnership::where('brand_id', '=', $data['brand_id'])->where('influencer_id', '=', $data['influencer_id'])->orderBy('id', 'DESC')->first();
		Notification::insert([
			'user_id' => $data['to'],
			'title' => 'Partnership #' . $partnership->id,
			'message' => 'You have new partnership request'
		]);
		Router::back()();

		// redirect("");
	}

	public static function updateStatus($params)
	{
		
		$id = $params['id'];
		$status = $_POST['status'];
		$partnership = Partnership::find($id);

		if ($status == 'approved') {
			Partnership::update($id, ['status' => "Payment Pending"]);
			Notification::insert([
				'user_id' => $partnership->brand_id,
				'title' => 'Partnership #' . $id,
				'message' => 'Your partnership request has been approved'
			]);
			Notification::insert([
				'user_id' => $partnership->influencer_id,
				'title' => 'Partnership #' . $id,
				'message' => 'Your partnership request has been approved'
			]);
		} else if ($status == 'declined') {
			Partnership::update($id, ['status' => $status]);
			Notification::insert([
				'user_id' => $partnership->brand_id,
				'title' => 'Partnership #' . $id,
				'message' => 'Your partnership request has been declined'
			]);
			Notification::insert([
				'user_id' => $partnership->influencer_id,
				'title' => 'Partnership #' . $id,
				'message' => 'Your partnership request has been declined'
			]);
		} else if ($status == 'pay') {
			$data = [
				'user_id' => $partnership->brand_id,
				'amount' => -$partnership->amount,
				'type' => "Partnership",
				'partnership_id' => 25
			];
			$transaction = Transaction::insert($data);

			if ($transaction) {
				Partnership::update($id, ['status' => "approved"]);
				Notification::insert([
					'user_id' => $partnership->brand_id,
					'title' => 'Partnership #' . $id,
					'message' => 'Your partnership request has been payed'
				]);
				Notification::insert([
					'user_id' => $partnership->influencer_id,
					'title' => 'Partnership #' . $id,
					'message' => 'Your partnership request has been payed'
				]);
			} else {
				Notification::insert([
					'user_id' => $partnership->brand_id,
					'title' => 'Partnership #' . $id,
					'message' => 'Your partnership request has not been payed'
				]);
				Notification::insert([
					'user_id' => $partnership->influencer_id,
					'title' => 'Partnership #' . $id,
					'message' => 'Your partnership request has not been payed'
				]);
			}
		} else if ($status == 'close') {
			$partnership = Partnership::find($id);
			$transaction = Transaction::insert([
				'user_id' => $partnership->influencer_id,
				'amount' => - ($partnership->amount * (1 - PARTNERSHIP_FEE / 100)),
				'type' => "Partnership",
				'partnership_id' => $id
			]);
			$transaction = Transaction::insert([
				'user_id' => User::where('role', '=', 'admin')->first()->id,
				'amount' => - ($partnership->amount * PARTNERSHIP_FEE / 100),
				'type' => "Partnership",
				'partnership_id' => $id
			]);
			Notification::insert([
				'user_id' => $partnership->brand_id,
				'title' => 'Partnership #' . $id,
				'message' => 'Your partnership request has been Done'
			]);
			Notification::insert([
				'user_id' => $partnership->influencer_id,
				'title' => 'Partnership #' . $id,
				'message' => 'Your partnership request has been Done'
			]);
			if ($transaction) {
				Partnership::update($id, ['status' => "Done"]);
			}
		}
		Router::back()();
	}
}
