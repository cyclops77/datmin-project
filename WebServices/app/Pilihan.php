<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pilihan extends Model
{
    protected $table = 'pilihan';
    protected $guarded = [];

    public function detailPilihan()
    {
        return $this->hasMany('App\DetailPilihan','pilihan_id');
    }
}
