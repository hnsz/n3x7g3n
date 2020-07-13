@extends('layouts.default')

@section('header')

    @include('parts.header', ['title' => "Hashtags ALL",  'subtitle' => 'Click a tag to filter posts'])

@endsection

@section('content')

    <div class='card-deck'>

        @foreach($hashtags as $hashtag)

            @if($loop->first || $loop->odd)
                <ul class='card-group w-100'>
                    @endif

                    <li class='card'><a href=''>#{{$hashtag->tag}}</a></li>

                    @if($loop->last || $loop->even)
                </ul> <!--//card group   -->
            @endif

        @endforeach

    </div> <!--//card Deck   -->

@endsection


@section('links')
    @parent

    <a href="https://laravel.com/api">api</a>
@endsection
