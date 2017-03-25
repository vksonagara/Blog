<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'body', 'user_id', 'slug'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function getRouteKeyName() {
        return 'slug';
    }
}
