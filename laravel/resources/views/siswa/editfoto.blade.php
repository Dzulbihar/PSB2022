@extends('layouts.app')

@section('content')

<head>
    <title> Edit - Pondok Pesantren Askhabul Kahfi</title>
</head>

<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1> Edit Data Santri </h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ url('siswa') }}/{{$siswa->id}}/{{('detail')}}"> Profile Santri </a></li>
					<li class="breadcrumb-item active">Edit Data Santri</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Notifikasi ------------------------------------------------- -->
@if(session('sukses'))
<div class="alert alert-success" role="alert">
	{{session('sukses')}}
</div>
@endif

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title"> Edit Foto {{ $siswa->nama}} </h3>
					</div>

					<!-- form start -->
					<form action="{{ url('siswa') }}/{{$siswa->id}}/{{('updatefoto')}}" method="POST" enctype="multipart/form-data"  >
						{{csrf_field()}}
						<div class="card-body">
					<!-- foto --> 
							<div class="form-group row">
								<div class="col-md-12">
				                    <label for="foto"> Masukan Foto Santri </label>
				                    <input id="foto" type="file" class="form-control" name="foto" value="{{ old('foto') }}">
				                </div>
							</div>
					<!-- tombol -->    
								<div class="form-group row">                    
									<div class="col-md-12">
										<br><br>
										<button type="submit" class="btn btn-primary btn-sm">
											Update
										</button>
										<a href="{{ url('siswa') }}/{{$siswa->id}}/{{('detail')}}" rel="noopener" class="btn btn-primary btn-sm float-right"> Kembali </a>
									</div>
								</div>
					</form>

				</div>
			</div>
		<!-- /.card -->

		</div>
	<!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->




@stop