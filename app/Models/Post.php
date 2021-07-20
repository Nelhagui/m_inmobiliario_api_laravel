<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function categories() 
    {
    	return $this->belongsToMany(Category::class);
	}
	public function comments()
	{
	  return $this->hasMany(Comment::class);
	}
    public function user()
	{
	  return $this->hasOne(User::class, 'id', 'user_id');
	}
	
	protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
