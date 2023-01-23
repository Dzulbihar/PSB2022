<head>
	<title> Laporan Pendaftaran Santri Baru Jenjang MA </title>
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
				<h1> <b>MA</b> </h1>
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
						<h3 class="card-title"> Pendaftaran santri baru jenjang MA </h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">

						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Jalur</th>
									<th>Alumni</th>
									<th>Jenjang</th>
									<th>Fasilitas</th>
									<th>Jenis Kelamin</th>
									<th>Tempat Lahir</th>
									<th>Tanggal Lahir</th>
									<th>Desa</th>
									<th>Kecamatan</th>
									<th>Kabupaten</th>
									<th>Provinsi</th>
									<th>Nama Sekolah</th>
									<th>Alamat Sekolah</th>
									<th>Nama Ayah</th>
									<th>Pendidikan Ayah</th>
									<th>Pekerjaan Ayah</th>
									<th>Nama Ibu</th>
									<th>Pendidikan Ibu</th>
									<th>Pekerjaan Ibu</th>
									<th>Nomor Whats'App</th>
									<th>NISN</th>
									<th>KK</th>
									<th>NIK</th>
									<th>No KIP</th>
									<th>Status TES</th>
								</tr>
							</thead>
							<tbody>
								<!-- Variabel php untuk nomor-->    <?php
								$nomer = 1;
								?>
								<!-- ambil data di database-->
								@foreach($siswa as $siswa)
								<tr>
									<th> {{ $nomer++}} </th>
									<td> {{Str::upper($siswa->nama)}} </td>
									<td> {{Str::upper($siswa->jalurpendaftaran)}} </td>
									<td> {{Str::upper($siswa->alumni)}} </td>
									<td> {{Str::upper($siswa->jenjang)}} </td>
									<td> {{Str::upper($siswa->fasilitas)}} </td>
									<td> {{Str::upper($siswa->jeniskelamin)}} </td>
									<td> {{Str::upper($siswa->tempatlahir)}} </td>
									<td> {{ date('d/m/Y', strtotime($siswa->tanggallahir)) }} </td>
									<td> {{Str::upper($siswa->desa)}} </td>
									<td> {{Str::upper($siswa->kecamatan)}} </td>
									<td> {{Str::upper($siswa->state)}} </td>
									<td> {{Str::upper($siswa->country)}} </td>
									<td> {{Str::upper($siswa->namaasalsekolah)}} </td>
									<td> {{Str::upper($siswa->alamatasalsekolah)}} </td>
									<td> {{Str::upper($siswa->namaayah)}} </td>
									<td> {{Str::upper($siswa->pendidikanayah)}} </td>
									<td> {{Str::upper($siswa->pekerjaanayah)}} </td>
									<td> {{Str::upper($siswa->namaibu)}} </td>
									<td> {{Str::upper($siswa->pendidikanibu)}} </td>
									<td> {{Str::upper($siswa->pekerjaanibu)}} </td>
									<td> {{Str::upper($siswa->nohp)}} </td>
									<td> {{Str::upper($siswa->nisn)}} </td>
									<td> {{Str::upper($siswa->kk)}} </td>
									<td> {{Str::upper($siswa->nik)}} </td>
									<td> {{Str::upper($siswa->nokip)}} </td>
									<td> {{Str::upper($siswa->status)}} </td>
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