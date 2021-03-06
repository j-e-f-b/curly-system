<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'article_contents';
    public $timestamps = true;

    public function article()
    {
        return $this->belongsTo('Article');
    }
}
