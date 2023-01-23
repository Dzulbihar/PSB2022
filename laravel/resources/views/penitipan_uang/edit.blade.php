@extends('layouts.app')

@section('content')

<head>
	<title> Edit - Pondok Pesantren Askhabul Kahfi</title>
</head>

<br>

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title"> Edit Penitipan Uang {{ $siswa->nama}} </h3>
					</div>

					<!-- form start -->
					<form action="{{ url('siswa') }}/{{$siswa->id}}/{{$penitipan_uang->id}}/{{('updatepenitipan_uang')}}" method="POST" enctype="multipart/form-data"  >
						{{csrf_field()}}
						<div class="card-body">

							<!-- nabung -->
							<div class="form-group row">
								<div class="col-md-6">
									<label> Tambah Uang </label>
									<input name="nabung" id="nabung" type="text" class="form-control" value="{{ $penitipan_uang->nabung}}">
								</div>
								<!-- ambil -->
								<div class="col-md-6">
									<label> Ambil Uang </label>
									<input name="ambil" id="ambil" type="text" class="form-control" value="{{ $penitipan_uang->ambil}}">
								</div>              
							</div>

							<!-- tanggal -->
							<div class="form-group row">
								<div class="col-md-6">
									<label> Waktu </label>
									<input name="tanggal" id="tanggal" type="date" class="form-control" value="{{ $penitipan_uang->tanggal}}">
								</div>
								<!-- catatan -->
								<div class="col-md-6">
									<label> Catatan </label>
									<input name="catatan" id="catatan" type="text" class="form-control" value="{{$penitipan_uang->catatan}}">
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