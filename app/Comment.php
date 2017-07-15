<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * @package App
 */
class Comment extends Model
{
    //Declare Relation to Post
    public function post()
    {
        //each Comment belong to 1 Post
        return $this->belongsTo(Post::class);
    }

    //Declare Relation to User
    public function user()
    {
        //each Comment belongs to 1 User
        return $this->belongsTo(User::class);
    }
}
