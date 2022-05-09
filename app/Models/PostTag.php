<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PostTag
 * 
 * @property int $id
 * @property int $post_id
 * @property int $tag_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class PostTag extends Model
{
	protected $table = 'post_tag';

	protected $casts = [
		'post_id' => 'int',
		'tag_id' => 'int'
	];

	protected $fillable = [
		'post_id',
		'tag_id'
	];
}
