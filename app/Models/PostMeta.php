<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PostMeta
 * 
 * @property int $id
 * @property int $post_id
 * @property string $key
 * @property string $content
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class PostMeta extends Model
{
	protected $table = 'post_metas';

	protected $casts = [
		'post_id' => 'int'
	];

	protected $fillable = [
		'post_id',
		'key',
		'content'
	];
}
