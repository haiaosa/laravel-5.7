<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = ['title', 'content'];

    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }
}
