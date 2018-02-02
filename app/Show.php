<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function category()
    {
        $this->belongsToMany(Category::class);
    }
}
