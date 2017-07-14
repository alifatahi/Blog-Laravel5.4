<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Post::class);
        }

    //getRouteKeyName is Laravel Method for declare key of route
    public function getRouteKeyName()
    {
        //here instead of id we declare name
        return 'name';
     }

}
