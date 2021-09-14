<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administrasi extends Model
{
    protected $primaryKey = 'no_antrian';
    protected $table = 'administrasi';
    protected $fillable = ['tgl','keluhan','no_kamar','nama_kamar','pasien_id_pas'];
   
    public function pasien()
    {
        return $this->belongsTo(pasien::class);
    }

    public function rekam_medis()
    {
        return $this->hasOne(rekam_medis::class);
    }
}
