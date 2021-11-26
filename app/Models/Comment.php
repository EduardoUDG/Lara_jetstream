<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\User;


class Comment extends Model
{
    use HasFactory;

    public function teacher() {
        return $this->belongsTo(Teacher::class, 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id');
    }

}
