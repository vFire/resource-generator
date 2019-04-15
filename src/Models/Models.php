<?php

namespace vFire\ResourceGenerator\Models;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{

	/**
	 * @var  string
	 */
	protected $table = 'models';

	protected $casts = [
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
	];
}