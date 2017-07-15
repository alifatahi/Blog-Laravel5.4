<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;


/**
 * Class Post
 * @package App
 */
class Post extends Model
{

    //Declare Relation for Comment Model
    public function comments()
    {
        //each Post has many comments
        return $this->hasMany(Comment::class);
    }

    //Declare Relation to User Model
    public function user()
    {
        //each Post Belongs to 1 User
        return $this->belongsTo(User::class);
    }

    //Use Our Eloquent relation for add Comments
    public function addComments($body)
    {
        //so create comments by using relation so we dont need to pass POST Id
        $this->comments()->create(compact('body'));
    }

    //Scope Method for Filter Post
    public function scopeFilter($query, $filters)
    {

        if ($month = $filters['month']){
            $query->whereMonth('created_at',Carbon::parse($month)->month);
        }

        if ($year = $filters['year']){
            $query->whereYear('created_at',$year);
        }

    }

    //Show Archives From our Posts in Month & Year
    public static function archives()
    {
        return static::selectRaw(
            'year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year','month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }


    public function tags()
    {
        //Its Many to Many relation because 1 post can have many tags
        return $this->belongsToMany(Tag::class);
    }

}
