<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Servisan;
use App\Merk;
use App\Setting;
use Yajra\DataTables\Datatables;
use PDF;
use Redirect;

class ServisanController extends Controller
{
    protected $pesan = array(
        'kode_hp.required' => 'Isi Kode HP',
        'pemilik.required' => 'Isi Nama Pemilik',
        'kerusakan.required' => 'Isi Kerusakan',
     );
     
    protected $aturan = array(
        'kode_hp' => 'required',
        'pemilik' => 'required',
        'kerusakan' => 'required',
    );

    public function index()
    {
        $servisan = Servisan::latest()->paginate(5);
        return view('servisan.index', compact('servisan'))
            ->with('no', (request()->input('page', 1) - 1) * 5);
        // $batas = 5;
        // $datas=Servisan::leftJoin('merks', 'merks.id', '=', 'servisans.merk_id')
        // ->orderBy('servisans.id', 'desc')->paginate($batas);
        // $no = $batas * ($datas->currentPage() - 1);
        // return view('servisan.index', compact('datas', 'no'));
    }

    public function listData()
    {
        $servisan = Servisan::leftJoin('merks', 'merks.id', '=', 'servisans.merk_id')
        ->orderBy('servisans.id', 'desc')
        ->get();
        $no=0;
        $data = array();
        foreach($servisan as $list){
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $list->kode_hp;
            $row[] = $list->pemilik;
            $row[] = $list->no_hp;
            $row[] = "<i>".$list->nama_merk." ".$list->model."</i>";
            $row[] = $list->no_imei;
            $row[] = $list->kerusakan;
            $row[] = "Rp. ".format_uang($list->biaya);
            $data[]=$row;
        }
        return Datatables::of($data)->escapeColumns([])->make(true);
    }

    public function create()
    {
        $merk = Merk::all();
        return view('servisan.create', compact('merk'));
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->aturan, $this->pesan);
        
        Servisan::create([
            'kode_hp' => request('kode_hp'),
            'pemilik' => request('pemilik'),
            'no_hp' => request('no_hp'),
            'merk_id' => request('merk_id'),
            'model' => request('model'),
            'no_imei' => request('no_imei'),
            'kerusakan' => request('kerusakan'),
            'biaya' => request('biaya'),
            'keterangan' => request('keterangan'),
        ]);

        return redirect()->route('servisan.index');
    }

    public function show(Servisan $servisan)
    {
        return view('servisan/show' , compact('servisan'));
    }

    public function edit(Servisan $servisan)
    {
        $merk = Merk::all();
        return view('servisan.edit', compact('servisan', 'merk'));
    }

    public function update(Servisan $servisan)
    {
        $servisan->update([
            'kode_hp' => request('kode_hp'),
            'pemilik' => request('pemilik'),
            'no_hp' => request('no_hp'),
            'merk_id' => request('merk_id'),
            'model' => request('model'),
            'no_imei' => request('no_imei'),
            'kerusakan' => request('kerusakan'),
            'biaya' => request('biaya'),
            'keterangan' => request('keterangan'),
        ]);

        return redirect()->route('servisan.index');
    }
    
    public function destroy(Servisan $servisan)
    {
        $servisan->delete();

        return redirect()->route('servisan.index');       
    }

    public function notaPDF(Servisan $servisan)
    {   
        $setting = $servisan;
        $pdf = PDF::loadView('servisan.notapdf', compact('servisan'));
        $pdf->setPaper(array(0,0,550,400), 'potrait');      
        return $pdf->stream();
    }
}
