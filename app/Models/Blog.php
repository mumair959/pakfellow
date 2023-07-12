<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\BlogComment');
    }

    public function likes()
    {
        return $this->hasMany('App\Models\BlogLike');
    }
}
