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
						<h3 class="card-title"> Edit Prestasi {{ $siswa->nama}} </h3>
					</div>

					<!-- form start -->
					<form action="{{ url('siswa') }}/{{$siswa->id}}/{{$prestasi->id}}/{{('updateprestasi')}}" method="POST" enctype="multipart/form-data"  >
						{{csrf_field()}}
						<div class="card-body">

							<!-- kategori -->
							<div class="form-group row">
								<div class="col-md-6">
									<label> Kategori </label>
									<input name="kategori" id="kategori" type="text" class="form-control" value="{{ $prestasi->kategori}}" placeholder="Kategori">
								</div>
								<!-- tingkat -->
								<div class="col-md-6">
									<label> Tingkat </label>
									<input name="tingkat" id="tingkat" type="text" class="form-control" value="{{ $prestasi->tingkat}}" placeholder="Tingkat">
								</div>              
							</div>

							<!-- tanggal -->
							<div class="form-group row">
								<div class="col-md-6">
									<label> Waktu </label>
									<input name="tanggal" id="tanggal" type="date" class="form-control" value="{{ $prestasi->tanggal}}" placeholder="Waktu">
								</div>
								<!-- skor -->
								<div class="col-md-6">
									<label> Skor </label>
									<input name="skor" id="skor" type="number" class="form-control" value="{{$prestasi->skor}}" placeholder="Skor">
								</div>              
							</div>

							<!-- catatan -->
							<div class="form-group row">
								<div class="col-md-12">
									<label> Catatan </label>
									<input name="catatan" id="catatan" type="text" class="form-control" value="{{$prestasi->catatan}}" placeholder="Catatan">
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