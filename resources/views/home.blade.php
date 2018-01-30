@extends('layouts.app')
@section('title')
    Halaman Utama
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3>Data Service Masuk</h3>
            </div>
            <div class="box-body">
                <form method="post" id="form-servisan">
                {{csrf_field()}}
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="5">No</th>
                                    <th width="5">Kode</th>
                                    <th width="120">Pemilik</th>
                                    <th width="60">No. HP</th>
                                    <th width="100">Model</th>
                                    <th width="100">Imei</th>
                                    <th width="150">Kerusakan</th>
                                    <th width="100">Biaya</th>
                                </tr>
                            </thead>
                            <tbody></tbody>    
                        </table>
                    </div>
                </form>
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
            "url" : "{{ route('servisandata') }}",
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