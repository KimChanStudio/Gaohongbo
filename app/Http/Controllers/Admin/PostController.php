<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post,Auth;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    protected function createPost(array $data)
    {
        return Post::create([
            'title'    => $data['title'],
            'source'   => $data['source'],
            'abstract' => $data['abstract'],
            'feature'  => $data['feature'],
            'content'  => $data['content'],
        ]);
    }


    public function showPostList(){
        $posts = Post::orderBy('created_at','desc')->paginate(25);

        return view('admin.post.post_list',['posts' => $posts]);
    }

    public function getEditPost(Request $request){
        $post = Post::find($request->input('id'));

        return view('admin.post.post_edit',['post' => $post]);
    }

    public function getAddPost(){
        return view('admin.post.post_add');
    }

    public function postAddPost(Requests\admin\AddPostRequest $request){
        $post = $this->createPost($request->all());
        $user = Auth::user();
        $user->posts()->save($post);
        return redirect('admin/success')->with('success_info','添加成功');
    }

    public function postEditPost(Requests\admin\AddPostRequest $request){
        $post = Post::find($request->input('id'));
        $post->title = $request->input('title');
        $post->source = $request->input('source');
        $post->abstract = $request->input('abstract');
        $post->feature = $request->input('feature');
        $post->content = $request->input('content');
        $post->save();
        return redirect('admin/success')->with('success_info','修改成功');
    }


}
