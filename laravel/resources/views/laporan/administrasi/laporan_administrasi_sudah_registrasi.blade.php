<head>
	<title> Laporan Administrasi Pendaftaran Santri Baru </title>
	<!-- DataTables -->
	<link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</head>


@extends('layouts.app')


@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-8">
				<h1> Laporan Sudah Registrasi </h1>
			</div>
			<div class="col-sm-4">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
					<li class="breadcrumb-item active">Laporan</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<div class="container-fluid">

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title"> Laporan Sudah Registrasi Administrasi </h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">

						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Jalur</th>
									<th>Jenjang</th>
									<th>Fasilitas</th>
									<th>Jenis Kelamin</th>
								</tr>
							</thead>
							<tbody>
								<!-- Variabel php untuk nomor-->    <?php
								$nomer = 1;
								?>
								<!-- ambil data di database-->
								@foreach($biaya_awal_masuk as $siswa)
								<tr>
									<th>{{ $nomer++}}</th>
									<td>{{Str::upper($siswa->nama)}} </td>
									<td>{{Str::upper($siswa->jalurpendaftaran)}} </td>
									<td>{{Str::upper($siswa->jenjang)}} {{Str::upper($siswa->prodi)}} </td>
									<td>{{Str::upper($siswa->fasilitas)}} </td>
									<td>{{Str::upper($siswa->jeniskelamin)}} </td>
								</tr>
								@endforeach  
							</tbody>
						</table>

					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->


	@endsection