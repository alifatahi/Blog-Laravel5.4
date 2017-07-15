<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package App
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    //Declare Eloquent Method for Relation to Post
    public function posts()
    {
        //each User has many post
        return $this->hasMany(Post::class);
    }

    //Method to save post but also use relation method posts
    public function publish(Post $post)
    {
        $this->posts()->save($post);
    }
}
