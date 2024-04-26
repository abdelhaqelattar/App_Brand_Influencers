<?php 

namespace App\Models;

use App\Core\Model;

class Rating extends Model
{

	protected static $table = 'ratings';

	protected static $fillable = [
		'user_id',
		'rated_user_id',
		'rating'
	];
}