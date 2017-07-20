<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobills extends Model
{
    protected $fillabel=['jeni_mobil','id_pelanggan'];

    Public function pelanggans()
    {
    	return $this->belongsTo('App\palanggans');
    }
}
