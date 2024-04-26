<?php

/**
 * This file contains all the routes of the application, it is responsible 
 * for matching a URL with an action to execute in the code.
 * This file helps to make the code more readable and maintainable.
 * And it also helps to avoid repeating the same code in different files.
 * All the routes of the application are declared in this file.
 * And in order to match a URL with an action, the Router class is used.
 */


use App\Core\Router;

/**  
 * This line imports the AuthenticationMiddleware class from the App\Middlewares namespace. 
 * This means that the code can now use the AuthenticationMiddleware class 
 * without having to write the full namespace every time it is used.
 */
use App\Middlewares\AuthenticationMiddleware;
/**
 * Thoses lines imports the controllers from the App\Controllers namespace.
 * This means that the code can now use those controllers
 */

use App\Controllers\AnnouncementController;
use App\Controllers\AuthController;
use App\Controllers\BrandController;
use App\Controllers\ChatController;
use App\Controllers\CreditController;
use App\Controllers\DashboardController;
use App\Controllers\DeletedAccountController;
use App\Controllers\ErrorController;
use App\Controllers\HomeController;
use App\Controllers\InfluencerController;
use App\Controllers\PartnershipController;
use App\Controllers\RatingController;
use App\Controllers\ReviewController;
use App\Controllers\TransactionController;
use App\Models\User;


// FRONT END

/**
 * FRONT END
 * Those lines declares the static pages of the site (about, services,faq,contact, etc.).
 * The get routes simply return a view, while the post route allows to send a message via the form.
 */


/**
 * The Router class has four static methods for each HTTP method (get, post, put, delete).
 * Each method takes two parameters: the URL and the action to execute.
 * The action can be a closure or a controller.
 * 
 * Syntaxe of a routes Using Closures:
 * Router::get('/url', function () {
 *    
 * });
 * Router::post('/url', function () {
 *    code to execute
 * });
 * Router::put('/url', function () {
 *   /code to execute
 * });
 * Router::delete('/url', function () {
 *  /code to execute
 * });
 * 
 * Syntaxe of a routes Using Controllers:
 * Router::get('/url', [Controller::class, 'method']);
 * Router::post('/url', [Controller::class, 'method']);
 * Router::put('/url', [Controller::class, 'method']);
 * Router::delete('/url', [Controller::class, 'method']);
 */


/**
 * Those lines declares the static pages of the site (about, services,faq,contact, etc.).
 * arow function syntaxe fn () => view("front/about" ) use for return view of pages in folder front
 **/
Router::get('/', [HomeController::class, 'index']);
Router::get('/about', fn () => view("front/about"));
Router::get('/services', fn () => view("front/services"));
Router::get('/service-detail', fn () => view("front/service-detail"));
Router::get('/faq', fn () => view("front/faq"));
Router::get('/contact', fn () => view("front/contact"));
Router::get('/terms', fn () => view("front/terms"));
Router::get('/privacy', fn () => view("front/privacy"));
/**
 * This line declares a route for the contact page using the HTTP POST method.
 * When the user submits the contact form, the anonymous function associated with this route will be executed.
 */
Router::post('/contact', fn () => view("front/contact"));

// AUTHENTIFICATION
/**
 * AUTHENTIFICATION
 * Those lines declares the routes for the authentication pages (login, register, logout).
 * The get routes simply return a view, while the post route allows to send a message via the form.
 */
Router::get('/login', function () {
     /**
     * This line checks if the user is already logged in by checking if the $_SESSION['USER'] variable is set.
     * If the user is already logged in, the "dashboard" redirection function will 
     * be called to redirect the user to the dashboard.
     */
    if (!isset($_SESSION['USER']) && isset($_COOKIE['remember_token'])) {
        /**
         * This line retrieves the remember token from the cookie and looks for a user with this token in the database.
         */

        // Look up the token in your database or file
        $token = $_COOKIE['remember_token'];
        $user = User::where('token', '=', $token)->first();
        /**
          * If a matching user is found, this code authenticates the user by storing the user object in the $_SESSION['USER'] variable.
        **/

       if ($user) {
            // Authenticate the user
            $_SESSION['USER'] = $user;
        }
    }
    /**
         * This line checks if the user is already logged in by checking if the $_SESSION['USER'] variable is set.
         * If the user is already logged in, the "dashboard" redirection function will 
         * be called to redirect the user to the dashboard.
     */

    if (isset($_SESSION['USER'])) {
       Router::redirect("dashboard");
    }
    /**
         * If the user is not logged in, this line displays the login page.
         * This page will allow the user to enter his login information to log in to the application.
     */
    view('auth/login');
});

/**
     * This line declares a route for the registration page using the HTTP GET method.
     * When the user accesses this page, the anonymous function associated with this route will be executed.
 */

Router::get('/register', function () {
    /**
         * This line checks if the user is already logged in by checking if the $_SESSION['USER'] variable is set.
         * If the user is already logged in, the "dashboard" redirection function will 
         * be called to redirect the user to the dashboard.
     */
    if (isset($_SESSION['USER'])) {
       Router::redirect("dashboard");
    }
    /**
        * If the user is not logged in, this line displays the registration page.
        * This page will allow the user to enter his registration information to register in the application.
     */
    view('auth/register');
});
/**
     * This line declares a route for the login page using the HTTP POST method.
     * After the user submits the login form, The login method of the AuthController will be executed. 
 **/
Router::post('/login', [AuthController::class, 'login']);

Router::post('/register', [AuthController::class, 'register']);
/**
     * This line declares a route for the error page using the HTTP GET method.
     * ErrorController::index is the method that will be executed when the user accesses this page.
 */

Router::get('/error/{id}', function (...$args) {
    ErrorController::index($args[0]);
});
/**
     * This line declares a route for the welcome page using the HTTP GET method.
     * After the user logs in, the welcome page will be displayed.
 **/
/**
 * This function defines a route using HTTP GET method for the "/welcome" URL.
 *  It checks if the logged-in user has a role and redirects to the dashboard if so, otherwise it displays the authentication welcome view.
 */
Router::get('/welcome', function () {

    if ($_SESSION['USER']->role) {
       Router::redirect("dashboard");
    }
    view("auth/welcome");
});


Router::post('/welcome', [AuthController::class, 'setprofile']);
/**
 * This line declares a route for the logout page using the HTTP POST method.
 * After the user logs out, the logout method of the AuthController will be executed.
 */
Router::post('/logout', [AuthController::class, 'logout']);


// DASHBOARD
/**
     * This line declares a route for the dashboard page using the HTTP GET method.
     * DashboardController::index is the method that will be executed when the user accesses this page.
     * AuthenticationMiddleware::class is the middleware that will be executed before the DashboardController::index method.
 */
Router::get('/dashboard', [DashboardController::class, 'index'], AuthenticationMiddleware::class);
/**
 * This line declares a route for the chat page using the HTTP GET method.
 * ChatController::index is the method that will be executed when the user accesses this page.

 */
Router::get('/chat', [ChatController::class, 'index'], AuthenticationMiddleware::class);
/**
 * This function defines a route using HTTP GET method for the "/chat/{id}" URL with a parameter "id".
 *  It calls the "conversation" method of the ChatController class with the first argument of the variable argument list.
 *  It also uses the AuthenticationMiddleware class to authenticate the user before accessing the chat.
 */
Router::get('/chat/{id}', function (...$args) {
    ChatController::conversation($args[0]);
}, AuthenticationMiddleware::class);
/**
 *  This function defines a route using HTTP POST method for the "/chat/{id}" URL with a parameter "id".
 *  It calls the "send_message" method of the ChatController class with the first argument of the variable argument list. 
 * This function is used to send a message in a conversation.
 */
Router::post('/chat/{id}', function (...$args) {
    ChatController::send_message($args[0]);
}, AuthenticationMiddleware::class);
/**
 * These functions define routes to display a list of influencers and to display a specific influencer's details using HTTP GET method.
 *  The first route calls the index method of the InfluencerController class, while the second route calls the show method of the same class
 *  with the first argument of the variable argument list, which is the influencer's ID. Both routes use the AuthenticationMiddleware class to authenticate the user before accessing the influencers' information.
 */

Router::get('/influencers', [InfluencerController::class, 'index'], AuthenticationMiddleware::class);

Router::get('/influencers/{id}', function (...$args) {
    InfluencerController::show($args[0]);
}, AuthenticationMiddleware::class);
// same for brands
Router::get('/brands', [BrandController::class, 'index'], AuthenticationMiddleware::class);

Router::get('/brands/{id}', function (...$args) {
    BrandController::show($args[0]);
}, AuthenticationMiddleware::class);
/**
     * These functions define routes for managing partnership proposals using HTTP GET and POST methods. The first route displays a list of partnership proposals by calling the "proposals" method of the PartnershipController class. 
     * The second route displays the partnership index page by calling the "index" method of the same class. 
     * The third route is used to create a new partnership proposal by calling the "create" method of the PartnershipController class using HTTP POST method.
     * The fourth route is used to update the status of a partnership proposal by calling the "updateStatus" method of the PartnershipController class with the first argument of the variable argument list, which is the ID of the proposal to be updated.
    *  All of these routes use the AuthenticationMiddleware class to authenticate the user before accessing the partnership information
 */
Router::get('/proposals', [PartnershipController::class, "proposals"], AuthenticationMiddleware::class);
Router::get('/partnership', [PartnershipController::class, "index"], AuthenticationMiddleware::class);
Router::post('/partnership/request', [PartnershipController::class, "create"], AuthenticationMiddleware::class);

Router::post('/partnership/{id}', function (...$args) {
    PartnershipController::updateStatus($args[0]);
}, AuthenticationMiddleware::class);
/**
     * These functions define routes for managing user profiles using HTTP GET and POST methods.
     *  The first route checks the user's role and displays the corresponding profile page (influencer or brand) by calling the "profile" method of the appropriate controller class. 
     * The second route checks the user's role and updates the corresponding profile information by calling the "setprofile" method of the appropriate controller class using HTTP POST method.
     *  Both routes use the AuthenticationMiddleware class to authenticate the user before accessing the profile information.
 */

Router::get('/profile', function () {
    $role = $_SESSION['USER']->role;
    if ($role == 'influencer') {
        InfluencerController::profile();
    } else if ($role == 'brand') {
        BrandController::profile();
    }
}, AuthenticationMiddleware::class);

Router::post('/profile', function () {
    $role = $_SESSION['USER']->role;
    if ($role == 'influencer') {
        InfluencerController::setprofile();
    } else if ($role == 'brand') {
        BrandController::setprofile();
    }
}, AuthenticationMiddleware::class);
/**
   * These functions define routes for managing user transactions and account deletion using HTTP GET and POST methods.
   *  The first route is used to delete the user's account by calling the "create" method of the DeletedAccountController class using HTTP POST method. 
   * The second route displays a list of the user's transactions by calling the "index" method of the TransactionController class using HTTP GET method.
   * The third route is used to create a new transaction by calling the "create" method of the TransactionController class with the first argument of the variable argument list using HTTP POST method.
   *  All of these routes use the AuthenticationMiddleware class to authenticate the user before accessing the transaction and account deletion information.
 */

Router::post('/user-delete', [DeletedAccountController::class, 'create'], AuthenticationMiddleware::class);
Router::get('/transactions', [TransactionController::class, 'index'], AuthenticationMiddleware::class);

Router::post('/transactions', function (...$args) {
    TransactionController::create($args[0]);
}, AuthenticationMiddleware::class);
/**
 * These functions define routes for managing user credits using HTTP GET and POST methods. 
 * The first route displays a list of the user's credits by calling the "index" method of the CreditController class using HTTP GET method. 
 * The second route is used to create a new credit by calling the "create" method of the CreditController class using HTTP POST method.
 * The third route is used to delete a credit by calling the "delete" method of the CreditController class with the first argument of the variable argument list,
 *  which is the ID of the credit to be deleted, using HTTP POST method. 
 * All of these routes use the AuthenticationMiddleware class to authenticate the user before accessing the credit information.
 */
Router::get('/credits', [CreditController::class, 'index'], AuthenticationMiddleware::class);
Router::post('/credits', [CreditController::class, 'create'], AuthenticationMiddleware::class);
Router::post('/credits/{id}/delete', function (...$args) {
    CreditController::delete($args[0]);
}, AuthenticationMiddleware::class);
Router::post('/rating/{id}', function (...$args) {
    RatingController::rate($args[0]);
}, AuthenticationMiddleware::class);

Router::post('/review/{id}', function (...$args) {
    ReviewController::review($args[0]);
}, AuthenticationMiddleware::class);

Router::get('/announcements', [AnnouncementController::class, 'index'], AuthenticationMiddleware::class);
Router::get('/announcements/create', [AnnouncementController::class, 'create'], AuthenticationMiddleware::class);
Router::post('/announcements/create', [AnnouncementController::class, 'store'], AuthenticationMiddleware::class);
Router::get('/announcements/{id}', function (...$args) {
    AnnouncementController::show($args[0]);
}, AuthenticationMiddleware::class);

Router::get('/delete-requests', [AuthController::class, 'deleteRequest'], AuthenticationMiddleware::class);
Router::post('/delete-requests', [AuthController::class, 'delete'], AuthenticationMiddleware::class);
Router::get('/contacts', [DashboardController::class, 'contact'], AuthenticationMiddleware::class);