<?php

namespace App\Controllers;
/**
 * use App\Core\Controller to import the core controller
 *  use App\Core\Router to import the router class
 * use App\Helpers\Validator to import the validator class
 * use App\Models\Brand to import the brand model
 * use App\Models\Partnership to import the partnership model
 * use App\Models\Rating to import the rating model
 * use App\Models\Review to import the review model
 * use App\Models\User to import the user model
 * use App\Middlewares\AuthorizationMiddleware to import the authorization middleware
 
 */
use App\Core\Controller;
use App\Core\Router;
use App\Helpers\Validator;
use App\Middlewares\AuthorizationMiddleware;
use App\Models\User;
use App\Models\Brand;
use App\Models\Partnership;
use App\Models\Rating;
use App\Models\Review;
/**
 * BrandController class
 * this class is responsible for the brand
 * this class extends the core controller
 */
class BrandController extends Controller
{
    /**
	 * index function
     * this function is responsible for the brand page
     * it loads the brand page view
     *  
     * 	 */
    public static function index()
    {
        AuthorizationMiddleware::handle(['admin', 'influencer']);
        $data = array();
        $data['data'] = Brand::all();
        view("dashboard/brands/grid", $data);
    }

    /**
	 * show function
     * this function is responsible for the brand show page
     * it loads the brand show page view
     * 
     * @param array $args
     * @return void
	 */
    public static function show($args)
    {
        AuthorizationMiddleware::handle(['admin', 'influencer']);
        $brand = Brand::about($args['id']);
        $brand->allowable = Partnership::hasPartnershipsWith($_SESSION['USER']->id, $brand->user_id);
        $brand->rating = Rating::where('user_id', '=', $_SESSION['USER']->id)->where('rated_user_id', '=', $brand->user_id)->first()->rating ?? 0;
        $brand->rate = Rating::where('rated_user_id', '=', $brand->user_id)->avg('rating');
        $brand->reviews = Review::getReview($brand->user_id);
        $brand->partnerships = Brand::partnerships($brand->user_id);
        view("dashboard/brands/show", array_merge(json_decode(json_encode($brand), true)));
    }

    /**
	 * profile function
     * this function is responsible for the brand profile page
     * it loads the brand profile page view
	 */
    public static function profile()
    {
        AuthorizationMiddleware::handle(['brand']);
        $brand = Brand::find($_SESSION['USER']->id);
        view("dashboard/brands/profile", json_decode(json_encode($brand), true));
    }
/**
	 * setprofile function
     * this function is responsible for the brand profile page
     * it loads the brand profile page view
	 */
    public static function setprofile()
    {
        AuthorizationMiddleware::handle(['brand']);
        $data = $_POST;
        unset($data['email']);
        $data['user_id'] = $_SESSION['USER']->id;

        $errors = Validator::validate($data, [
            'name' => 'required',
            'contact' => 'required',
        ]);
        // Check if there are any errors
        if (!empty($errors)) {
            // Display the errors
            view("dashboard/brands/profile", array_merge($_POST, ['errors' => $errors]));
        } else {
            $arr = array();
            if (isset($_FILES["avatar"]) && $_FILES["avatar"]["error"] == 0) {
                $data['avatar'] = static::save();
            }
            if($data['avatar']) {
                $arr['avatar'] = $data['avatar'];
            }
            echo "test";
            $arr['username'] =  $data["name"];
            // No errors, proceed with the rest of your code
            print_r($data);
            
            Brand::update($data['id'], $data);
            User::update($data['user_id'], $arr);
            Router::back();
        }
    }
    /**
	 * save function
     * this function is responsible for the brand save page
     * it loads the brand save page view
     *  
	 */
    private static function save()
    {
        // Define the path where the uploaded file will be stored
        $target_dir = "uploads/";

        // Get the name of the uploaded file
        $original_name = $_FILES["avatar"]["name"];
        
        $extension = pathinfo($original_name, PATHINFO_EXTENSION);
        $new_name = uniqid() . "." . $extension;
        $target_file = $target_dir . $new_name;

        // Check if the file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
        } else {
            // Upload the file
            if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["avatar"]["name"])) . " has been uploaded.";

                return APP_URL . '/' . $target_file;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        return false;
    }
}
