<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PostHashtag extends Pivot
{
    protected $fillable = ['post', 'hashtag'];
    public $incrementing = true;


    function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function getBodyAttribute()
    {
        $tags = $this->hashtags->pluck('tag')->toArray();
        $links = $this->hashtags->pluck('link')->toArray();

        return  str_replace($tags, $links, "If you like #hsahtags then you will #love this!");
    }
    public function hashtags()
    {
        return $this->belongsToMany('App\Hashtag', 'post_hashtag')->using('App\PostHashtag');
    }
}
