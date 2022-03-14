<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

        // RELACION muchos  A MUCHOS EN LA BD

public function posts(){
    return $this->belongsToMany(Post::class);
  }
}
