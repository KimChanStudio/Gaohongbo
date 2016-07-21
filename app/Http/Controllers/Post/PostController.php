<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;

use Event;
use App\Http\Requests;
use App\Post;
use App\Events\Post\PostWasRead;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function readPost(Request $request){
        $post = Post::find($request->input('id'));

        Event::fire(new PostWasRead($post));
        //dump($request);
        //dump(ip2long($request->getClientIp()));
        return view('index.post.post')->with('post',$post);
    }


}
