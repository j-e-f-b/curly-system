<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trust extends Model
{
    protected $table = 'trusts';
    public $timestamps = true;

    public function schools()
    {
        return $this->hasMany('School');
    }
}
