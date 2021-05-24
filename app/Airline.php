<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    protected $fillable = [
        'name', 'name_en','photo',
    ];
    
    public function microposts()
    {
        return $this->hasMany(Micropost::class);
    }
    
}
