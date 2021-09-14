<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    protected $primaryKey = 'id_dok';
    protected $table = 'dokter';
    protected $fillable = ['nama_dokter','jadwal_dokter'];

    public function rekam_medis()
    {
        return $this->hasMany(rekam_medis::class);
    }
    
}
