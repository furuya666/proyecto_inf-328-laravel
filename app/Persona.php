<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //


    public function habilitado(){
        return $this->hasOne(Habilitado::class);
    }
    public function scopenombre($query,$nombre){
        if ($nombre) {
            return $query->where('nombre','LIKE',"%nombre%");
        }
    }
    public function scopeci($query,$ci){
        if ($ci) {
            return $query->where('ci','LIKE',"%ci%");
        }
    }
    
}
