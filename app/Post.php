<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models;

class Post extends Models\Post
{

    const PUBLISHED = 1;

    public static function getFeatured(){
        return Post::where('featured', true)->get();
    }

    public function scopePublished(Builder $query)
    {
        return $query->where('status', '=', static::PUBLISHED);
    }

    public function getPopular($count){
        return $this->scopePublished(self::orderBy('hits', 'desc'))->limit($count)->get();
    }

    public function getLatest($count){
        return $this->scopePublished(self::orderBy('created_at', 'desc'))->limit($count)->get();
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
