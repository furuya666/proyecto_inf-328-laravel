<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habilitado extends Model
{
    //
    public function bono(){
        return $this->hasOne(Bono::class);
    }
}
