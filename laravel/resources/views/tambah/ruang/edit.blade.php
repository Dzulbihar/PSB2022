@extends('layouts.app')

@section('content')

<head>
  <title> Edit - Pondok Pesantren Askhabul Kahfi</title>
</head>

<br>

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
						<h3 class="card-title"> Edit Data Ruang </h3>
					</div>

					<!-- form start -->
					<form action="{{ url('ruang') }}/{{$ruang->id}}/{{('updateruang')}}" method="POST" enctype="multharga_awalart/form-data" >
						{{csrf_field()}}
						<div class="card-body">

							<!-- __________________________________________________________________________________ -->
							<div class="form-group row">
								<!-- kelas -->
								<div class="col-md-6">
									<label> Kelas </label>
									<select class="form-control" name="kec_kab" id="kec_kab">
									<option selected> {{ $ruang->kec_kab}} </option> 
										@foreach($kelas as $ka)
										<option>
											{{$ka->kab_kode}}
										</option>
										@endforeach
									</option>
									</select> 
								</div>
								<!-- ruang -->
								<div class="col-md-6">
									<label> Ruang </label>
									<input id="kec_kode" type="text" class="form-control" name="kec_kode" value="{{ $ruang->kec_kode}}">
								</div>
							</div>
							
								<!-- Tombol -->
								<div class="col-md-6">
									<br><br>
									<button type="submit" class="btn btn-primary">
										Update
									</button>
								</div>
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