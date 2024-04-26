<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Router;
use App\Helpers\Validator;
use App\Models\User;
use App\Models\Brand;
use App\Models\Influencer;
use App\Models\Chat;
use stdClass;



/**
 * ChatController class
 */
class ChatController extends Controller
{
    public static function index()
    {
        $conversations = Chat::conversations();
        view("dashboard/chat/index", ["conversations" => $conversations]);
    }

    public static function conversation($params)
    {
        $id = $params['id'];
        $cur_conversation = new stdClass();

        $user = User::find($id);
        if ($user->role == 'brand') {
            $cur_conversation = Brand::where('user_id', '=', $id)->first();
        } else if ($user->role == 'influencer') {
            $cur_conversation = Influencer::where('user_id', '=', $id)->first();
        }
        $cur_conversation->user_id = $id;
        $cur_conversation->avatar = $user->avatar;
        $cur_conversation->messages = Chat::messages($id);
        $cur_conversation->role = $user->role;
        $conversations = Chat::conversations();

        return view("dashboard/chat/index", ['cur_conversation' => $cur_conversation, "conversations" => $conversations]);
    }

    public static function refresh_conversation($params)
    {
        $id = $params['id'];
        $cur_conversation = new stdClass();

        $user = User::find($id);
        if ($user->role == 'brand') {
            $cur_conversation = Brand::where('user_id', '=', $id)->first();
        } else if ($user->role == 'influencer') {
            $cur_conversation = Influencer::where('user_id', '=', $id)->first();
        }
        $cur_conversation->user_id = $id;
        $cur_conversation->avatar = $user->avatar;
        $cur_conversation->messages = Chat::messages($id);
        $cur_conversation->role = $user->role;

        view("dashboard/chat/conversation", ['cur_conversation' => $cur_conversation]);
    }

    public static function send_message($params)
    {
        $id = $params['id'];
        $data = $_POST;
        $errors = Validator::validate($data, [
            'message' => 'required'
        ]);

        // Check if there are any errors
        if (!empty($errors)) {
            // Display the errors
            Router::back();
        } else {
            // No errors, proceed with the rest of your code
            Chat::insert([
                'sender_id' => $_SESSION['USER']->id,
                'receiver_id' => $id,
                'message_text' => $_POST['message']
            ]);
            Router::back();
        }
    }
}
