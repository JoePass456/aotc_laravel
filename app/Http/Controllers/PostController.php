<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Like;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewAll()
    {
        return Post::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $post = new Post;
        $post->ref_user_id = request('id');
        $post->post = request('post');
        $post->author = request('author');
        $post->tag = request('tag');
        $post->save();

        // $target = \App\Models\Tag::where('tag', request('tag'))->count();
        // if ($target === 0) {
        //     $tag = new Tag;
        //     $tag->tag = request('tag');
        //     $target = \App\Models\Tag::where('tag', request('tag'))->get();
        // };




        return $post;
    }

    public function editpost(Request $request) 
    {
        // Like::find($request->id)->delete();
        // return Post::all();

        $post = Post::find($request->id);
        $post->post = request('post');
        $post->author = request('author');
        $post->tag = request('tag');
        $post->save();
        return $post;
    }
    public function delpost(Request $request)
    {
        // Like::find($request->post_id)->delete;
        
        Post::find($request->id)->delete();
        return Post::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
