<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PostComment
 * 
 * @property int $id
 * @property int $post_id
 * @property int|null $parent_id
 * @property string $title
 * @property string $published
 * @property Carbon $published_at
 * @property string|null $content
 *
 * @package App\Models
 */
class PostComment extends Model
{
	protected $table = 'post_comment';
	public $timestamps = false;

	protected $casts = [
		'post_id' => 'int',
		'parent_id' => 'int'
	];

	protected $dates = [
		'published_at'
	];

	protected $fillable = [
		'post_id',
		'parent_id',
		'title',
		'published',
		'published_at',
		'content'
	];
}
