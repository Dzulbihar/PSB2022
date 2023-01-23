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
						<h3 class="card-title"> Edit Pelanggaran {{ $siswa->nama}} </h3>
					</div>

					<!-- form start -->
					<form action="{{ url('siswa') }}/{{$siswa->id}}/{{$pelanggaran->id}}/{{('updatepelanggaran')}}" method="POST" enctype="multipart/form-data"  >
						{{csrf_field()}}
						<div class="card-body">

							<!-- bentuk -->
							<div class="form-group row">
								<div class="col-md-6">
									<label> Bentuk </label>
									<input name="bentuk" id="bentuk" type="text" class="form-control" value="{{ $pelanggaran->bentuk}}" placeholder="Kategori">
								</div>
								<!-- hukuman -->
								<div class="col-md-6">
									<label> Hukuman </label>
									<input name="hukuman" id="hukuman" type="text" class="form-control" value="{{ $pelanggaran->hukuman}}" placeholder="hukuman">
								</div>              
							</div>

							<!-- tanggal -->
							<div class="form-group row">
								<div class="col-md-6">
									<label> Waktu </label>
									<input name="tanggal" id="tanggal" type="date" class="form-control" value="{{ $pelanggaran->tanggal}}" placeholder="Waktu">
								</div>
								<!-- skor -->
								<div class="col-md-6">
									<label> Skor </label>
									<input name="skor" id="skor" type="number" class="form-control" value="{{$pelanggaran->skor}}" placeholder="Skor">
								</div>              
							</div>

							<!-- catatan -->
							<div class="form-group row">
								<div class="col-md-12">
									<label> Catatan </label>
									<input name="catatan" id="catatan" type="text" class="form-control" value="{{$pelanggaran->catatan}}" placeholder="Catatan">
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