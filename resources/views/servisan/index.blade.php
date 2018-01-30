@extends('layouts.app')

@section('title')
Data Hp
@endsection

@section('breadcrumb')
    @parent
    <li>Servisan</li>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <h4>Data HP Servisan
                        <div class="pull-right" style="margin-top: -8px">
                            <a href="{{ route('servisan.create') }}" class="btn btn-success">Tambah</a>
                        </div>
                    </h4>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <div class="table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Pemilik</th>
                                        <th>No.HP</th>
                                        <th>Merk Hp</th>
                                        <th>Kerusakan</th>
                                        <th>Biaya</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($servisan as $list)
                                    <tr>
                                        <td>{{ ++$no }}</td>
                                        <td>{{ $list->kode_hp }}</td>
                                        <td>{{ $list->pemilik }}</td>
                                        <td>{{ $list->no_hp }}</td>
                                        <td>{{ $list->merk->nama_merk }} {{ $list->model }}</td>
                                        <td>{{ $list->kerusakan }}</td>
                                        <td>{{ "Rp. ".format_uang($list->biaya) }}</td>
                                        <td>
                                            <form method="POST" action="{{ route('servisan.destroy', $list->id) }}">
                                            {{csrf_field()}} {{ method_field('DELETE')}}
                                            <div class="btn-group">
                                                <a href="{{ route('servisan.show', $list) }}" class="btn btn-warning btn-sm"><i class="fa fa-external-link"></i></a>
                                                <a href="{{ route('nota.pdf', $list) }}" class="btn btn-success btn-sm" ><i class="fa fa-print"></i></a>
                                                <a href="{{ route('servisan.edit', $list) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                                <button class="btn btn-danger btn-sm" type="submit" ><i class="fa fa-trash"></i></button>
                                            </div>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {!! $servisan->links() !!}
                        </div>
                    </div>
                    {{--  {{ $datas->links() }}  --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection