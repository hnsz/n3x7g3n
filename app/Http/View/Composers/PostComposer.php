<?php

namespace App\Http\View\Composers;

use App\Hashtag;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostComposer
{

    public function __construct(Request $request )
    {
        $this->request = $request;
    }
    public function compose(View $view)
    {
        $post = $view->getData()['post'];
        $hashtags = Hashtag::tagScan($post->body);

        $body = str_replace($hashtags->pluck('hashtag')->toArray(), $hashtags->pluck('link')->toArray(), $post->body);

        $vmodel = [
            'title' => $post->title,
            'body' => $body,
            'published_at' => $post->published_at,
            'author' => $post->user
        ];


        $view->with( $vmodel);
    }

}
