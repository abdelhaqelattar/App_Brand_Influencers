<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Router;
use App\Helpers\Validator;
use App\Middlewares\AuthorizationMiddleware;
use App\Models\Influencer;
use App\Models\Partnership;
use App\Models\Rating;
use App\Models\Review;
use App\Models\User;

class InfluencerController extends Controller
{

    public static function index()
    {
        AuthorizationMiddleware::handle(['admin', 'brand']);
        $data = array();
        $data['data'] = Influencer::all();
        view("dashboard/influencers/grid", $data);
    }

    public static function show($args)
    {
        AuthorizationMiddleware::handle(['admin', 'brand']);
        $influencer = Influencer::about($args['id']);
        $influencer->allowable = Partnership::hasPartnershipsWith($influencer->user_id, $_SESSION['USER']->id);
        $influencer->rating = Rating::where('user_id', '=', $_SESSION['USER']->id)->where('rated_user_id', '=', $influencer->user_id)->first()->rating ?? 0;
        $influencer->rate = Rating::where('rated_user_id', '=', $influencer->user_id)->avg('rating');
        $influencer->reviews = Review::getReview($influencer->user_id);
        $influencer->partnerships = Influencer::partnerships($influencer->user_id);
        view("dashboard/influencers/show", array_merge(json_decode(json_encode($influencer), true)));
    }

    public static function profile()
    {
        AuthorizationMiddleware::handle(['admin', 'influencer']);
        $influencer = Influencer::find($_SESSION['USER']->id);
        view("dashboard/influencers/profile", json_decode(json_encode($influencer), true));
    }

    public static function setprofile()
    {
        AuthorizationMiddleware::handle(['admin', 'influencer']);
        $data = $_POST;
        unset($data['email']);
        $data['user_id'] = $_SESSION['USER']->id;

        $errors = Validator::validate($data, [
            'first_name' => 'required',
            'last_name' => 'required',
            'contact' => 'required'
        ]);
        // Check if there are any errors
        if (!empty($errors)) {
            // Display the errors
            view("dashboard/influencers/profile", array_merge($_POST, ['errors' => $errors]));
        } else {
            $arr = array();
            $data['avatar'] = static::save();
            if ($data['avatar']) {
                $arr['avatar'] = $data['avatar'];
            }
            $arr['username'] =  $data["first_name"] . ' ' . $data["last_name"];
            // No errors, proceed with the rest of your code
            Influencer::update($data['id'], $data);
            User::update($data['user_id'], $arr);
            Router::back();
        }
    }

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
