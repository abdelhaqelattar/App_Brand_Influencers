<?php

namespace App\Middlewares;

use App\Core\Router;
use App\Models\DeletedAccount;
use App\Models\User;

class AuthenticationMiddleware
{
    
    // Declare a static method named "handle" to authenticate users
    public static function handle()
    {
        // Check if the "USER" key is set in the session
        if (!isset($_SESSION['USER'])) {
            // Redirect the user to the login page
            Router::redirect('login');
            // Stop script execution
            exit();
        }
        
        // Find the user with the given ID in the session
        $user = User::find($_SESSION['USER']->id);

        // If the user does not exist, redirect the user to the logout page
        if (!$user) {
            // TODO: 
            Router::redirect('logout');
            exit();
        }

        // Check if the user has a deleted account that has been approved
        $deleted = DeletedAccount::where("user_id", '=', $_SESSION['USER']->id)->first();
        if ($deleted && $deleted->approved == true) {
            // Redirect the user to the logout page
            Router::redirect('logout');
            exit();
        }

        // Check if the user has a role and if the current page is not the welcome page
        if (!$user->role && "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" != APP_URL . '/welcome') {
            // Redirect the user to the welcome page
            Router::redirect('welcome');
            exit();
        } else {
            // Set the "USER" key in the session to the authenticated user
            $_SESSION['USER'] = $user;
        }
    }
}
