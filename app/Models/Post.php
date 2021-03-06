<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name',
        'subject',
        'message', 
        'category_id'
    ];
    
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
