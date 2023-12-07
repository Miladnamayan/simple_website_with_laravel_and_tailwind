<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'body',
        'picture',
        'category_id',
        'status'
    ];

    protected $table='posts';

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class , 'post_id');
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function isAuthUserLikedPost(){
        return $this->likes()->where('user_id',  auth()->id())->exists();
     }
}
