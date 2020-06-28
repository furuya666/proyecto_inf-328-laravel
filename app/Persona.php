<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //


    public function habilitado(){
        return $this->hasOne(Habilitado::class);
    }
}
