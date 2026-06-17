<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Learner extends Model
{
    //
    use HasFactory;
    use SoftDeletes;
    //query scope
    public function scopeMale($query)
    {
        return $query->where('gender', 'm');
    }
    public function scopeFemale($query)
    {
        return $query->where('gender', 'f');
    }
}
