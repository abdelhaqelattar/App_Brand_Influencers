<?php

/**
 * App class
 */

use App\Core\Router;

class App
{
    /**
     * Run the application.
     */
    public function run()
    {
        // Include the routes file
        require APP_FOLDER . 'routes/web.php';
        require APP_FOLDER . 'routes/api.php';

        // Route the request
        $path = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        Router::route($_SERVER['REQUEST_METHOD'], $path);
    }
}
