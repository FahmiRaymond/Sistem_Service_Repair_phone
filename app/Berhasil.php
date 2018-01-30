<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berhasil extends Model
{
    protected $fillable = ['kode_hp', 'pemilik', 'no_hp', 'merk', 'model', 'no_imei', 'kerusakan', 'biaya', 'keterangan'];
}
