<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conclussion extends Model
{
    protected $table = 'conclussion';
    protected $guarded = [];

    public function penyakit()
    {
        return $this->belongsTo('App\Penyakit','penyakit_id');
    }
}
