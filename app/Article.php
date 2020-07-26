<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

    public function path() {

    	return route('article.show', $this);
    }
    //article has user
    public function author() {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function tags() {
    	return $this->belongsToMany(Tag::class);
    }
}

//$article->user

// article hasMany tags
// tags hasMany articles