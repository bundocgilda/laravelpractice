<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //protected $fillable = ['title', 'body'];
    //protected $guarded = [];

    public function comments(){
    	return $this->hasMany(Comment::class);
    }
}
