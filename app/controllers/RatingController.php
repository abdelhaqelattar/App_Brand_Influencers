<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Router;
use App\Models\Rating;

class RatingController extends Controller
{
    public static function rate($params)
    {
        $rated_user_id = $params['id'];
        $row =  Rating::where('rated_user_id', '=', $rated_user_id)->where('user_id', '=', $_SESSION['USER']->id)->first();
        if ($row) {
            Rating::update($row->id, ['rating' => $_POST['rating']]);
        } else {
            Rating::insert([
                'user_id' => $_SESSION['USER']->id,
                'rated_user_id' => $rated_user_id,
                'rating' => $_POST['rating']
            ]);
        }

        Router::back();
    }
}
