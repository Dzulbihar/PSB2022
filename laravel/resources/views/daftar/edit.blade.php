@extends('layouts.app')

@section('content')

<head>
  <title> Edit - Pondok Pesantren Askhabul Kahfi</title>
</head>

<!-- ______________dropdown_______________________________________________ --> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous"> 
<!-- _______________________________________________________________________ --> 



<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1> Edit Data Santri Baru </h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ url('daftar') }}/{{$siswa->id}}/{{('detail')}}"> Profile Santri </a></li>
					<li class="breadcrumb-item active">Edit Santri Baru</li>
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
						<h3 class="card-title"> Edit Data {{$siswa->nama}} </h3>
					</div>

					<!-- form start -->
					<form action="{{ url('daftar') }}/{{$siswa->id}}/{{('update')}}" method="POST" enctype="multipart/form-data"  >
						{{csrf_field()}}
						<div class="card-body">

							<!-- jenjang -->                        
							<div class="form-group row">
								<div class="col-md-6">
									<label for="jenjang"> Jenjang </label>
									<select id="jenjang" class="form-control" name="jenjang">
										<option selected> {{ $siswa->jenjang}} </option> 
								            @foreach($jenjang as $ka)
								                <option>
								                  	{{$ka->jenjang}}
								               	</option>
								            @endforeach
										</option>
									</select>
								</div>

								<!-- prodi -->
								<div class="col-md-6">
									<label for="prodi"> Prodi </label>
									<select id="prodi" name="prodi" class="form-control">
										<option selected> {{ $siswa->prodi}} </option>
									</select>
								</div>
							</div>

							<!-- fasilitas -->
							<div class="form-group row">
								<div class="col-md-6">
									<label> Alumni </label>
									<select id="alumni" class="form-control" class="form-control" name="alumni">
					                   <option selected></option>
					                   <option value="Alumni Aska" @if($siswa->alumni == 'Alumni Aska') selected @endif> Alumni Aska </option>
					                   <option value="Non Alumni Aska" @if($siswa->alumni == 'Non Alumni Aska') selected @endif> Non Alumni Aska </option>
					                 </select>
								</div>
								<div class="col-md-6">
									<label for="fasilitas"> Fasilitas </label>
									<select id="fasilitas" class="form-control" name="fasilitas">
										<option selected> {{ $siswa->fasilitas}} </option> 
								            @foreach($fasilitas as $ka)
								                <option>
								                  	{{$ka->fasilitas}}
								               	</option>
								            @endforeach
										</option>
									</select>
								</div>
							</div>

							<!-- Nama -->                        
							<div class="form-group row">
								<div class="col-md-12">
									<label for="nama"> Nama Santri </label>
									<input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $siswa->nama}}" required autocomplete="nama" autofocus>
									@error('nama')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>

							<!-- jeniskelamin -->   
							<div class="form-group row">
								<div class="col-md-4">
									<label for="jeniskelamin"> Jenis Kelamin </label>
									<select id="jeniskelamin" class="form-control" id="jeniskelamin" class="form-control @error('jeniskelamin') is-invalid @enderror" name="jeniskelamin" required autocomplete="jeniskelamin" autofocus>
					                   <option selected>-- Jenis Kelamin --</option>
					                   <option value="Laki-laki" @if($siswa->jeniskelamin == 'Laki-laki') selected @endif> Laki-laki </option>
					                   <option value="Perempuan" @if($siswa->jeniskelamin == 'Perempuan') selected @endif> Perempuan </option>
					                 </select>
									@error('jeniskelamin')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<!-- tempatlahir --> 
								<div class="col-md-4">
									<label for="tempatlahir"> Tempat Lahir </label>
									<input id="tempatlahir" type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir" value="{{ $siswa->tempatlahir}}" required autocomplete="tempatlahir" autofocus>
									@error('tempatlahir')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<!-- tanggallahir --> 
								<div class="col-md-4">
									<label for="tanggallahir"> Tanggal Lahir </label>
									<input id="tanggallahir" type="date" class="form-control @error('tanggallahir') is-invalid @enderror" name="tanggallahir" value="{{ $siswa->tanggallahir}}" required autocomplete="tanggallahir" autofocus>
									@error('tanggallahir')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>

			                <!-- country -->
			                <div class="form-group row">
			                  <div class="col-md-6">
			                    <label> Provinsi </label>
			                    <select class="form-select" name="country" id="country">
			                      <option selected> {{ $siswa->country}} </option>
			                      @foreach ($mst_provinsi as $ka)
			                      <option  value="{{$ka->provinsi}}">{{$ka->provinsi}}</option>
			                      @endforeach
			                    </select>
			                  </div>


			                  <!-- state -->
			                  <div class="col-md-6">
			                    <label> Kabupaten </label>
			                    <select class="form-select" name="state" id="state">
			                      <option selected> {{ $siswa->state}} </option>
			                    </select>
			                  </div>
			                </div> 
			                
			                <!-- kecamatan -->
			                <div class="form-group row">
			                  <div class="col-md-6">
			                    <label> Kecamatan </label>
			                    <select class="form-select" name="kecamatan" id="kecamatan">
			                      <option selected> {{ $siswa->kecamatan}} </option>
			                    </select>
			                  </div>

			                  <!-- desa -->
			                  <div class="col-md-6">
			                    <label for="desa"> Dusun/Desa/Kelurahan </label>
			                    <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{ $siswa->desa}}" placeholder="Dusun/Desa/Kelurahan" required autocomplete="desa" autofocus>
			                    @error('desa')
			                    <span class="invalid-feedback" role="alert">
			                      <strong>{{ $message }}</strong>
			                    </span>
			                    @enderror
			                  </div>              
			                </div>



							<!-- namaasalsekolah -->   
							<div class="form-group row">
								<div class="col-md-6">
									<label for="namaasalsekolah"> Nama Asal Sekolah </label>
									<input id="namaasalsekolah" type="text" class="form-control @error('namaasalsekolah') is-invalid @enderror" name="namaasalsekolah" value="{{ $siswa->namaasalsekolah}}" required autocomplete="namaasalsekolah" autofocus>
									@error('namaasalsekolah')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="col-md-6">
									<label for="alamatasalsekolah"> Alamat Asal Sekolah </label>
									<input id="alamatasalsekolah" type="text" class="form-control @error('alamatasalsekolah') is-invalid @enderror" name="alamatasalsekolah" value="{{ $siswa->alamatasalsekolah}}" required autocomplete="alamatasalsekolah" autofocus>
									@error('alamatasalsekolah')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>

							<!-- namaayah -->   
							<div class="form-group row">
								<div class="col-md-4">
									<label for="namaayah"> Nama Ayah </label>
									<input id="namaayah" type="text" class="form-control @error('namaayah') is-invalid @enderror" name="namaayah" value="{{ $siswa->namaayah}}" required autocomplete="namaayah" autofocus>
									@error('namaayah')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="col-md-4">
									<label for="pendidikanayah"> Pendidikan Ayah </label>
									<select id="pendidikanayah" class="form-control" name="pendidikanayah">
										<option selected> {{ $siswa->pendidikanayah}} </option> 
								            @foreach($pendidikan as $ka)
								                <option>
								                  	{{$ka->pendidikan}}
								               	</option>
								            @endforeach
										</option>
									</select>
								</div> 
								<div class="col-md-4">
									<label for="pekerjaanayah"> Pekerjaan Ayah </label>
									<select id="pekerjaanayah" class="form-control" name="pekerjaanayah">
										<option selected> {{ $siswa->pekerjaanayah}} </option> 
								            @foreach($pekerjaan as $ka)
								                <option>
								                  	{{$ka->pekerjaan}}
								               	</option>
								            @endforeach
										</option>
									</select>  
								</div>
							</div>


							<!-- namaibu -->   
							<div class="form-group row">
								<div class="col-md-4">
									<label for="namaibu"> Nama Ibu </label>
									<input id="namaibu" type="text" class="form-control @error('namaibu') is-invalid @enderror" name="namaibu" value="{{ $siswa->namaibu}}" required autocomplete="namaibu" autofocus>
									@error('namaibu')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="col-md-4">
									<label for="pendidikanibu"> Pendidikan Ibu </label>
									    <select id="pendidikanibu" class="form-control" name="pendidikanibu">
										<option selected> {{ $siswa->pendidikanibu}} </option> 
								            @foreach($pendidikan as $ka)
								                <option>
								                  	{{$ka->pendidikan}}
								               	</option>
								            @endforeach
										</option>
									</select>
								</div>
								<div class="col-md-4">
									<label for="pekerjaanibu"> Pekerjaan Ibu </label>
									<select id="pekerjaanibu" class="form-control" name="pekerjaanibu">
										<option selected> {{ $siswa->pekerjaanibu}} </option> 
								            @foreach($pekerjaan as $ka)
								                <option>
								                  	{{$ka->pekerjaan}}
								               	</option>
								            @endforeach
										</option>
									</select> 
								</div>
							</div>

							<!-- nohp -->                        
							<div class="form-group row">
								<div class="col-md-6">
									<label for="nohp"> Nomor WA (+62)  </label>
									<input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ $siswa->nohp}}" placeholder="" required autocomplete="nohp" autofocus>
									@error('nohp')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							<!-- tombol -->    
								<div class="col-md-6">
									<label> . </label>
									<button type="submit" class="btn btn-primary btn-block">
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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
//Lokasi: public/wilayah.js
$('#country').change(function(){
    var kabID = $(this).val();    
    if(kabID){
        $.ajax({
           type:"GET",
           url:"{{url("")}}/getMsKabupaten?kabID="+kabID,
        //   url:"/getMsKabupaten?kabID="+kabID,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#state").empty();
                $("#kecamatan").empty();
                $("#state").append('<option>--- Pilih Kabupaten ---</option>');
                $("#kecamatan").append('<option>--- Kecamatan ---</option>');
                $.each(res,function(nama,kode){
                    $("#state").append('<option value="'+kode+'">'+kode+'</option>');
                });
            }else{
               $("#state").empty();
               $("#kecamatan").empty();
            }
           }
        });
    }else{
        $("#state").empty();
        $("#kecamatan").empty();
    }      
   });
 
   $('#state').change(function(){
    var kecID = $(this).val();    
    if(kecID){
        $.ajax({
           type:"GET",
           url:"{{url("")}}/getMsKecamatan?kecID="+kecID,
        //   url:"/getMsKecamatan?kecID="+kecID,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#kecamatan").empty();
                $("#kecamatan").append('<option>--- Pilih Kecamatan ---</option>');
                $.each(res,function(nama,kode){
                    $("#kecamatan").append('<option value="'+kode+'">'+kode+'</option>');
                });
            }else{
               $("#kecamatan").empty();
            }
           }
        });
    }else{
        $("#kecamatan").empty();
    }      
   });
     
</script>

<script>
    //get Kelas Ruang
  $('#jenjang').change(function(){
      var kabID = $(this).val();    
      if(kabID){
          $.ajax({
             type:"GET",
             // url:"{{url('getPelanggaranBentuk')}}?kabID="+kabID,
            //  url:"/getProdi?kabID="+kabID,
             url:"{{url("")}}/getProdi?kabID="+kabID,
             dataType: 'JSON',
             success:function(res){               
              if(res){
                  $("#prodi").empty();
                  // $("#desa").empty();
                  $("#prodi").append('<option></option>');
                  // $("#desa").append('<option>---Pilih Desa---</option>');
                  $.each(res,function(nama,kode){
                      $("#prodi").append('<option value="'+kode+'">'+kode+'</option>');
                  });
              }else{
                 $("#prodi").empty();
                 // $("#desa").empty();
              }
             }
          });
      }else{
          $("#prodi").empty();
          // $("#desa").empty();
      }      
     });
</script>

@stop




