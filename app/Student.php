<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
	public function getCreatedAtAttribute($value)
	{
		return date('d.m.Y', strtotime($value));
	}
}
