<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = [
        'name', 'content',
    ];
    
    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }
}
