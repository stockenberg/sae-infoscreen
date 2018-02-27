<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lecturer extends Model
{
    //

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function departments()
	{
		return $this->belongsToMany(Department::class);
	}
}
