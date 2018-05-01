<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Article extends Model
{
    use SearchableTrait;
    protected $searchable = [
        'columns' => [
            'articles.title' => 10,
            'articles.short' => 10,
            'articles.content' => 5,
            'articles.id' => 1,
        ]
    ];
    protected $guarded = ['id'];
//    protected $table = 'images';
    
    public function rubrikas()
	{
            return $this->belongsToMany('App\Rubrika')->withTimestamps();
	}
}
