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
						<h3 class="card-title"> Edit Data Pekerjaan </h3>
					</div>

					<!-- form start -->
					<form action="{{ url('pekerjaan') }}/{{$pekerjaan->id}}/{{('updatepekerjaan')}}" method="POST" enctype="multharga_awalart/form-data" >
						{{csrf_field()}}
						<div class="card-body">

							<!-- __________________________________________________________________________________ -->
							<!-- pekerjaan -->                        
							<div class="form-group row">
								<div class="col-md-12">
									<label for="pekerjaan"> Pekerjaan </label>
									<input id="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{ $pekerjaan->pekerjaan}}" placeholder="" required autocomplete="pekerjaan" autofocus>
									@error('pekerjaan')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
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