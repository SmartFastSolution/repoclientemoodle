<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TallerDiferenciaRes extends Model
{
         public function Tallers(){

        return $this->hasMany('App\Taller');
    }
    
     public function Users(){

        return $this->belongsToMany('App\User');
    }
}
