<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function category(){
        return $this->belongsToMany('App\category')->withTimestamps();
    }
}
