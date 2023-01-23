@extends('layouts.app')

@section('content')


<head>
  <title> Persyaratan - Pondok Pesantren Askhabul Kahfi</title>
</head>


<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-12">
				<h1> Persyaratan Pendaftaran Santri Baru</h1>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">
	<div class="container-fluid">

		<!-- Notifikasi ------------------------------------------------- -->
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			{{session('sukses')}}
		</div>
		@endif

		<div class="row">
			<div class="col-12">
				<div class="card card-secondary">
					<div class="card-header">
						<h3 class="card-title"> Persyaratan Pendaftaran </h3>
					</div>
					<!-- /.card-header -->

					<div class="card-body">

						<table id="example3" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>KK</th>
									<th>AKTE</th>
									<th>FOTO</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($syarat as $syarat)
								<tr>
									<td> <img src="{{$syarat->getKK()}}" width="100%"> </td>
									<td> <img src="{{$syarat->getAKTE()}}" width="100%"> </td>
									<td> <img src="{{$syarat->getFOTO()}}" width="100%"> </td>
									<td>
										<a href="{{ url('daftar_online') }}/{{$syarat->id}}/{{$syarat->siswa_id}}/{{('deletesyarat')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus ?')">Delete</a>
									</td>
								</tr>
								@endforeach  
							</tbody>
						</table>


					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-secondary">
					<div class="card-header">
						<h3 class="card-title"> Persyaratan Pendaftaran Santri Baru {{ $siswa->nama}} </h3>
					</div>

					<form action="{{ url('daftar_online') }}/{{$siswa->id}}/{{('syarat_daftar_update')}}" method="POST" enctype="multipart/form-data"  >
						{{csrf_field()}}
						<div class="card-body">
							<div class="form-group row">
								<div class="col-md-12">
									<label> Upload KK </label>
				                    <input id="KK" type="file" class="form-control" name="KK">
				                </div>
							</div>
							<div class="form-group row">
								<div class="col-md-12">
									<label> Upload AKTE </label>
				                    <input id="AKTE" type="file" class="form-control" name="AKTE">
				                </div>
							</div>
							<div class="form-group row">
								<div class="col-md-12">
									<label> Upload FOTO </label>
				                    <input id="FOTO" type="file" class="form-control" name="FOTO">
				                </div>
							</div>
							<div class="form-group row">                    
								<div class="col-md-12">
									<br><br>
									<button type="submit" class="btn btn-primary btn-sm">
										Update
									</button>
									<a href="{{ url('profil_pendaftaran_online') }}" rel="noopener" class="btn btn-primary btn-sm float-right"> Kembali </a>
								</div>
							</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- /.content -->




@stop