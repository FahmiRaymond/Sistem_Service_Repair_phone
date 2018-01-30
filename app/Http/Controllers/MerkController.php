<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merk;

class MerkController extends Controller
{
    public function create()
    {
        return view('merk.create');
    }

    public function store(Request $request)
    {       
        Merk::create([
            'nama_merk' => request('nama_merk'),
        ]);

        return redirect()->route('servisan.create');
    }
}
