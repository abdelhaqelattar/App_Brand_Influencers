<?php


namespace App\Models;

use App\Core\Model;

class Notification extends Model
{
    protected static $table = 'notifications';

    protected static $fillable = [
        'user_id',
        'title',
        'message'
    ];
}
