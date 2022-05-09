<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 *
 * Class User
 *
 * @property int $id
 * @property int|null $role_id
 * @property string $name
 * @property string $email
 * @property string|null $avatar
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $settings
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Role|null $role
 * @property Collection|Role[] $roles
 *
 * @package App\Models
 */
class User extends \TCG\Voyager\Models\User
{
	use HasApiTokens, HasFactory, Notifiable;

	protected $table = 'users';

	protected $casts = [
		'role_id' => 'int'
	];

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'role_id',
		'name',
		'email',
		'avatar',
		'email_verified_at',
		'password',
		'remember_token',
		'settings'
	];

	public function role()
	{
		return $this->belongsTo(Role::class);
	}

	public function roles()
	{
		return $this->belongsToMany(Role::class, 'user_roles');
	}
}
