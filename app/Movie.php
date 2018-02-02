<?php

namespace App;

use App\Comment;
use App\Movie;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }


    public function category(){
        return $this->belongsToMany(Category::class);

    }
}
