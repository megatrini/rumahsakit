<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rekam_medis extends Model
{
    protected $primaryKey = 'no_diagnosa';
    protected $table = 'rekam_medis';
    protected $fillable = ['administrasi_no_antrian','pasien_id_pas','dokter_id_dok','diagnosa','ket_rujukan'];

    public function administrasi()
    {
        return $this->belongsTo(administrasi::class);
    }
    public function dokter()
    {
        return $this->belongsTo(dokter::class);
    }
   
}
