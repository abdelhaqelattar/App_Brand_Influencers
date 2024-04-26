<?php 

namespace App\Models;
 
/**
 * Namespace declaration & other namespaces in use.
 * It is used to define the current namespace for the Announcement model.
 * And it helps to avoid conflicts between class names from different namespaces.
 */

/**
 * Importing the core Model class
 * The import is for the core Model class which is used to define the base model.
 */

use App\Core\Model;
/**
 * class of "Announcement" that extends the "Model" class. It defines the properties of an announcement and its corresponding database table.
 *  The "protected static $table" property specifies the name of the database table for this model, and the "protected static $fillable" property specifies the fields that can be filled when creating a new announcement.
 *  The fields include the announcement's title, description, author ID, amount, duration, and duration unit.
 */

class Announcement extends Model
{

	protected static $table = 'announcements';

	protected static $fillable = [
		'title',
		'description',
		'author_id',
		'amount',
		'duration',
		'duration_unit'
	];
}