<?php

namespace App\Models;

use App\Core\DB;
use App\Core\Model;

class User extends Model
{

	protected static $table = 'users';

	protected static $fillable = [
		'avatar',
		'role',
		'username',
		'email',
		'password',
		'balance',
		'token'
	];

	public static function auth()
	{
		// Check if user is authenticated
		return isset($_SESSION['USER']);
	}

	
}
