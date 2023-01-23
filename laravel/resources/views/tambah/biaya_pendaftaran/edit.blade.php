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
						<h3 class="card-title"> Edit Data Biaya Pendaftaran </h3>
					</div>

					<!-- form start -->
					<form action="{{ url('biaya_pendaftaran') }}/{{$biaya_pendaftaran->id}}/{{('updatebiaya_pendaftaran')}}" method="POST" enctype="multharga_awalart/form-data" >
						{{csrf_field()}}
						<div class="card-body">

							<!-- __________________________________________________________________________________ -->
							<!-- uang_sebanyak -->                        
							<div class="form-group row">
								<div class="col-md-12">
									<label for="uang_sebanyak"> Uang Sebanyak </label>
									<input id="uang_sebanyak" type="text" class="form-control @error('uang_sebanyak') is-invalid @enderror" name="uang_sebanyak" value="{{ $biaya_pendaftaran->uang_sebanyak}}" placeholder="" required autocomplete="uang_sebanyak" autofocus>
									@error('uang_sebanyak')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>

								<div class="col-md-12">
									<label for="terbilang"> Terbilang </label>
									<input id="terbilang" type="text" class="form-control @error('terbilang') is-invalid @enderror" name="terbilang" value="{{ $biaya_pendaftaran->terbilang}}" placeholder="" required autocomplete="terbilang" autofocus>
									@error('terbilang')
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