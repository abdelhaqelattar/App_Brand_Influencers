<?php

namespace App\Models;

use App\Core\Model;
use App\Core\DB;
use PDO;

class Influencer extends Model
{

	protected static $table = 'influencers';

	protected static $fillable = [
		'user_id',
		'first_name',
		'last_name',
		'job',
		'age',
		'contact',
		'language',
		'country',
		'facebook',
		'instagram',
		'twitter',
		'linkedin'
	];

	public static function all()
	{
		// Build the query to select all announcements and join the users table
		$query = 'SELECT *, ' . static::$table . '.id as id from ' . static::$table;
		$query .= ' inner join users on users.id = ' . static::$table . '.user_id';
		// Execute the query and fetch the results as an object
		$result = DB::query($query)->fetchAll(PDO::FETCH_OBJ);
		return $result;
	}
	/**
	 * récupère un enregistrement unique à partir d'une table de base de données associée à la classe
	 * * @param int $id
	 * @return array	
	 * Join the users table to get the user's name, email and avatar
	 */

	public static function find($id)
	{
		$query = 'SELECT *, ' . static::$table . '.id as id from ' . static::$table;
		$query .= ' inner join users on users.id = ' . static::$table . '.user_id';
		$query .= '  where user_id = :user_id';
		$data = ['user_id' => $id];
		$result = DB::query($query, $data)->fetchAll(PDO::FETCH_OBJ);
		return $result[0] ?? [];
	}



	public static function about($id)
	{
		$query = 'SELECT *, ' . static::$table . '.id as id from ' . static::$table;
		$query .= ' inner join users on users.id = ' . static::$table . '.user_id';
		$query .= '  where ' . static::$table . '.id = :id';
		$data = ['id' => $id];
		$result = DB::query($query, $data)->fetchAll(PDO::FETCH_OBJ);
		return $result[0] ?? [];
	}

	public static function partnerships($id)
	{
		// Build the query to select the partnerships associated with the influencer
		$query = 'SELECT * from partnerships';
		$query .= ' inner join users on users.id = partnerships.influencer_id';
		// Add a where clause to filter the results by the influencer_id and status
		$query .= '  where partnerships.influencer_id = :influencer_id and status = "Done"';
		// Order the results by id and start_date in descending order
		$query .= '  order by partnerships.id desc, partnerships.start_date';
		$data = ['influencer_id' => $id];
	
		// Execute the query and fetch the results as an object
		$result = DB::query($query, $data)->fetchAll(PDO::FETCH_OBJ);
	
		// Return the results
		return $result;
	}
}
