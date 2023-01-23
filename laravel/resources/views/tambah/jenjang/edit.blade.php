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
						<h3 class="card-title"> Edit Data Jenjang </h3>
					</div>

					<!-- form start -->
					<form action="{{ url('jenjang') }}/{{$jenjang->id}}/{{('updatejenjang')}}" method="POST" enctype="multharga_awalart/form-data" >
						{{csrf_field()}}
						<div class="card-body">

							<!-- __________________________________________________________________________________ -->
							<!-- jenjang -->                        
							<div class="form-group row">
								<div class="col-md-12">
									<label for="jenjang"> Jenjang </label>
									<input id="jenjang" type="text" class="form-control @error('jenjang') is-invalid @enderror" name="jenjang" value="{{ $jenjang->jenjang}}" placeholder="" required autocomplete="jenjang" autofocus>
									@error('jenjang')
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