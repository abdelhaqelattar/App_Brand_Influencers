<?php 

namespace App\Controllers;

use App\Core\Controller;

class ErrorController extends Controller
{
    public static function index($params)
    {
        switch($params['id']) {
            case 404:
                $data = [
                    "title" => "Page Not Found :(",
                    "description" => "Oops! 😖 The requested URL was not found on this server."
                ];
                break;
            case 403:
                $data = [
                    "title" => "You are not authorized! 🔐",
                    "description" => "You do not have permission to view this page using the credentials that you have provided while login. Please contact your site administrator."
                ];
                break;
            case 500:
                $data = [
                    "title" => "Internal server error 👨🏻‍💻",
                    "description" => "Oops, something went wrong!"
                ];
                break;
            default:
                $data = [
                    "title" => "Error",
                    "description" => "An error has occurred."
                ];
                break;
        }
        view("miscellaneous/error", $data);
    }
}