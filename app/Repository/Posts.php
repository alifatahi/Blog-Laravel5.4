<?php

namespace App\Repository;

use App\Post;

/**
 * Class Posts
 * @package App\Repository
 */
class Posts{

    //Show all Post by Month and Year Filter
    public function all()
    {
        return Post::latest()->filter(request(['month','year']))->get();
    }
}