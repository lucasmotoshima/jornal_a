<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PostCategory
 * 
 * @property int $id
 * @property int $post_id
 * @property int $category_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class PostCategory extends Model
{
	protected $table = 'post_category';

	protected $casts = [
		'post_id' => 'int',
		'category_id' => 'int'
	];

	protected $fillable = [
		'post_id',
		'category_id'
	];
}
