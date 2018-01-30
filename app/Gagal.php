<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gagal extends Model
{
    protected $fillable = ['kode_hp', 'pemilik', 'no_hp', 'merk', 'model', 'no_imei', 'kerusakan'];
}
