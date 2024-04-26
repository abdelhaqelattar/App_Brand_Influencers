<?php

namespace App\Middlewares;

use App\Core\Router;

// Define the AuthorizationMiddleware class
class AuthorizationMiddleware 
{
    // Declare a static method named "handle" to authorize users based on their roles
    public static function handle($roles)
    {
        // Call the handle method of the AuthenticationMiddleware class to authenticate the user
        AuthenticationMiddleware::handle();

        // Check if the user's role is not in the allowed roles
        if (!in_array($_SESSION['USER']->role, $roles)) {
            // Redirect the user to the 403 error page
            Router::redirect("error/403");
            // Stop script execution
            exit();
        }
    }
}