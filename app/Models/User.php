<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $introduce
 * @property string $education
 * @property string $experience
 * @property string $skill
 * @property string $own_project
 * @property string $certificate
 * @property string $prize
 * 
 * @property Collection|Account[] $accounts
 * @property Collection|Apply[] $applies
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'user';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'introduce',
		'education',
		'experience',
		'skill',
		'own_project',
		'certificate',
		'prize'
	];

	public function accounts()
	{
		return $this->hasMany(Account::class, 'uid');
	}

	public function applies()
	{
		return $this->hasMany(Apply::class, 'uid');
	}
}
