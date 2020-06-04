<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPilihan extends Model
{
    protected $table = 'detail_pilihan';
    protected $guarded = [];

    public function gejala()
    {
        return $this->belongsTo('App\Gejala', 'gejala_id');
    }
}
