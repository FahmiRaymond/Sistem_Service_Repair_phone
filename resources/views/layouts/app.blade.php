<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{config('app.name', 'Laravel')}}</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="{{ asset('adminLTE/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('adminLTE/dist/css/AdminLTE.min.css') }}">
	<link rel="stylesheet" href="{{ asset('adminLTE/dist/css/skins/skin-red.min.css') }}">
	<link rel="stylesheet" href="{{ asset('adminLTE/plugins/datatables/dataTables.bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('adminLTE/plugins/datepicker/datepicker3.css') }}">
</head>

<body class="hold-transition skin-red sidebar-mini">
	<div class="wrapper">

		<!-- Main Header -->
		<header class="main-header">

			<a href="#" class="logo">
				<span class="logo-mini">
					<b>SC</b>
				</span>
				<span class="logo-lg">SERVICE CENTER</span>
			</a>

			<nav class="navbar navbar-static-top" role="navigation">
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="header">
							<a href="{{ route('servisan.create')}}" class="">
								<span><i class="fa fa-plus"></i> Buat Nota</span>
							</a>
						</li>

						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="{{ asset('images/'.Auth::user()->foto)}}" class="user-image" alt="User Image">
								<span class="hidden-xs">{{ Auth::user()->name }}</span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-header">
									<img src="{{ asset('images/'.Auth::user()->foto)}}" class="img-circle" alt="User Image">

									<p>
										{{ Auth::user()->name}}
									</p>
								</li>
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left">
										<a href="#" class="btn btn-default btn-flat">Edit Profil</a>
									</div>
									<div class="pull-right">
										<a href="{{ route('logout') }}" class="btn btn-default btn-flat" onClick="event.preventDefault(); 
										document.getElementById('logout-form').submit();">Log out</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
										</form>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<section class="sidebar">
				<ul class="sidebar-menu">
					<li class="header">MENU NAVIGASI</li>

					<li>
					
					<li>
						<a href="{{ route('home') }}">
							<i class="fa fa-home"></i>
							<span>Homepage</span>
						</a>
					</li>

					<li>
						<a href="{{ route('servisan.index')}}">
							<i class="fa fa-database"></i>
							<span>Data HP</span>
						</a>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-file-text-o"></i>
							<span>Laporan</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li>
								<a href="{{ route('berhasil.index')}}">
									<i class="fa fa-file text-o"></i>Laporan HP Berhasil</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-file text-o"></i>Laporan HP Gagal</a>
							</li>
						</ul>
					</li>
				</ul>
				<!-- /.sidebar-menu -->
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					@yield('title')
				</h1>
				<ol class="breadcrumb">
					@section('breadcrumb')
					<li>
						<a href="#">
							<i class="fa fa-home"></i>Home</a>
					</li>
					@show
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				@yield('content')
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Main Footer -->
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				Aplikasi Service-Phone-Center
			</div>
			<strong>Copyright &copy; 2017
				<a href="#">Company</a>.</strong> All rights reserved.
		</footer>
	</div>
		<!-- REQUIRED JS SCRIPTS -->

		<script src="{{ asset('adminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
		<script src="{{ asset('adminLTE/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('adminLTE/dist/js/app.min.js') }}"></script>
		<script src="{{ asset('adminLTE/plugins/chartjs/Chart.min.js') }}"></script>
		<script src="{{ asset('adminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('dataTables/js/dataTables.bootstrap.min.js') }}"></script>
		<script src="{{ asset('adminLTE/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('js/validator.js') }} "></script>
		@yield('script')
</body>

</html>