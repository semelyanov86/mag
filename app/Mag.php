<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mag extends Model
{
        public function getName () {
        return $this->name;
    }
    protected $fillable = ['no', 'title', 'intro', 'image', 'content', 'status', 'link1', 'link2', 'link3', 'date'];
    protected $table = 'mags';
}
