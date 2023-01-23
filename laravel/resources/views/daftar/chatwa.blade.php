@extends('layouts.app')

@section('content')


<head>
  <title> Live Chat - Pondok Pesantren Askhabul Kahfi</title>
</head>


<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1> Kirim Via Whats'App  ({{$siswa->jenjang}}) </h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{url('daftar/data')}}"> Data Santri Baru </a></li>
					<li class="breadcrumb-item active">Tulis Pesan</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!-- Main content -->
<section class="content">
	<div class="container-fluid">

@if ($siswa->jenjang == 'SMP 1')
		<div class="row">
			<div class="col-md-12">
				<div class="card card-info">
					<div class="card-header">
						<h3 class="card-title"> Kirim Pesan untuk {{$siswa->nama}} </h3>
					</div>
					<form action="{{url('daftar')}}/kirim_pesan" method="POST" enctype="multipart/form-data" >
						{{csrf_field()}}
						<div class="card-body">
							<div class="form-group row">
								<label class="col-sm-2"> Pesan </label>
								<div class="col-sm-10">
									<input name="chatwa" class="form-control" id="chatwa" aria-describedby="emailHelp"
									@foreach($smp1 as $ka)
									value="{{$ka->chatwa}}"
									@endforeach
									>
								</div>
							</div>
						</div>

						<input type="hidden" name="nohp" value="{{$siswa->nohp}}">

						<div class="card-footer">
							<button type="submit" name="submit" class="btn btn-primary btn-sm"> Send </button>
							<a href="{{url('daftar/data')}}" class="btn btn-primary btn-sm float-right">Kembali</a>
						</div>
					</form>
				</div>
			</div>
		</div>
@endif 

@if ($siswa->jenjang == 'SMP 2')
		<div class="row">
			<div class="col-md-12">
				<div class="card card-info">
					<div class="card-header">
						<h3 class="card-title"> Kirim Pesan untuk {{$siswa->nama}} </h3>
					</div>
					<form action="{{url('daftar')}}/kirim_pesan" method="POST" enctype="multipart/form-data" >
						{{csrf_field()}}
						<div class="card-body">
							<div class="form-group row">
								<label class="col-sm-2"> Pesan </label>
								<div class="col-sm-10">
									<input name="chatwa" class="form-control" id="chatwa" aria-describedby="emailHelp"
									@foreach($smp2 as $ka)
									value="{{$ka->chatwa}}"
									@endforeach
									>
								</div>
							</div>
						</div>

						<input type="hidden" name="nohp" value="{{$siswa->nohp}}">

						<div class="card-footer">
							<button type="submit" name="submit" class="btn btn-primary btn-sm"> Send </button>
							<a href="{{url('daftar/data')}}" class="btn btn-primary btn-sm float-right">Kembali</a>
						</div>
					</form>
				</div>
			</div>
		</div>
@endif 

@if ($siswa->jenjang == 'MTs')
		<div class="row">
			<div class="col-md-12">
				<div class="card card-info">
					<div class="card-header">
						<h3 class="card-title"> Kirim Pesan untuk {{$siswa->nama}} </h3>
					</div>
					<form action="{{url('daftar')}}/kirim_pesan" method="POST" enctype="multipart/form-data" >
						{{csrf_field()}}
						<div class="card-body">
							<div class="form-group row">
								<label class="col-sm-2"> Pesan </label>
								<div class="col-sm-10">
									<input name="chatwa" class="form-control" id="chatwa" aria-describedby="emailHelp"
									@foreach($mts as $ka)
									value="{{$ka->chatwa}}"
									@endforeach
									>
								</div>
							</div>
						</div>

						<input type="hidden" name="nohp" value="{{$siswa->nohp}}">

						<div class="card-footer">
							<button type="submit" name="submit" class="btn btn-primary btn-sm"> Send </button>
							<a href="{{url('daftar/data')}}" class="btn btn-primary btn-sm float-right">Kembali</a>
						</div>
					</form>
				</div>
			</div>
		</div>
@endif 

@if ($siswa->jenjang == 'SMK')
		<div class="row">
			<div class="col-md-12">
				<div class="card card-info">
					<div class="card-header">
						<h3 class="card-title"> Kirim Pesan untuk {{$siswa->nama}} </h3>
					</div>
					<form action="{{url('daftar')}}/kirim_pesan" method="POST" enctype="multipart/form-data" >
						{{csrf_field()}}
						<div class="card-body">
							<div class="form-group row">
								<label class="col-sm-2"> Pesan </label>
								<div class="col-sm-10">
									<input name="chatwa" class="form-control" id="chatwa" aria-describedby="emailHelp"
									@foreach($smk as $ka)
									value="{{$ka->chatwa}}"
									@endforeach
									>
								</div>
							</div>
						</div>

						<input type="hidden" name="nohp" value="{{$siswa->nohp}}">

						<div class="card-footer">
							<button type="submit" name="submit" class="btn btn-primary btn-sm"> Send </button>
							<a href="{{url('daftar/data')}}" class="btn btn-primary btn-sm float-right">Kembali</a>
						</div>
					</form>
				</div>
			</div>
		</div>
@endif 

@if ($siswa->jenjang == 'MA')
		<div class="row">
			<div class="col-md-12">
				<div class="card card-info">
					<div class="card-header">
						<h3 class="card-title"> Kirim Pesan untuk {{$siswa->nama}} </h3>
					</div>
					<form action="{{url('daftar')}}/kirim_pesan" method="POST" enctype="multipart/form-data" >
						{{csrf_field()}}
						<div class="card-body">
							<div class="form-group row">
								<label class="col-sm-2"> Pesan </label>
								<div class="col-sm-10">
									<input name="chatwa" class="form-control" id="chatwa" aria-describedby="emailHelp"
									@foreach($ma as $ka)
									value="{{$ka->chatwa}}"
									@endforeach
									>
								</div>
							</div>
						</div>

						<input type="hidden" name="nohp" value="{{$siswa->nohp}}">

						<div class="card-footer">
							<button type="submit" name="submit" class="btn btn-primary btn-sm"> Send </button>
							<a href="{{url('daftar/data')}}" class="btn btn-primary btn-sm float-right">Kembali</a>
						</div>
					</form>
				</div>
			</div>
		</div>
@endif 

		<div class="row">
			<div class="col-md-12">
				<div class="card card-info">
					<div class="card-header">
						<h3 class="card-title"> Sosialisai </h3>
					</div>
					<form action="{{url('daftar')}}/kirim_pesan" method="POST" enctype="multipart/form-data" >
						{{csrf_field()}}

						<input type="hidden" name="nohp" value="{{$siswa->nohp}}">

						<div class="card-footer">
							<button type="submit" name="submit" class="btn btn-primary btn-sm"> Live Chat </button>
							<a href="{{url('daftar/data')}}" class="btn btn-primary btn-sm float-right">Kembali</a>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</section>





@endsection