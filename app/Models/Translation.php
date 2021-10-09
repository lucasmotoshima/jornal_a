<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Translation
 * 
 * @property int $id
 * @property string $table_name
 * @property string $column_name
 * @property int $foreign_key
 * @property string $locale
 * @property string $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Translation extends Model
{
	protected $table = 'translations';

	protected $casts = [
		'foreign_key' => 'int'
	];

	protected $fillable = [
		'table_name',
		'column_name',
		'foreign_key',
		'locale',
		'value'
	];
}
