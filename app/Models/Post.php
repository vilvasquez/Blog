<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // RELACION UNO A MUCHOS EN LA BD inversa

    public function user(){

        return $this->belongsTo(User::class);
    }

public function category(){

    return $this->belongsTo(Category::class);
}


    // RELACION UNO A MUCHOS EN LA BD

    public function tags(){

        return $this->belongsToMany(Tag::class);
    }

    //relacion uno a uno polimorfica


public function image(){

    return $this->morphOne(Image::class,'imageable');
}
}
