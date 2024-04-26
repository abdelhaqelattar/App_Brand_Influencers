<?php

namespace App\Models;

use App\Core\DB;
use App\Core\Model;
use PDO;

class Chat extends Model
{

    protected static $table = 'messages';

    protected static $fillable = [
        'sender_id',
        'receiver_id',
        'message_text'
    ];
    /**
     * Fonction "messages()": récupère une liste des messages échangés entre deux utilisateurs spécifiés, triés par date de création.
     */

    public static function messages($id)
    {
        $query = 'SELECT * from ' . static::$table;
        $query .= '  where (receiver_id = :user1_id and sender_id = :user2_id)';
        $query .= '     or (receiver_id = :user2_id and sender_id = :user1_id)';
        $query .= '  order by created_at ASC';

        $data = ['user1_id' => $id, 'user2_id' => $_SESSION['USER']->id];
        $result = DB::query($query, $data)->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public static function conversations()
    {
        $query = 'select *,case when sender_id != :user_id then sender_id else receiver_id end as contact '.
        'from (select um.*,  '.
                    ' row_number() over (partition by least(um.sender_id, um.receiver_id), greatest(um.sender_id, um.receiver_id) order by um.id desc) as seqnum '.
              'from messages um '.
             ') um '.
        'where seqnum = 1 and ( sender_id = :user_id or receiver_id = :user_id)'.
        'ORDER by created_at DESC';

        $data = ['user_id'=> $_SESSION['USER']->id];
        $result = DB::query($query, $data)->fetchAll(PDO::FETCH_OBJ);
        /**
         * If the logged in user has conversations
         * Get the contact of each conversation
         */

        if($result) {
            foreach($result as $cnv) {
                $cnv->contact = User::find($cnv->contact);
            }
        }

        return $result ?? null;
    }
}
