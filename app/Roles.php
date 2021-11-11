<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model 
{
    //
        /* definimos los campos de nuestra tabla */
        protected $fillable = [
            'name',
        ];
    

        public function users(){
            return $this->belongsToMany('App\User');
        }

}
