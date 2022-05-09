<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * 
 * @property int $id
 * @property int $author_id
 * @property int $user_id
 * @property string $title
 * @property string $metatitle
 * @property string $slug
 * @property string $summary
 * @property string $published
 * @property Carbon $published_at
 * @property string $content
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Post extends Model
{
	protected $table = 'posts';

	protected $casts = [
		'author_id' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'published_at'
	];

	protected $fillable = [
		'author_id',
		'user_id',
		'title',
		'metatitle',
		'slug',
		'summary',
		'published',
		'published_at',
		'content'
	];
}
