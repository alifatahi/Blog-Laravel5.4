<?php

namespace App\Http\Controllers;

use App\Post;

/**
 * Class CommentsController
 * @package App\Http\Controllers
 */
class CommentsController extends Controller
{
    /**
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     * Method to Store Comment
     */
    public function store(Post $post)
    {
        //Do Validation
        $this->validate(request(),[
            'body' => 'required|min:3'
        ]);
        //Method to Add Comment
        $post->addComments(request('body'));
        return back();
    }
}
