<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function favorites()
    {
        return $this->belongsToMany(Article::class, 'user_favorite', 'user_id', 'article_id')->withTimestamps();
    }
    
    public function favorite($articleId)
    {
        $exist = $this->is_favorite($articleId);

        if ($exist) {
            return false;
        } else {
            $this->favorites()->attach($articleId);
            return true;
        }
    }

    public function unfavorite($articleId)
    {
        $exist = $this->is_favorite($articleId);

        if ($exist) {
            $this->favorites()->detach($articleId);
            return true;
        } else {
            return false;
        }
    }

    public function is_favorite($articleId)
    {
        return $this->favorites()->where('article_id', $articleId)->exists();
    }

}
