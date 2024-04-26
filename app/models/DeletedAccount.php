<?php 

namespace App\Models;

use App\Core\Model;

class DeletedAccount extends Model
{

	protected static $table = 'deletedaccounts';

	protected static $fillable = [
		'user_id',
        'approved'
	];
}