<article class='card'>
    <div class='card-body card-body-summary'>
        <div class="post-summary-info">
        <span style='float:right;' class='badge badge-info'> {{$post->published_at}}
        </span>
        <span style='float:right;'>
            /
        </span>
        <span style='float:right;' >
            <a class='badge badge-info' href='/user/id/{{$post->user->name}}'>{{$post->user->name}}</a>
        </span>
        </div>
    <h6 class='card-title card-title-summary'>


        {{$post->title}}

</h6>
    <p class='card-text card-text-summary' >
        {{Str::limit($post->body, 176)}}
        <span class='card-link'><a href='/posts/{{$post->id}}/'>Read More.. </a></span></p>
    </div>
</article>
