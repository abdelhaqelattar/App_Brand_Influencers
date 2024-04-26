<?php

namespace App\Models;

use App\Core\DB;
use App\Core\Model;
use PDO;

class Transaction extends Model
{

	protected static $table = 'transactions';

	protected static $fillable = [
		'user_id',
		'amount',
		'type',
		'partnership_id'
	];
	/**
	 * Function "balance()": retrieves the total balance of a user based on their ID by summing the "amount" field in the "transactions" table for the specified user.
	 */

	public static function balance($id)
	{
		return Transaction::where('user_id', "=", $id)->sum("amount");
	}
	/**
	 * Function "insert()": inserts a new record into a database table associated with the class,
	 *  after checking that the user balance is sufficient for negative amounts. If the amount is negative and the user's balance is less than the absolute value of the amount,
	 *  the function returns false and does not insert the record. If the record is successfully inserted, the user's balance is updated accordingly.
	 */

	public static function insert($data)
	{
		$balance = self::balance($data['user_id']);
		if ($data['amount'] < 0 && $balance < abs($data['amount'])) {
			return false;
		}
		parent::insert($data);
		$balance = self::balance($data['user_id']);
		User::update($data['user_id'], ['balance' => $balance]);
		return true;
	}
}
