<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Critic extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }

    public function reviews(){
      return $this->hasMany('App\Review');
    }


}
