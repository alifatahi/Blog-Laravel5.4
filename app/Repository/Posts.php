<?php

namespace App\Repository;

use App\Post;

class Posts{
    public function all()
    {
//        return Post::all();
        return Post::latest()->filter(request(['month','year']))->get();
    }
}