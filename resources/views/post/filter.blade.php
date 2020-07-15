@extends('layouts.default')

@section('header')

	@include('parts.header', ['title' => "Filter",  'subtitle' => 'Other Posts with this Hashtag'])

@endsection

@section('content')

<div class='card-deck pl-md-5 '>

@foreach($posts as $post)

    @if($loop->first || $loop->odd)
        <div class='card-group  w-50'>
    @endif

        @include('parts.post_summary', $post)

    @if($loop->last || $loop->even)
        </div> <!--//card group   -->
    @endif

@endforeach

</div> <!--//card Deck   -->

@endsection


@section('links')
	@parent

	<a href="https://laravel.com/api">api</a>
@endsection
