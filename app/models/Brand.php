<?php 

namespace App\Models;

use App\Core\DB;
use App\Core\Model;
use PDO;

class Brand extends Model
{

	protected static $table = 'brands';

	protected static $fillable = [
		'user_id',
		'name',
		'revenue',
		'contact',
		'language',
		'country',
		'facebook',
		'instagram',
		'twitter',
		'linkedin'
	];
/**
 * The method first constructs a SQL query to retrieve all fields and records from the table, as well as the user associated with each record using an inner join.
 *  It then executes the query using the DB::query() method and fetches the result as an array of objects using the PDO::FETCH_OBJ constant.
 * Finally, the method returns the result as an array of objects representing the retrieved records.
 */
	public static function all()
	{
		$query = 'SELECT *, ' . static::$table . '.id as id from ' . static::$table;
		$query .= ' inner join users on users.id = ' . static::$table . '.user_id';
		$result = DB::query($query)->fetchAll(PDO::FETCH_OBJ);;
		return $result;
	}
	/**
	 * The method first constructs a SQL query to retrieve all fields and records from the table,
	 *  as well as the user associated with each record using an inner join.
	 *  It then specifies a WHERE clause to filter the records based on the specified ID, which is passed to the method as a parameter.
	 * It retrieves a single record from the database table associated with the class based on the specified ID.
	 */

	public static function find($id)
	{
		$query = 'SELECT *, '. static::$table .'.id as id from ' . static::$table;
		$query .= ' inner join users on users.id = ' . static::$table . '.user_id';
		$query .= '  where user_id = :user_id';
		$data = ['user_id' => $id];
		$result = DB::query($query, $data)->fetchAll(PDO::FETCH_OBJ);;
		return $result[0];
	}
	/**
	 * The method first constructs a SQL query to retrieve all fields and records from the table, as well as the user associated with each record using an inner join. It then specifies a WHERE clause to filter the records based on the specified ID,
	 *  which is passed to the method as a parameter.
	 * The method then executes the query using the DB::query() method and fetches the result as an array of objects using the PDO::FETCH_OBJ constant. 
	 * it retrieves a single record 
	 */

	
	public static function about($id)
	{
		$query = 'SELECT *, ' . static::$table . '.id as id from ' . static::$table;
		$query .= ' inner join users on users.id = ' . static::$table . '.user_id';
		$query .= '  where ' . static::$table . '.id = :id';
		$data = ['id' => $id];
		$result = DB::query($query, $data)->fetchAll(PDO::FETCH_OBJ);;
		return $result[0] ?? [];
	}
 /**
  * we use  function partnerships to retrieve all fields and records from the table, as well as the user associated with each record using an inner join.
  *  It then specifies a WHERE clause to filter the records based on the specified ID, which is passed to the method as a parameter.
  */
	
	public static function partnerships($id)
	{
		$query = 'SELECT * from partnerships';
		$query .= ' inner join users on users.id = partnerships.brand_id';
		$query .= '  where partnerships.brand_id = :brand_id and status = "Done"';
		$query .= '  order by partnerships.id desc, partnerships.start_date';
		$data = ['brand_id' => $id];
		$result = DB::query($query, $data)->fetchAll(PDO::FETCH_OBJ);;
		return $result;
	}
}