<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;

    // Relación uno a muchos (inversa)
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    // Relación uno a muchos polimórfica
    public function commentable() {
        return $this->morphTo();
    }


}
