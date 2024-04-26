<?php


namespace App\Core;

use App\Middlewares\AuthenticationMiddleware;

class Router
{
    /**
     * The array of routes for the GET method.
     *
     * @var array
     */
    private static $getRoutes = [];
    

    /**
     * The array of routes for the POST method.
     *
     * @var array
     */
    private static $postRoutes = [];

    /**
     * The array of routes for the PUT method.
     *
     * @var array
     */
    private static $putRoutes = [];

    /**
     * The array of routes for the DELETE method.
     *
     * @var array
     */
    private static $deleteRoutes = [];

    /**
     * Add a new GET route to the router.
     *
     * @param string $path The URL path of the route.
     * @param mixed $handler The function or controller method that handles the route.
     * @param mixed $middleware The middleware to be applied to the route.
     */
    public static function get($path, $handler, $middleware = null)
    {
        if ($middleware) {
            self::$getRoutes[] = array(
                'path' => APP_URL . $path,
                'handler' => function ($matches) use ($handler, $middleware) {
                    $middleware::handle();
                    return $handler($matches);
                }
            );
        } else {
            self::$getRoutes[] = array(
                'path' => APP_URL . $path,
                'handler' => $handler
            );
        }
    }

    /**
     * Add a new POST route to the router.
     *
     * @param string $path The URL path of the route.
     * @param mixed $handler The function or controller method that handles the route.
     * @param mixed $middleware The middleware to be applied to the route.
     */
    public static function post($path, $handler, $middleware = null)
    {
        if ($middleware) {
            self::$postRoutes[] = array(
                'path' => APP_URL . $path,
                'handler' => function ($matches) use ($handler, $middleware) {
                    $middleware::handle();
                    return $handler($matches);
                }
            );
        } else {
            self::$postRoutes[] = array(
                'path' => APP_URL . $path,
                'handler' => $handler
            );
        }
    }

    /**
     * Add a new PUT route to the router.
     *
     * @param string $path The URL path of the route.
     * @param mixed $handler The function or controller method that handles the route.
     * @param mixed $middleware The middleware to be applied to the route.
     */
    public static function put($path, $handler, $middleware = null)
    {
        if ($middleware) {
            self::$putRoutes[] = array(
                'path' => APP_URL . $path,
                'handler' => function ($matches) use ($handler, $middleware) {
                    $middleware::handle();
                    return $handler($matches);
                }
            );
        } else {
            self::$putRoutes[] = array(
                'path' => APP_URL . $path,
                'handler' => $handler
            );
        }
    }

    /**
     * Add a new DELETE route to the router.
     *
     * @param string $path The URL path of the route.
     * @param mixed $handler The function or controller method that handles the route.
     * @param mixed $middleware The middleware to be applied to the route.
     */

    public static function delete($path, $handler, $middleware = null)
    {
        if ($middleware) {
            self::$deleteRoutes[] = array(
                'path' => APP_URL . $path,
                'handler' => function ($matches) use ($handler, $middleware) {
                    $middleware::handle();
                    return $handler($matches);
                }
            );
        } else {
            self::$deleteRoutes[] = array(
                'path' => APP_URL . $path,
                'handler' => $handler
            );
        }
    }

    /**
     * Match the current request to a route and execute the corresponding handler.
     *
     * @param string $method The HTTP method of the request.
     * @param string $path The URL path of the request.
     */
    public static function route($method, $path)
    {
        // Determine which routes array to use based on the HTTP method
        $routes = array();
        switch ($method) {
            case 'GET':
                $routes = self::$getRoutes;
                break;
            case 'POST':
                $routes = self::$postRoutes;
                break;
            case 'PUT':
                $routes = self::$putRoutes;
                break;
            case 'DELETE':
                $routes = self::$deleteRoutes;
                break;
        }

        // Iterate through the routes array and attempt to match the request path to a route path
        foreach ($routes as $route) {
            $pattern = str_replace('/', '\/', $route['path']);
            $pattern = preg_replace('/\{(\w+)\}/', '(?P<$1>[^\/]+)', $pattern);
            $pattern = '/^' . $pattern . '$/';
            $path = explode('?', $path)[0];
            if (preg_match($pattern, $path, $matches)) {
                $index = array_search($route, $routes);
                $handler = $routes[$index]['handler'];
                return $handler($matches);
                break;
            }
        }

        // If no route matches, return a 404 error
        if ($path != APP_URL . '/miscellaneous/404')
            self::redirect("miscellaneous/404");
    }

    /**
     * Redirect to a new URL.
     *
     * @param string $path The URL path to redirect to.
     * 
     * @return void
     */
    public static function redirect($path)
    {
        header('Location: ' . APP_URL . '/' . $path);
        exit();
    }

    /**
     * Redirect to the previous URL.
     * 
     * @return void
     */
    public static function back()
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
}
