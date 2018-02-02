<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;
use App\Show;


class Category extends Model
{

    public function movie(){
            return $this->belongsToMany(Movie::class);
    }

    public function show(){
        return $this->belongsToMany(Show::class);
    }

}
