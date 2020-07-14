<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PostHashtag extends Pivot
{
    protected $fillable = ['post', 'hashtag'];
    public $incrementing = true;

    public function post()
    {
        return $this->hasMany('App\Post', 'post');
    }

}
