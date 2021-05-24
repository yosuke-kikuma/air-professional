<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'content',
    ];
    
    public function favorite_users()
    {
        return $this->belongsToMany(User::class, 'user_favorite', 'article_id', 'user_id')->withTimestamps();
    }
}
