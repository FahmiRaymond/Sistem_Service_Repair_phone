<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{ asset('adminLTE/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('adminLTE/dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('adminLTE/dist/css/skins/skin-red.min.css') }}">
        <link rel="stylesheet" href="{{ asset('adminLTE/plugins/datatables/dataTables.bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('adminLTE/plugins/datepicker/datepicker3.css') }}">

        <title>Laravel</title>

        {{--  <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>  --}}
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3>Data Service Masuk</h3>
                                </div>
                                <div class="box-body">
                                    <form method="post" id="form-servisan">
                                    {{csrf_field()}}
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="5">No</th>
                                                    <th>Kode</th>
                                                    <th>Pemilik</th>
                                                    <th width="60">No. HP</th>
                                                    <th>Model</th>
                                                    <th>Imei</th>
                                                    <th>Kerusakan</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>    
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="{{ asset('adminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
                <script src="{{ asset('adminLTE/bootstrap/js/bootstrap.min.js') }}"></script>
                <script src="{{ asset('adminLTE/dist/js/app.min.js') }}"></script>
                <script src="{{ asset('adminLTE/plugins/chartjs/Chart.min.js') }}"></script>
                <script src="{{ asset('adminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
                <script src="{{ asset('dataTables/js/dataTables.bootstrap.min.js') }}"></script>
                <script src="{{ asset('adminLTE/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
                <script src="{{ asset('js/validator.js') }} "></script>
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
            </div>
        </div>
    </body>
</html>
