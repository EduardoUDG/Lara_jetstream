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

    // Relación uno a uno polimórfica
    public function image() {
        return $this->morphOne('App\Models\image', 'imageable');
    }

    // Relación uno a muchos polimórfica
    public function comments() {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }



}
