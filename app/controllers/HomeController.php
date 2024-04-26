<?php
 /**
  * namespace is used to avoid conflicts between classes with the same name
  */
namespace App\Controllers;

/**
 * use App\Core\Controller to import the core controller
 * use App\Models\Contact to import the contact model
 */
use App\Core\Controller;
use App\Core\Router;
use App\Models\Contact;

/**
 * HomeController class
 * this class is responsible for the home page
 * this class extends the core controller
 */
class HomeController extends Controller
{
	/**
	 * index function
	 * this function is responsible for the home page
	 * it loads the home page view
	 * 
	 * @return void
	 */
	public static function index()
	{
		view('front/home');
	}

	/**
	 * contact function
	 * this function is responsible for the contact form
	 * it inserts the contact form data into the database
	 * it redirects Router::back to the home page
	 * 
	 * @return void
	 */
	public static function contact()
	{
		Contact::insert($_POST);
		Router::back();		
	}
}
