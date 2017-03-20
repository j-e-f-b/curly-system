<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'Schools';
    public $timestamps = true;

    public function trust()
    {
        return $this->belongsTo('Trust');
    }

    public function school_users()
    {
        return $this->hasMany('SchoolUser');
    }

    public function groups()
    {
        return $this->hasMany('SchoolGroup');
    }
}
