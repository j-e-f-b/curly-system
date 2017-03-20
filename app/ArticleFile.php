<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleFile extends Model
{
    protected $table = 'article_files';
    public $timestamps = true;

    public function article()
    {
        return $this->belongsTo('Article');
    }
}
