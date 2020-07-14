<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    protected $fillable = ['tag'];

    public function posts()
    {
        return $this->belongsToMany('App\Post','post_hashtag', 'post', 'hashtag')->using('App\PostHashtag');
        //->withPivot(['post', 'hashtag'])
    }

    public function getLinkAttribute()
    {
        $tag = $this->attributes['tag'];
        return "<a href='/posts/filter/{$tag}'>{$tag}</a>";
    }
    public static final function byTag($tag)
    {
        // $hashtag = self::where('tag', $tag)->first() ?? Hashtag::create(['tag'  => $tag]);

        return self::firstOrCreate(['tag' => $tag]);
    }
    /**
     * @param String $textbody Text to scan for hashtags
     * @return \Illuminate\Support\Collection<Hashtag> $tags
     */
    public static final function tagScan(String $textbody)
    {
        preg_match_all('/#(\w+)/', $textbody, $matches);

        $tags = collect($matches[1])->map(fn ($tagstr ,$k) => new Hashtag(['tag'=>strtolower($tagstr)]));

        return $tags;
    }
}
