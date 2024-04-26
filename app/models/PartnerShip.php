<?php

namespace App\Models;

use App\Core\Model;
use App\Core\DB;
use PDO;

class Partnership extends Model
{

	protected static $table = 'partnerships';

	protected static $fillable = [
		'influencer_id',
		'brand_id',
		'terms',
		'amount',
		'duration',
		'start_date',
		'status',
		'sender_id',
		'duration_unit'
	];
/**
 * Fonction "hasPartnershipsWith()": vérifie s'il existe des partenariats actifs entre un influenceur et une marque spécifiés.
 *  La fonction renvoie "true" si un tel partenariat existe, sinon elle renvoie "false".
 */

	public static function hasPartnershipsWith($influencer_id, $brand_id)
	{
		$query = 'SELECT * from partnerships';
		$query .= ' inner join users on users.id = partnerships.brand_id';
		$query .= '  where partnerships.influencer_id = :influencer_id and brand_id = :brand_id';
		$query .= '  order by partnerships.start_date';
		$data = [
			'influencer_id' => $influencer_id,
			'brand_id' => $brand_id
		];
		$result = DB::query($query, $data)->fetchAll(PDO::FETCH_OBJ);
		return $result ? true : false;
	}
}
