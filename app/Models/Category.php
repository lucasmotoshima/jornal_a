<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $id
 * @property int $parent_id
 * @property string $title
 * @property string $metatitle
 * @property string $slug
 * @property string $content
 * @property string $active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'categories';

	protected $casts = [
		'parent_id' => 'int'
	];

	protected $fillable = [
		'parent_id',
		'title',
		'metatitle',
		'slug',
		'content',
		'active'
	];
}
