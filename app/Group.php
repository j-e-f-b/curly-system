<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'Groups';
    public $timestamps = true;

    public function GroupUser()
    {
        return $this->hasMany('GroupUser');
    }

    public function school()
    {
        return $this->hasOne('SchoolGroup');
    }

    public function article()
    {
        return $this->hasMany('Article');
    }
}
