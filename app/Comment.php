<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{

    protected $fillable = [
        'author_id',
        'author_name',
        'author_email',
        'author_website',
        'comment',
        'replies_to',
        'post_id',
    ];

    public function post(){
        return $this->belongsTo(Voyager::modelClass('Post'));
    }

}
