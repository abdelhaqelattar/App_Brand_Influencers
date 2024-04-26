<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Router;
use App\Middlewares\AuthorizationMiddleware;
use App\Models\DeletedAccount;


class DeletedAccountController extends Controller
{

    public static function create()
    {
        AuthorizationMiddleware::handle(['brand', 'influencer']);
        DeletedAccount::insert([
            'user_id' => $_SESSION['USER']->id,
        ]);
        Router::back();
    }
}
