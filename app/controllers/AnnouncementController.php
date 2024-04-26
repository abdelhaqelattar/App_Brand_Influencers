<?php
 
namespace App\Controllers;

use App\Core\Controller;
use App\Core\DB;
use App\Core\Router;
use App\Middlewares\AuthorizationMiddleware;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
	public static function index()
	{// Sorting logic based on 'sort' query parameter

		$sort_name = 'announcements.created_at';
		$sort_type = 'desc';
		if(isset($_GET['sort'])) {
			if($_GET['sort'] == 'Low') {
				$sort_name = 'announcements.amount';
				$sort_type = 'asc';
			} else if($_GET['sort'] == 'High') {
				$sort_name = 'announcements.amount';
				$sort_type = 'desc';
			} 
		}
		// Authorization middleware to ensure only admins and influencers can access
		AuthorizationMiddleware::handle(['admin', 'influencer']);
		// Fetch announcements data with joins, conditions, grouping, and ordering
		$annoucements = Announcement::innerJoin('users', 'id', 'author_id')
			->innerJoin('brands', 'user_id', 'author_id')
			->innerJoin('ratings', 'rated_user_id', 'author_id')
			->innerJoin('partnerships', 'brand_id', 'author_id')
			->where("status", "=", "Done")
			->where("title", "like", isset($_GET['search']) && !empty($_GET['search']) ? '%' .  $_GET['search'] . '%' :  "%%")
			->groupBy('announcements.id, users.id')
			->orderBy($sort_name, $sort_type)
			->paginate("users.*, 
						brands.*, 
						announcements.*, 
						COALESCE(AVG(ratings.rating), 0) AS author_rate,
						COALESCE(SUM(partnerships.amount), 0) AS total_spend", 10);

		view("dashboard/announcements/index", ['data' => $annoucements]);
	}

	public static function create()
	{// Middleware: Check authorization for brand
		AuthorizationMiddleware::handle(['brand']);
		view("dashboard/announcements/create");
	}

	public static function store()
	{
		AuthorizationMiddleware::handle(['brand']);
		$data = $_POST;
		$data['author_id'] = $_SESSION['USER']->id;
		// Insert the submitted announcement data
		Announcement::insert($data);
		Router::redirect("dashboard");
	}

	public static function show($params)
	{// Middleware: Check authorization for admin and influencer
		AuthorizationMiddleware::handle(['admin', 'influencer']);
		// Find and display a specific announcement
		$annoucement = Announcement::find($params['id']);
		view("dashboard/announcements/show", json_decode(json_encode($annoucement), true));
	}
}
