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
				<h1> Edit Data Santri Baru </h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{url('seragam')}}"> Seragam </a></li>
					<li class="breadcrumb-item active">Edit</li>
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
						<h3 class="card-title"> Edit Data </h3>
					</div>

					<!-- form start -->
					<form action="{{ url('seragam') }}/{{$ukuran_seragam->id}}/{{('updateseragam')}}" method="POST" enctype="multipart/form-data"  >
						{{csrf_field()}}
						<div class="card-body">

							<!-- nama -->                        
							<div class="form-group row">
								<div class="col-md-6">
									<label> Nama </label>
									<select id="nama" class="form-control" name="nama">
										<option selected> {{ $ukuran_seragam->nama}} </option> 
										@foreach($siswa as $ka)
										<option>
											{{$ka->nama}}
										</option>
										@endforeach
										</option>
									</select>
								</div>
							<!-- jenjang -->  
								<div class="col-md-6">
									<label> Jenjang </label>
									<select id="jenjang" class="form-control" name="jenjang">
										<option selected> {{ $ukuran_seragam->jenjang}} </option> 
										@foreach($jenjang as $ka)
										<option>
											{{$ka->jenjang}}
										</option>
										@endforeach
									</option>
								</select>
							</div>
						</div>

					<!-- jeniskelamin -->                        
					<div class="form-group row">
						<div class="col-md-6">
							<label> Jenis Kelamin </label>
							<select name="jeniskelamin" id="jeniskelamin" class="form-control" id="jeniskelamin" class="form-control">
								<option selected>-- Jenis Kelamin --</option>
								<option value="Laki-laki" @if($ukuran_seragam->jeniskelamin == 'Laki-laki') selected @endif> Laki-laki </option>
								<option value="Perempuan" @if($ukuran_seragam->jeniskelamin == 'Perempuan') selected @endif> Perempuan </option>
							</select>
						</div>
						<!-- seragam -->  
						<div class="col-md-6">
							<label> Ukuran Seragam </label>
							<select id="seragam" class="form-control" name="seragam">
								<option selected> {{ $ukuran_seragam->seragam}} </option> 
								@foreach($seragam as $ka)
								<option>
									{{$ka->seragam}}
								</option>
								@endforeach
							</option>
						</select>
					</div>
				</div>

				<!-- tombol -->    
				<div class="form-group row">                    
					<div class="col-md-12">
						<button type="submit" class="btn btn-primary btn-sm">
							Update
						</button>
						<a href="{{ url('seragam') }}" rel="noopener" class="btn btn-primary btn-sm float-right"> Kembali </a>
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




