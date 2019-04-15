<?php

namespace vFire\ResourceGenerator\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{

	/**
	 * @var  string
	 */
	protected $table = 'modules';

	protected $casts = [
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
	];
}