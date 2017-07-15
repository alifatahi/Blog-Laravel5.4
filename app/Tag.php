<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * @package App
 */
class Tag extends Model
{
    //Declare Relation to Post Model
    public function posts()
    {
        //each Tag Belongs to many Post
        return $this->belongsToMany(Post::class);
        }

    //getRouteKeyName is Laravel Method for declare key of route
    public function getRouteKeyName()
    {
        //here instead of id we declare name
        return 'name';
     }

}
