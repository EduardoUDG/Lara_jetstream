<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Teacher extends Model
{
    use HasFactory;

    public function comments() {
        return $this->hasMany(Comment::class, 'teacher_id');
    }
}
