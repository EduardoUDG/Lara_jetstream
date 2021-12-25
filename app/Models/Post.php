<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Relacion uno a muchos (inversa)
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    // Relación uno a uno pólimorfica
    public function image() {
        return $this->morphOne('App\Models\image', 'imageable');
    }

}
