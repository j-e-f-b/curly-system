<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'Profiles';
    public $timestamps = true;

    public function Group()
    {
        return $this->belongsTo('Group');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function content()
    {
        return $this->hasOne('ArticleContent');
    }

    public function files()
    {
        return $this->hasMany('Articlefile');
    }

    public function comments()
    {
        return $this->hasMany('Comment');
    }

}
