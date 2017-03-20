<?php

namespace SchoolUser;

use Illuminate\Database\Eloquent\Model;

class SchoolUser extends Model {

	protected $table = 'school_users';
	public $timestamps = true;

	public function school()
	{
		return $this->belongsTo('School');
	}

	public function users()
	{
		return $this->hasMany('User');
	}

}