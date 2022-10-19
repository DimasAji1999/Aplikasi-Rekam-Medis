<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_kunjungan extends Model
{
    use HasFactory;
    protected $table = 'm_kunjungan';

    public function pasien_n(){
        return $this->belongsTo('App\Models\M_pasien','pasien','id');
    }
    public function nomor_r(){
        return $this->belongsTo('App\Models\M_kunjungan','nomor','id');
    }
}
