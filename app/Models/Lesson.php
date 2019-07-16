<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimeStamps()->withPivot('data');
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}
