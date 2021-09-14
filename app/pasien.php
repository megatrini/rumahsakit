<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    protected $primaryKey = 'id_pas';
    protected $table = 'pasien';
    protected $fillable = ['nama_pasien','jk','tgl_lahir','alamat','kota_asal','goldar','nama_wali'];

    public function administrasi()
    {
        return $this->hasMany(administrasi::class);
    }
    
} 

