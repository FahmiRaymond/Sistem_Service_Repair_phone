<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servisan extends Model
{
    protected $fillable = ['kode_hp', 'pemilik', 'no_hp', 'merk_id', 'model', 'no_imei', 'kerusakan', 'biaya', 'keterangan'];

    public function merk()
    {
        return $this->belongsTo(Merk::class);
    }
}
