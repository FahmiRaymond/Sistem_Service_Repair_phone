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
                        <a href="{{ route('servisan.create') }}" class="btn btn-success">Tambah</a>
                        <a href="{{ url('/servisan/pdf') }}" class="btn btn-primary">Print</a><br>
                    </h4>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="5">No</th>
                                <th width="20">Kode</th>
                                <th>Pemilik</th>
                                <th>No.HP</th>
                                <th>Merk</th>
                                <th>Model</th>
                                <th>IMEI</th>
                                <th>Kerusakan</th>
                                <th>Biaya</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
var table, save_method;
$(function(){
    table = $('.table').DataTable({
        "processing" : true,
        "serverside" : true,
        "ajax" : {
            "url" : "{{ route('berhasildata') }}",
            "type" : "GET"
        },
        'columnDefs' :[{
            'targets': 0,
            'searchable': false,
            'orderable': false
        }],
        'order': [1, 'asc']
    });
});
</script>
@endsection