<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = "shop";
    protected $fillable = ['id', 'name', 'status', 'date', 'short', 'description', 'price', 'author', 'discount', 'disdate', 'image', 'quantity', 'shopcat_id'];
    
    public function shopcat() {
    return $this->hasMany('App\Shopcat', 'id', 'shopcat_id');
    }
}
