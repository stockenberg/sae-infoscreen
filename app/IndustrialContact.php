<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndustrialContact extends Model
{
    //

	public function departments()
	{
		return $this->belongsToMany(Department::class);
	}

	public function histories() {
		return $this->hasMany(History::class);
	}

	public function students()
	{
		return $this->hasMany(Student::class);
	}

	public function jobs()
	{
		return $this->hasMany(Job::class);
	}

	public function getUpdatedAtAttribute($value)
	{
		return date('d.m.y - H:i', strtotime($value));
	}

	public function getCreatedAtAttribute($value)
	{
		return date('d.m.y - H:i', strtotime($value));
	}
}
