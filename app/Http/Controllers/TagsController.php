<?php

namespace App\Http\Controllers;

use App\Tag;

/**
 * Class TagsController
 * @package App\Http\Controllers
 */
class TagsController extends Controller
{
    //Pass Tags to Index View using Route Binding
    public function index(Tag $tags)
    {
        $posts = $tags->posts;
        return view('posts.index',compact('posts'));
    }
}
