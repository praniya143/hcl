<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAuth extends Model
{
	protected $table = 'user_auth';
	const CREATED_AT = 'creation_at';
	const UPDATED_AT = 'updated_at';
}
