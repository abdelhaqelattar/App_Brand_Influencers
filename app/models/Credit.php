<?php 

namespace App\Models;

use App\Core\Model;

class Credit extends Model
{

	protected static $table = 'credits';

	protected static $fillable = [
		'user_id',
		'card_number',
		'card_type',
		'exp_date'
	];
}