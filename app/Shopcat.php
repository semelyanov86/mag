<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopcat extends Model
{
    public function shop() {
        return $this->belongsTo('App\Shopcat', 'id', 'shopcat_id');
    }
}
