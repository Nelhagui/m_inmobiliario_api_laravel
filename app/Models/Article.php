<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Category;
use Commentary;
use User;

class Article extends Model
{
    use HasFactory;

    public function categories() 
    {
    	return $this->belongsToMany(Category::class);
	}
	public function comentarios()
	{
	  return $this->hasMany(Commentary::class);
	}
    public function user()
	{
	  return $this->hasOne(User::class, 'id', 'user_id');
	}
}
