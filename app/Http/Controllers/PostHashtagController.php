<?php

namespace App\Http\Controllers;


use App\HashTag;
use App\Post;
use Illuminate\Http\Request;

class PostHashtagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view()
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hashtag  $hashtag
     * @return \Illuminate\Http\Response
     */
    public function show(Hashtag $hashtag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hashtag  $hashtag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hashtag $hashtag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hashtag  $hashtag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hashtag $hashtag)
    {
        //
    }
}
