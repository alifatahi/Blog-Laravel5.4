<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * @package App
 */
class Task extends Model
{
    //Scope Method
    public  function scopeIncomplete($query)
    {
        return $query->where('completed',0);
//            return $query->where('completed',0);
    }
}
