<?php

namespace App\Http\Controllers;

use App\Models\Like;

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

}
