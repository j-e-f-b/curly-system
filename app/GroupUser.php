<?php

namespace GroupUser;

use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model {

	protected $table = 'Group_users';
	public $timestamps = true;

	public function Group()
	{
		return $this->belongsTo('Group');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

}