<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolGroup extends Model
{
    protected $table = 'school_groups';
    public $timestamps = true;

    public function School()
    {
        return $this->belongsTo('School');
    }

    public function Groups()
    {
        return $this->hasMany('Group');
    }
}
