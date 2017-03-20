<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoleAndPermission;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function School_Users()
    {
        return $this->belongsTo('SchoolUser');
    }

    public function Groups()
    {
        return $this->hasMany('GroupUser');
    }

    public function profile()
    {
        return $this->hasOne('Profile');
    }

    public function articles()
    {
        return $this->hasMany('Article');
    }
}
