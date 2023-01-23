@extends('layouts.app')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1> Data Semua Santri </h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
					<li class="breadcrumb-item active">Edit Santri</li>
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
						<h3 class="card-title"> Edit Data Santri </h3>
					</div>

					<!-- form start -->
					<form action="{{ url('umar201') }}/{{$siswa->id}}/{{('update201')}}" method="POST" enctype="multipart/form-data"  >
						{{csrf_field()}}
						<div class="card-body">
							<!-- Nama -->                        
							<div class="form-group row">
								<div class="col-md-12">
									<label for="#"> Nama Santri </label>
									<input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $siswa->nama}}" placeholder="" required autocomplete="nama" autofocus>
									@error('nama')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<!-- Kampus -->                        
							<div class="form-group row">
								<div class="col-md-4">
								  	<label for="#"> Kampus </label>
				                  	<select id="kampus" class="form-control" id="kampus" class="form-control @error('kampus') is-invalid @enderror" name="kampus" required autocomplete="kampus" autofocus>
				                    	<option selected>-- Kampus --</option>
				                    	<option value="Kampus 1" @if($siswa->kampus == 'Kampus 1') selected @endif> Kampus 1 </option>
				                    	<option value="Kampus 2" @if($siswa->kampus == 'Kampus 2') selected @endif> Kampus 2 </option>
				                    	<option value="Kampus 3" @if($siswa->kampus == 'Kampus 3') selected @endif> Kampus 3 </option>
				                    	<option value="Kampus 4" @if($siswa->kampus == 'Kampus 4') selected @endif> Kampus 4 </option>
				                  	</select>
				                  	@error('kampus')
				                  	<span class="invalid-feedback" role="alert">
				                    	<strong>{{ $message }}</strong>
				                  	</span>
				                  	@enderror 
								</div>
							<!-- Gedung --> 
								<div class="col-md-4">
								  	<label for="#"> Gedung </label>
				                  	<select id="gedung" class="form-control" id="gedung" class="form-control @error('gedung') is-invalid @enderror" name="gedung" required autocomplete="gedung" autofocus>
					                    <option selected>-- Gedung --</option>
										<option value="Ummar bin Khattab" @if($siswa->gedung == 'Ummar bin Khattab') selected @endif> Ummar bin Khattab </option>
										<option value="Utsman bin Affan" @if($siswa->gedung == 'Utsman bin Affan') selected @endif> Utsman bin Affan </option>
										<option value="Imam Ghozali" @if($siswa->gedung == 'Imam Ghozali') selected @endif> Imam Ghozali </option>
					                    <option value="Imam Syafii" @if($siswa->gedung == 'Imam Syafii') selected @endif> Imam Syafii </option>
					                    <option value="Imam Bukhori" @if($siswa->gedung == 'Imam Bukhori') selected @endif> Imam Bukhori </option>
					                    <option value="Imam Muslim" @if($siswa->gedung == 'Imam Muslim') selected @endif> Imam Muslim </option>
					                    <option value="Ibnu Anfas" @if($siswa->gedung == 'Ibnu Anfas') selected @endif> Ibnu Anfas </option>
					                    <option value="Imam Tobari" @if($siswa->gedung == 'Imam Tobari') selected @endif> Imam Tobari </option>
										<option value="Khotijah" @if($siswa->gedung == 'Khotijah') selected @endif> Khotijah </option>
										<option value="Hj. Sofiyatun" @if($siswa->gedung == 'Hj. Sofiyatun') selected @endif> Hj. Sofiyatun </option>
										<option value="Robiah" @if($siswa->gedung == 'Robiah') selected @endif> Robiah </option>
										<option value="Masyitoh" @if($siswa->gedung == 'Masyitoh') selected @endif> Masyitoh </option>
										<option value="Gedung A" @if($siswa->gedung == 'Gedung A') selected @endif> Gedung A </option>
										<option value="Gedung B" @if($siswa->gedung == 'Gedung B') selected @endif> Gedung B </option>
				                  	</select>
				                  	@error('gedung')
				                  	<span class="invalid-feedback" role="alert">
				                    	<strong>{{ $message }}</strong>
				                  	</span>
				                  	@enderror 
								</div>
							<!-- Kamar --> 
								<div class="col-md-4">
								  	<label for="#"> Kamar </label>
				                  	<select id="kamar" class="form-control" id="kamar" class="form-control @error('kamar') is-invalid @enderror" name="kamar" required autocomplete="kamar" autofocus>
					                    <option selected>-- Kamar --</option>
					                    <option value="101" @if($siswa->kamar == '101') selected @endif> 101 </option>
					                    <option value="102" @if($siswa->kamar == '102') selected @endif> 102 </option>
					                    <option value="103" @if($siswa->kamar == '103') selected @endif> 103 </option>
					                    <option value="104" @if($siswa->kamar == '104') selected @endif> 104 </option>
					                    <option value="105" @if($siswa->kamar == '105') selected @endif> 105 </option>
					                    <option value="106" @if($siswa->kamar == '106') selected @endif> 106 </option>
					                    <option value="107" @if($siswa->kamar == '107') selected @endif> 107 </option>
					                    <option value="108" @if($siswa->kamar == '108') selected @endif> 108 </option>
					                    <option value="109" @if($siswa->kamar == '109') selected @endif> 109 </option>
					                    <option value="110" @if($siswa->kamar == '110') selected @endif> 110 </option>
					                    <option value="111" @if($siswa->kamar == '111') selected @endif> 111 </option>
					                    <option value="112" @if($siswa->kamar == '112') selected @endif> 112 </option>
					                    <option value="113" @if($siswa->kamar == '113') selected @endif> 113 </option>
					                    <option value="114" @if($siswa->kamar == '114') selected @endif> 114 </option>
					                    <option value="115" @if($siswa->kamar == '115') selected @endif> 115 </option>
					                    <option value="116" @if($siswa->kamar == '116') selected @endif> 116 </option>
					                    <option value="201" @if($siswa->kamar == '201') selected @endif> 201 </option>
					                    <option value="202" @if($siswa->kamar == '202') selected @endif> 202 </option>
					                    <option value="203" @if($siswa->kamar == '203') selected @endif> 203 </option>
					                    <option value="204" @if($siswa->kamar == '204') selected @endif> 204 </option>
					                    <option value="205" @if($siswa->kamar == '205') selected @endif> 205 </option>
					                    <option value="206" @if($siswa->kamar == '206') selected @endif> 206 </option>
					                    <option value="207" @if($siswa->kamar == '207') selected @endif> 207 </option>
					                    <option value="208" @if($siswa->kamar == '208') selected @endif> 208 </option>
					                    <option value="209" @if($siswa->kamar == '209') selected @endif> 209 </option>
					                    <option value="210" @if($siswa->kamar == '210') selected @endif> 210 </option>
					                    <option value="211" @if($siswa->kamar == '211') selected @endif> 211 </option>
					                    <option value="212" @if($siswa->kamar == '212') selected @endif> 212 </option>
					                    <option value="213" @if($siswa->kamar == '213') selected @endif> 213 </option>
					                    <option value="214" @if($siswa->kamar == '214') selected @endif> 214 </option>
					                    <option value="215" @if($siswa->kamar == '215') selected @endif> 215 </option>
					                    <option value="216" @if($siswa->kamar == '216') selected @endif> 216 </option>
					                    <option value="301" @if($siswa->kamar == '301') selected @endif> 301 </option>
					                    <option value="302" @if($siswa->kamar == '302') selected @endif> 302 </option>
					                    <option value="303" @if($siswa->kamar == '303') selected @endif> 303 </option>
					                    <option value="304" @if($siswa->kamar == '304') selected @endif> 304 </option>
					                    <option value="305" @if($siswa->kamar == '305') selected @endif> 305 </option>
					                    <option value="306" @if($siswa->kamar == '306') selected @endif> 306 </option>
					                    <option value="307" @if($siswa->kamar == '307') selected @endif> 307 </option>
					                    <option value="308" @if($siswa->kamar == '308') selected @endif> 308 </option>
					                    <option value="309" @if($siswa->kamar == '309') selected @endif> 309 </option>
					                    <option value="310" @if($siswa->kamar == '310') selected @endif> 310 </option>
					                    <option value="311" @if($siswa->kamar == '311') selected @endif> 311 </option>
					                    <option value="312" @if($siswa->kamar == '312') selected @endif> 312 </option>
					                    <option value="313" @if($siswa->kamar == '313') selected @endif> 313 </option>
					                    <option value="314" @if($siswa->kamar == '314') selected @endif> 314 </option>
					                    <option value="315" @if($siswa->kamar == '315') selected @endif> 315 </option>
					                    <option value="316" @if($siswa->kamar == '316') selected @endif> 316 </option>
					                    <option value="401" @if($siswa->kamar == '401') selected @endif> 401 </option>
					                    <option value="402" @if($siswa->kamar == '402') selected @endif> 402 </option>
					                    <option value="403" @if($siswa->kamar == '403') selected @endif> 403 </option>
					                    <option value="404" @if($siswa->kamar == '404') selected @endif> 404 </option>
					                    <option value="405" @if($siswa->kamar == '405') selected @endif> 405 </option>
					                    <option value="406" @if($siswa->kamar == '406') selected @endif> 406 </option>
					                    <option value="407" @if($siswa->kamar == '407') selected @endif> 407 </option>
					                    <option value="408" @if($siswa->kamar == '408') selected @endif> 408 </option>
					                    <option value="409" @if($siswa->kamar == '409') selected @endif> 409 </option>
					                    <option value="410" @if($siswa->kamar == '410') selected @endif> 410 </option>
					                    <option value="411" @if($siswa->kamar == '411') selected @endif> 411 </option>
					                    <option value="412" @if($siswa->kamar == '412') selected @endif> 412 </option>
					                    <option value="413" @if($siswa->kamar == '413') selected @endif> 413 </option>
					                    <option value="414" @if($siswa->kamar == '414') selected @endif> 414 </option>
					                    <option value="415" @if($siswa->kamar == '415') selected @endif> 415 </option>
					                    <option value="416" @if($siswa->kamar == '416') selected @endif> 416 </option>
				                  	</select>
				                  	@error('kamar')
				                  	<span class="invalid-feedback" role="alert">
				                    	<strong>{{ $message }}</strong>
				                  	</span>
				                  	@enderror  
								</div>
							</div>

							<!-- Jenjang -->                        
							<div class="form-group row">
								<div class="col-md-4">
								  	<label for="#"> Jenjang </label>
				                  	<select id="inputState" class="form-control" id="jenjang" class="form-control @error('jenjang') is-invalid @enderror" name="jenjang" required autocomplete="jenjang" autofocus>
					                    <option selected>-- Jenjang --</option>
					                    <option value="SMP 1" @if($siswa->jenjang == 'SMP 1') selected @endif> SMP 1 </option>
					                    <option value="SMP 2" @if($siswa->jenjang == 'SMP 2') selected @endif> SMP 2 </option>
					                    <option value="MTs" @if($siswa->jenjang == 'MTs') selected @endif> MTs </option>
					                    <option value="SMK" @if($siswa->jenjang == 'SMK') selected @endif> SMK </option>
					                    <option value="MA" @if($siswa->jenjang == 'MA') selected @endif> MA </option>
				                  	</select>
				                  	@error('jenjang')
				                  	<span class="invalid-feedback" role="alert">
				                    	<strong>{{ $message }}</strong>
				                  	</span>
				                  	@enderror  
								</div>
							<!-- Kelas --> 
								<div class="col-md-4">
								  	<label for="#"> Kelas </label>
				                  	<select id="inputState" class="form-control" id="kelas" class="form-control @error('kelas') is-invalid @enderror" name="kelas" required autocomplete="kelas" autofocus>
					                    <option selected>-- Kelas --</option>
					                    <option value="7" @if($siswa->kelas == '7') selected @endif> 7 </option>
					                    <option value="8" @if($siswa->kelas == '8') selected @endif> 8 </option>
					                    <option value="9" @if($siswa->kelas == '9') selected @endif> 9 </option>
					                    <option value="10" @if($siswa->kelas == '10') selected @endif> 10 </option>
					                    <option value="11" @if($siswa->kelas == '11') selected @endif> 11 </option>
					                    <option value="12" @if($siswa->kelas == '12') selected @endif> 12 </option>
				                  	</select>
				                  	@error('kelas')
				                  	<span class="invalid-feedback" role="alert">
				                    	<strong>{{ $message }}</strong>
				                  	</span>
				                  	@enderror  
								</div>
							<!-- Ruang --> 
								<div class="col-md-4">
								  	<label for="#"> Ruang </label>
				                  	<select id="inputState" class="form-control" id="ruang" class="form-control @error('ruang') is-invalid @enderror" name="ruang" required autocomplete="ruang" autofocus>
					                    <option selected>-- Ruang --</option>
					                    <option value="a" @if($siswa->ruang == 'a') selected @endif> a </option>
					                    <option value="b" @if($siswa->ruang == 'b') selected @endif> b </option>
					                    <option value="c" @if($siswa->ruang == 'c') selected @endif> c </option>
					                    <option value="d" @if($siswa->ruang == 'd') selected @endif> d </option>
					                    <option value="e" @if($siswa->ruang == 'e') selected @endif> e </option>
					                    <option value="f" @if($siswa->ruang == 'f') selected @endif> f </option>
					                    <option value="g" @if($siswa->ruang == 'g') selected @endif> g </option>
					                    <option value="h" @if($siswa->ruang == 'h') selected @endif> h </option>
					                    <option value="i" @if($siswa->ruang == 'i') selected @endif> i </option>
					                    <option value="j" @if($siswa->ruang == 'j') selected @endif> j </option>
					                    <option value="k" @if($siswa->ruang == 'k') selected @endif> k </option>
					                    <option value="l" @if($siswa->ruang == 'l') selected @endif> l </option>
					                    <option value="TKJ 1" @if($siswa->ruang == 'TKJ 1') selected @endif> TKJ 1</option>
					                    <option value="TKJ 2" @if($siswa->ruang == 'TKJ 2') selected @endif> TKJ 2</option>
					                    <option value="TKJ 3" @if($siswa->ruang == 'TKJ 3') selected @endif> TKJ 3</option>
					                    <option value="TKJ 4" @if($siswa->ruang == 'TKJ 4') selected @endif> TKJ 4</option>
					                    <option value="TKR 1" @if($siswa->ruang == 'TKR 1') selected @endif> TKR 1</option>
					                    <option value="TKR 2" @if($siswa->ruang == 'TKR 2') selected @endif> TKR 2</option>
					                    <option value="TKR 3" @if($siswa->ruang == 'TKR 3') selected @endif> TKR 3</option>
					                    <option value="TKR 4" @if($siswa->ruang == 'TKR 4') selected @endif> TKR 4</option>
					                    <option value="MIPA 1" @if($siswa->ruang == 'MIPA 1') selected @endif> MIPA 1</option>
					                    <option value="MIPA 2" @if($siswa->ruang == 'MIPA 2') selected @endif> MIPA 2</option>
					                    <option value="MIPA 3" @if($siswa->ruang == 'MIPA 3') selected @endif> MIPA 3</option>
					                    <option value="MIPA 4" @if($siswa->ruang == 'MIPA 4') selected @endif> MIPA 4</option>
				                  	</select>
				                  	@error('ruang')
				                  	<span class="invalid-feedback" role="alert">
				                    	<strong>{{ $message }}</strong>
				                  	</span>
				                  	@enderror  
								</div>
							</div>

							<!-- alamat -->                        
							<div class="form-group row">
								<div class="col-md-6">
									<label for="#"> Alamat </label>
									<input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $siswa->alamat}}" placeholder="" required autocomplete="alamat" autofocus>
									@error('alamat')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							<!-- wali --> 
								<div class="col-md-6">
									<label for="#"> Wali Murid </label>
									<input id="wali" type="text" class="form-control @error('wali') is-invalid @enderror" name="wali" value="{{ $siswa->wali}}" placeholder="" required autocomplete="wali" autofocus>
									@error('wali')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<!-- nohp -->                        
							<div class="form-group row">
								<div class="col-md-6">
									<label for="#"> Nomor HP </label>
									<input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ $siswa->nohp}}" placeholder="" required autocomplete="nohp" autofocus>
									@error('nohp')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							<!-- tombol -->    
								<div class="col-md-6">
									<br>
									<button type="submit" class="btn btn-primary">
										Update
									</button>
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