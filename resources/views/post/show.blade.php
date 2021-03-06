@extends('layouts.default')

@section('header')
@include('parts.header', ['title' => 'Welcome to Slash', 'subtitle' => "" ])
@endsection



@section('content')
    @component('components.post',['post' => $post])
    @endcomponent


    @include('parts.post_hashtags')
    @include("comments.section")

@endsection



@section('links')
	@parent

	<a href="https://laravel.com/api">api</a>
@endsection
