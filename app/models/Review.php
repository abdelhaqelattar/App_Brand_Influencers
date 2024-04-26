<?php 

namespace App\Models;

use App\Core\Model;
use App\Core\DB;
use PDO;

class Review extends Model
{

	protected static $table = 'reviews';

	protected static $fillable = [
		'reviewer_id',
		'reviewed_user_id',
		'comment'
	];
	/**
	 * Fonction "getReview()": récupère une liste des évaluations laissées par les utilisateurs pour un utilisateur spécifié, 
	 * triées par ordre décroissant d'ID. Les résultats incluent également les informations de l'utilisateur ayant laissé chaque évaluation 
	 * à l'aide d'une jointure interne avec la table "users".
	 */

	public static function getReview($id)
	{
		$query = 'SELECT * FROM ' . static::$table;
		$query .= ' INNER JOIN users on ' . static::$table . '.reviewer_id = users.id';
		$query .=' WHERE reviewed_user_id = :reviewed_user_id';
		$query .=' ORDER BY ' . static::$table . '.id desc';
		$data = ['reviewed_user_id' => $id];
		$result = DB::query($query, $data)->fetchAll(PDO::FETCH_OBJ);
		return $result;
	}
}