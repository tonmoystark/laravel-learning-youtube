<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorCourse extends Model
{
    //
    use HasFactory;
    public function mentor()
    {
        return $this->belongsToMany(Mentor::class);
    }
}
