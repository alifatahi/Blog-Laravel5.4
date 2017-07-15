<?php

namespace App\Http\Controllers;

use App\Post;
use App\Repository\Posts;

/**
 * Class PostsController
 * @package App\Http\Controllers
 */
class PostsController extends Controller
{
    //Add Auth Middleware to all View Except 2 Pages
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    //Show All Posts Using Post Repository
    public function index(Posts $posts)
    {
        $posts = $posts->all();
        return view('posts.index',compact('posts'));
    }

    //Show Single Post
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }


    //View For Create new Post
    public function create()
    {
        return view('posts.create');
    }

    //Method for store new Post
    public function store()
    {

        $this->validate(request(),[
            'title' => 'required',
            'body'  => 'required'
        ]);

        //use user Model with method to add user id when create new post
        auth()->user()->publish(
            new Post(request(['title','body']))
        );

        session()->flash('message','Your Post Created');

        return redirect('/');

        //Another Way

//        $post = new Post;
//
//        $post->title = request('title');
//        $post->body = request('body');
//
//        $post->save();


//        Post::create([
//            'title' => request('title'),
//            'body'  => request('body'),
//            'user_id' => auth()->id()
//        ]);

    }
}
