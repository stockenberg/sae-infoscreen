<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //

	public function getCreatedAtAttribute($value)
	{
		return date('d.m.Y', strtotime($value));
	}
}
