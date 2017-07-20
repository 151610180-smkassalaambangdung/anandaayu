<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggans extends Model
{
    Protected $fillable=['nama'];

     public function mobills()
    {
    return $this->hasMany('App\mobills');
    }
}
