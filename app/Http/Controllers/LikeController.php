<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewAll()
    {
        return Like::all();
    }
    public function add(Request $request)
    {
        $like = new Like;
        $like->post_id = request('post');
        $like->user_id = request('user');
        $like->save();
        return Post::all();
    }
    public function del(Request $request)
    {
        Like::find($request->id)->delete();
        return Post::all();
    }
}
