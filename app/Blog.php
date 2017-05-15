<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Comment;

class Blog extends Model
{
    protected $fillable = ['title','description'];

    public function comment()
    {
    	return $this->hasMany(Comment::class);
    }
}
