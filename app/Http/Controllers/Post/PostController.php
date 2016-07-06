<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function readPost(Request $request){
        $post = Post::find($request->input('id'));
        return view('index.post.post')->with('post',$post);
    }


}
