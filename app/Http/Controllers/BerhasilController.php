<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Servisan;
use App\Merk;
use App\Berhasil;
use Yajra\DataTables\Datatables;
use Redirect;

class BerhasilController extends Controller
{
    protected $pesan = array(
        'kode_hp.required' => 'Isi Kode HP',
        'pemilik.required' => 'Isi Nama Pemilik',
        'kerusakan.required' => 'Isi Kerusakan',
        'biaya.required' => 'Isi Biaya',
     );
     
    protected $aturan = array(
        'kode_hp' => 'required',
        'pemilik' => 'required',
        'kerusakan' => 'required',
        'biaya' => 'required',
    );

    public function index()
    {
        return view('berhasil.index');
    }

    public function listData()
    {   
        $berhasil = Berhasil::latest()
            ->orderBy('berhasils.id', 'desc')
            ->get();
        $no=0;
        $data = array();
        foreach($berhasil as $list){
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $list->kode_hp;
            $row[] = $list->pemilik;
            $row[] = $list->no_hp;
            $row[] = $list->merk;
            $row[] = $list->model;
            $row[] = $list->no_imei;
            $row[] = $list->kerusakan;
            $row[] = $list->biaya;
            $row[] = $list->keterangan;
            $data[]=$row;
        }
        return Datatables::of($data)->escapeColumns([])->make(true);
    }

    public function edit(Servisan $servisan)
    {
        $servis = Servisan::all();
        $merk = Merk::all();
        return view('berhasil.create', compact('servisan', 'servis', 'merk'));
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->aturan, $this->pesan);
        
        Berhasil::create([
            'kode_hp' => request('kode_hp'),
            'pemilik' => request('pemilik'),
            'no_hp' => request('no_hp'),
            'merk' => request('merk'),
            'model' => request('model'),
            'no_imei' => request('no_imei'),
            'kerusakan' => request('kerusakan'),
            'biaya' => request('biaya'),
            'keterangan' => request('keterangan'),
        ]);

        return redirect()->route('berhasil.index');
    }

    public function destroy(Servisan $servisan)
    {
        $servisan->delete();

        return redirect()->route('berhasil.index');       
    }
}
