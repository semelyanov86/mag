<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsPhoto extends Model
{
        
    protected $fillable = ['news_id', 'filename'];   
    
    public function news()
    {
        return $this->belongsTo('App\News');
    }
}
