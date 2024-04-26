<?php


namespace App\Models;

use App\Core\Model;

class Contact extends Model
{
    protected static $table = 'contact';

    protected static $fillable = [
        'name',
        'phone',
        'email',
        'subject',
        'message'
    ];
}
