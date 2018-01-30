@extends('layouts.app')

@section('title')
Tambah Data
@endsection

@section('breadcrumb')
    @parent
    <li>Servisan</li>
    <li>Tambah</li>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Tambah Merk</h4>
                </div>

                <div class="panel-body">
                    <form action="{{ route('merk.store') }}" class="form-horizontal" role="form" method="POST" }}>
                        {{ csrf_field() }}
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="form-group">
                            <label for="nama_merk" class="col-md-3 control-label">Nama Merk</label>
                            <div class="col-md-6">
                                <input id="nama_merk" type="text" class="form-control" name="nama_merk">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-3 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ url('servisan.create') }}" class="btn btn-warning">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection