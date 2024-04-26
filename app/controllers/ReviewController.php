<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Router;
use App\Models\Review;

class ReviewController extends Controller
{

    public static function review($params)
    {
        $reviewed_user_id = $params['id'];
        
        Review::insert([
            'reviewer_id' => $_SESSION['USER']->id,
            'reviewed_user_id' => $reviewed_user_id,
            'comment' => $_POST['review']
        ]);

        Router::back();
    }
}
