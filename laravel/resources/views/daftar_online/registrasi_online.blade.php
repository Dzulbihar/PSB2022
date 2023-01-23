@extends('layouts.app')

@section('content')


<head>
  <title> Registrasi - Pondok Pesantren Askhabul Kahfi</title>
</head>


<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-12">
				<h1> Registrasi Online Santri Baru</h1>
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
						<h3 class="card-title"> Registrasi Online {{ $siswa->nama}} </h3>
					</div>

					<!-- form start -->
					<form action="{{ url('daftar_online') }}/{{$siswa->id}}/{{('registrasi_online_update')}}" method="POST" enctype="multipart/form-data"  >
						{{csrf_field()}}
						<div class="card-body">
					<!-- foto_registrasi_online --> 
							<div class="form-group row">
								<div class="col-md-12">
									<label>           
										Biaya Registrasi Pendaftaran senilai
										@foreach($biaya_pendaftaran as $ka)
										<option>
											= Rp. {{number_format($ka->terbilang,0, ',' , '.')}}
										</option>
										@endforeach 
									</label>
				                    <input id="foto_registrasi_online" type="file" class="form-control" name="foto_registrasi_online" value="{{ old('foto_registrasi_online') }}">
				                </div>
							</div>
					<!-- tombol -->    
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
		<!-- /.card -->

		</div>
	<!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->




@stop