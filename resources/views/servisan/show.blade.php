@extends('layouts.app')

@section('title')
Detail
@endsection

@section('breadcrumb')
    @parent
    <li>Servisan</li>
    <li>Tambah</li>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>KODE SERVIS : {{ $servisan->kode_hp}}</h4>
                    <div class="pull-right">
                        <a href="{{ route('nota.pdf', $servisan->id) }}" class="btn btn-primary" style="margin-top: -60px"><i class="fa fa-print"></i></a>
                    </div>
                </div>

                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item"><b class="col-md-3">Pemilik</b> : {{$servisan->pemilik}}</li>
                        <li class="list-group-item"><b class="col-md-3">Nomor HP</b> : {{$servisan->no_hp}}</li>
                        <li class="list-group-item"><b class="col-md-3">Merk</b> :  {{$servisan->merk->nama_merk}}</li>
                        <li class="list-group-item"><b class="col-md-3">Model</b> :  {{$servisan->model}}</li>
                        <li class="list-group-item"><b class="col-md-3">IMEI</b> :  {{$servisan->no_imei}}</li>
                        <li class="list-group-item"><b class="col-md-3">Kerusakan</b> :  {{$servisan->kerusakan}}</li>
                        <li class="list-group-item"><b class="col-md-3">Biaya</b> :  {{"Rp. ".format_uang($servisan->biaya)}}</li>
                        <li class="list-group-item"><b class="col-md-3">Keterangan</b> :  {{$servisan->keterangan}}</li>
                    </ul>
                    <div class="pull-right">
                        <a href="{{ route('berhasil.create', $servisan->id) }}" class="btn btn-primary">Berhasil</i></a>
                        <a href="{{ route('servisan.index') }}" class="btn btn-warning">Kembali</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection