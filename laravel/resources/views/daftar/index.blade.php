<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Pendaftaran - Pondok Pesantren Askhabul Kahfi</title>
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('adminlte/dist/img/logoaska.png')}}" width="30">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.min.css')}}">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">


<!-- ________________dropdown__________________________________ -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous"> 
<!-- _______________________________________________________________ --> 


</head>

<!-- <body class="hold-transition sidebar-mini layout-fixed"> -->
<body class="hold-transition sidebar-mini sidebar-collapse">
  <div class="wrapper">
    <!-- _______________________________________________________________________ --> 
    <!-- ________________Navbar_______________________________________ -->  
    @include('layouts.navbar')
    <!-- ____________________________________________________________________ --> 
    <!-- ________________Sidebar______________________________________________ -->
    @include('layouts.sidebar')
    <!-- ____________________________________________________________________ -->
    <!-- _______________________________________________________________________ --> 

    <!-- _______________________________________________________________________ --> 
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

<!-- ________________________________________________________________________________ -->

      <section class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-12">
              <!-- small box -->
              <div class="small-box bg-secondary">
                <div class="inner">
                  <h3>Selamat Datang Calon Pemimpin Masa Depan </h3>
                  <h4> Di Ponpes Askhabul Kahfi </h4>
                  <br>
                </div>
                <!-- <a href="#" class="small-box-footer" data-toggle="modal" data-target="#siswa" class="btn btn-primary"> Daftar Sekarang </a> -->
              </button>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </section>

      <!-- Total Pendaftaran -->
      <section class="content-header">
        <div class="row">
          <!-- SMP 1 -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-primary">
              <div class="inner">
                <h4>SMP 1</h4>
                <br>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer" data-toggle="modal" data-target="#smp1" class="btn btn-primary"> Daftar </a>
            </div>
          </div>
          <!-- SMP 2 -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-info">
              <div class="inner">
                <h4>SMP 2</h4>
                <br>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer" data-toggle="modal" data-target="#smp2" class="btn btn-primary"> Daftar </a>
            </div>
          </div>
          <!-- MTs -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-warning">
              <div class="inner">
                <h4>MTs</h4>
                <br>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer" data-toggle="modal" data-target="#mts" class="btn btn-primary"> Daftar </a>
            </div>
          </div>
          <!-- SMK -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-danger">
              <div class="inner">
                <h4> SMK </h4>
                <br>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer" data-toggle="modal" data-target="#smk" class="btn btn-primary"> Daftar </a>
            </div>
          </div>
          <!-- MA -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> MA </h4>
                <br>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer" data-toggle="modal" data-target="#ma" class="btn btn-primary"> Daftar </a>
            </div>
          </div>
          <!-- Mahad Aly -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-white">
              <div class="inner">
                <h4> Mahad Aly </h4>
                <br>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer" data-toggle="modal" data-target="#mahadaly" class="btn btn-primary"> Daftar </a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>

      <!-- Modal daftar -->
      <div class="modal fade bd-example-modal-lg" id="siswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data Santri </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Formulir ______________________________________________________________________________________________ -->
            <div class="modal-body">

              <form action="{{url('daftar/createdaftar')}}" method="POST" enctype="multipart/form-data" >
                {{csrf_field()}}
                <!-- __________________________________________________________________________________ -->

                <!-- jalurpendaftaran -->
                    <input type="hidden" id="jalurpendaftaran"  class="form-control" name="jalurpendaftaran" value="Offline"  >
                <!-- bulanpendaftaran -->
                    <input type="hidden" name="bulanpendaftaran" id="bulanpendaftaran" value="<?php echo date("F"); ?>">
                <!-- tahunpendaftaran -->
                    <input type="hidden" name="tahunpendaftaran" id="tahunpendaftaran" value="<?php echo date("Y"); ?>">
                <!-- waktu -->
                    <input type="hidden" name="waktu" id="waktu" value="<?php echo date("d-m-Y"); ?>">

                <!-- jenjang -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="jenjang"> Jenjang </label>
                    <select id="jenjang" name="jenjang" class="form-control" value="{{ old('jenjang') }}">
                      @foreach($jenjang as $ka)
                      <option value="{{$ka->jenjang}}">{{$ka->jenjang}}</option>
                      @endforeach
                    </select>
                  </div>

                  <!-- prodi -->
                  <div class="col-md-6">
                    <label for="prodi"> Prodi </label>
                    <select id="prodi" name="prodi" class="form-control">
                      <option selected></option>
                    </select>
                  </div>
                </div>

                <!-- alumni -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="alumni"> Alumni  </label>
                    <select id="alumni" class="form-control" class="form-control" name="alumni" value="{{ old('alumni') }}">
                      <option selected></option>
                      <option> Alumni Aska </option>
                      <option> Non Alumni Aska </option>
                    </select>
                  </div> 
                  <div class="col-md-6">
                    <label for="fasilitas"> Fasilitas </label>
                    <select id="fasilitas" name="fasilitas" class="form-control" class="form-control" value="{{ old('fasilitas') }}">
                      @foreach($fasilitas as $ka)
                      <option value="{{$ka->fasilitas}}">{{$ka->fasilitas}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <!-- nama -->
                <div class="form-group row">                        
                  <div class="col-md-12">
                    <label for="nama"> Nama Santri </label>
                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Nama Siswa" required autocomplete="nama" autofocus>
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
                    <label for="jeniskelamin"> Jenis Kelamin  </label>
                    <select id="jeniskelamin" class="form-control" id="jeniskelamin" class="form-control @error('jeniskelamin') is-invalid @enderror" name="jeniskelamin" value="{{ old('jeniskelamin') }}" required autocomplete="jeniskelamin" autofocus>
                      <option selected>-- Jenis Kelamin --</option>
                      <option> Laki-laki </option>
                      <option> Perempuan </option>
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
                    <input id="tempatlahir" type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir" value="{{ old('tempatlahir') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir" autofocus>
                    @error('tempatlahir')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- tanggallahir -->                        
                  <div class="col-md-4">
                    <label for="tanggallahir"> Tanggal Lahir </label>
                    <input id="tanggallahir" type="date" class="form-control @error('tanggallahir') is-invalid @enderror" name="tanggallahir" value="{{ old('tanggallahir') }}" placeholder="Tanggal Lahir" required autocomplete="tanggallahir" autofocus>
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
                      <option selected>--- Pilih Provinsi ---</option>
                      @foreach ($mst_provinsi as $ka)
                      <option  value="{{$ka->provinsi}}">{{$ka->provinsi}}</option>
                      @endforeach
                    </select>
                  </div>

                  <!-- state -->
                  <div class="col-md-6">
                    <label> Kabupaten </label>
                    <select class="form-select" name="state" id="state">
                      <option selected>--- Kabupaten ---</option>
                    </select>
                  </div>
                </div> 
                
                <!-- kecamatan -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label> Kecamatan </label>
                    <select class="form-select" name="kecamatan" id="kecamatan">
                      <option selected>--- Kecamatan ---</option>
                    </select>
                  </div>

                  <!-- desa -->
                  <div class="col-md-6">
                    <label for="desa"> Dusun/Desa/Kelurahan </label>
                    <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{ old('desa') }}" placeholder="Dusun/Desa/Kelurahan" required autocomplete="desa" autofocus>
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
                    <input id="namaasalsekolah" type="text" class="form-control @error('namaasalsekolah') is-invalid @enderror" name="namaasalsekolah" value="{{ old('namaasalsekolah') }}" placeholder="Nama Asal Sekolah" required autocomplete="namaasalsekolah" autofocus>
                    @error('namaasalsekolah')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- alamatasalsekolah -->                        
                  <div class="col-md-6">
                    <label for="alamatasalsekolah"> Alamat Asal Sekolah </label>
                    <input id="alamatasalsekolah" type="text" class="form-control @error('alamatasalsekolah') is-invalid @enderror" name="alamatasalsekolah" value="{{ old('alamatasalsekolah') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah" autofocus>
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
                    <input id="namaayah" type="text" class="form-control @error('namaayah') is-invalid @enderror" name="namaayah" value="{{ old('namaayah') }}" placeholder="Nama Ayah" required autocomplete="namaayah" autofocus>
                    @error('namaayah')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- pendidikanayah -->                        
                  <div class="col-md-4">
                    <label for="pendidikanayah"> Pendidikan Ayah </label>
                    <select id="pendidikanayah" name="pendidikanayah" class="form-control" class="form-control" value="{{ old('pendidikanayah') }}">
                      @foreach($pendidikan as $ka)
                      <option value="{{$ka->pendidikan}}">{{$ka->pendidikan}}</option>
                      @endforeach
                    </select>
                  </div>
                <!-- pekerjaanayah --> 
                  <div class="col-md-4">
                    <label for="pekerjaanayah"> Pekerjaan Ayah </label>
                    <select id="pekerjaanayah" name="pekerjaanayah" class="form-control" class="form-control" value="{{ old('pekerjaanayah') }}">
                      @foreach($pekerjaan as $ka)
                      <option value="{{$ka->pekerjaan}}">{{$ka->pekerjaan}}</option>
                      @endforeach
                    </select>   
                  </div>
                </div>

                <!-- namaibu -->
                <div class="form-group row">                        
                  <div class="col-md-4">
                    <label for="namaibu"> Nama Ibu </label>
                    <input id="namaibu" type="text" class="form-control @error('namaibu') is-invalid @enderror" name="namaibu" value="{{ old('namaibu') }}" placeholder="Nama Ibu" required autocomplete="namaibu" autofocus>
                    @error('namaibu')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- pendidikanibu -->                        
                  <div class="col-md-4">
                    <label for="pendidikanibu"> Pendidikan Ibu </label>
                    <select id="pendidikanibu" name="pendidikanibu" class="form-control" class="form-control" value="{{ old('pendidikanibu') }}">
                      @foreach($pendidikan as $ka)
                      <option value="{{$ka->pendidikan}}">{{$ka->pendidikan}}</option>
                      @endforeach
                    </select>
                  </div>
                <!-- pekerjaanibu --> 
                  <div class="col-md-4">
                    <label for="pekerjaanibu"> Pekerjaan Ibu </label>
                    <select id="pekerjaanibu" name="pekerjaanibu" class="form-control" class="form-control" value="{{ old('pekerjaanibu') }}">
                      @foreach($pekerjaan as $ka)
                      <option value="{{$ka->pekerjaan}}">{{$ka->pekerjaan}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <!-- nohp -->
                <div class="form-group row">                        
                  <div class="col-md-12">
                    <label for="nohp"> Nomor WA (+62) </label>
                    <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="+62" placeholder="Nomor HP" required autocomplete="nohp" autofocus>
                    @error('nohp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>    
                </div>               

                <!-- email -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label> <b> Email </b> (namasantri@gmail.com) (tanpa spasi) </label>
                    <input id="email" type="email" class="form-control" name="email" value="@gmail.com" required autocomplete="password" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- password -->
                  <div class="col-md-6">
                    <label> <b>  Password </b>  </label>
                    <input readonly id="password" type="text" class="form-control" name="password" value="santriaska" required autocomplete="password" autofocus>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <!-- __________________________________________________________________________________ -->
                <!-- Tombol -->    
                <div class="form-group row">                    
                  <div class="col-md-12">
                    <br>
                    <button type="submit" class="btn btn-primary btn-sm">
                      Simpan
                    </button>
                    <button type="button" class="btn btn-secondary btn-sm float-right" data-dismiss="modal">Close</button>
                  </div>
                </form>  
              </div>
              <!-- EndFormulir __________________________________________________________________________________________ -->
            </div>
          </div>
        </div>
        <!-- EndModal ------------------------------------------------- -->
      </div>

      <!-- Modal SMP 1 -->
      <div class="modal fade bd-example-modal-lg" id="smp1ditutup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pendaftaran <b>SMP 1</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Formulir ______________________________________________________________________________________________ -->
            <div class="modal-body">

              <form action="{{url('daftar/createdaftar')}}" method="POST" enctype="multipart/form-data" >
                {{csrf_field()}}
                <!-- __________________________________________________________________________________ -->

                <!-- jalurpendaftaran -->
                    <input type="hidden" id="jalurpendaftaran"  class="form-control" name="jalurpendaftaran" value="Offline"  >
                <!-- bulanpendaftaran -->
                    <input type="hidden" name="bulanpendaftaran" id="bulanpendaftaran" value="<?php echo date("F"); ?>">
                <!-- tahunpendaftaran -->
                    <input type="hidden" name="tahunpendaftaran" id="tahunpendaftaran" value="<?php echo date("Y"); ?>">
                <!-- waktu -->
                    <input type="hidden" name="waktu" id="waktu" value="<?php echo date("d-m-Y"); ?>">

                <!-- jenjang -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="jenjang"> Jenjang </label>
                    <select id="jenjang" name="jenjang" class="form-control" value="{{ old('jenjang') }}">
                      <option value="SMP 1">SMP 1</option>
                    </select>
                  </div>
                <!-- fasilitas -->
                  <div class="col-md-6">
                    <label for="fasilitas"> Fasilitas </label>
                    <select id="fasilitas" name="fasilitas" class="form-control" class="form-control" value="{{ old('fasilitas') }}">
                      @foreach($fasilitas as $ka)
                      <option value="{{$ka->fasilitas}}">{{$ka->fasilitas}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <!-- nama -->
                <div class="form-group row">                        
                  <div class="col-md-12">
                    <label for="nama"> Nama Santri </label>
                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Nama Siswa" required autocomplete="nama" autofocus>
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
                    <label for="jeniskelamin"> Jenis Kelamin  </label>
                    <select id="jeniskelamin" class="form-control" id="jeniskelamin" class="form-control @error('jeniskelamin') is-invalid @enderror" name="jeniskelamin" value="{{ old('jeniskelamin') }}" required autocomplete="jeniskelamin" autofocus>
                      <option selected>-- Jenis Kelamin --</option>
                      <option> Laki-laki </option>
                      <option> Perempuan </option>
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
                    <input id="tempatlahir" type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir" value="{{ old('tempatlahir') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir" autofocus>
                    @error('tempatlahir')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- tanggallahir -->                        
                  <div class="col-md-4">
                    <label for="tanggallahir"> Tanggal Lahir </label>
                    <input id="tanggallahir" type="date" class="form-control @error('tanggallahir') is-invalid @enderror" name="tanggallahir" value="{{ old('tanggallahir') }}" placeholder="Tanggal Lahir" required autocomplete="tanggallahir" autofocus>
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
                    <select class="form-select" name="country" id="country_smp1">
                      <option selected>--- Pilih Provinsi ---</option>
                      @foreach ($mst_provinsi as $ka)
                      <option  value="{{$ka->provinsi}}">{{$ka->provinsi}}</option>
                      @endforeach
                    </select>
                  </div>

                  <!-- state -->
                  <div class="col-md-6">
                    <label> Kabupaten </label>
                    <select class="form-select" name="state" id="state_smp1">
                      <option selected>--- Kabupaten ---</option>
                    </select>
                  </div>
                </div> 
                
                <!-- kecamatan -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label> Kecamatan </label>
                    <select class="form-select" name="kecamatan" id="kecamatan_smp1">
                      <option selected>--- Kecamatan ---</option>
                    </select>
                  </div>

                  <!-- desa -->
                  <div class="col-md-6">
                    <label for="desa"> Dusun/Desa/Kelurahan </label>
                    <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{ old('desa') }}" placeholder="Dusun/Desa/Kelurahan" required autocomplete="desa" autofocus>
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
                    <input id="namaasalsekolah" type="text" class="form-control @error('namaasalsekolah') is-invalid @enderror" name="namaasalsekolah" value="{{ old('namaasalsekolah') }}" placeholder="Nama Asal Sekolah" required autocomplete="namaasalsekolah" autofocus>
                    @error('namaasalsekolah')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- alamatasalsekolah -->                        
                  <div class="col-md-6">
                    <label for="alamatasalsekolah"> Alamat Asal Sekolah </label>
                    <input id="alamatasalsekolah" type="text" class="form-control @error('alamatasalsekolah') is-invalid @enderror" name="alamatasalsekolah" value="{{ old('alamatasalsekolah') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah" autofocus>
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
                    <input id="namaayah" type="text" class="form-control @error('namaayah') is-invalid @enderror" name="namaayah" value="{{ old('namaayah') }}" placeholder="Nama Ayah" required autocomplete="namaayah" autofocus>
                    @error('namaayah')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- pendidikanayah -->                        
                  <div class="col-md-4">
                    <label for="pendidikanayah"> Pendidikan Ayah </label>
                    <select id="pendidikanayah" name="pendidikanayah" class="form-control" class="form-control" value="{{ old('pendidikanayah') }}">
                      @foreach($pendidikan as $ka)
                      <option value="{{$ka->pendidikan}}">{{$ka->pendidikan}}</option>
                      @endforeach
                    </select>
                  </div>
                <!-- pekerjaanayah --> 
                  <div class="col-md-4">
                    <label for="pekerjaanayah"> Pekerjaan Ayah </label>
                    <select id="pekerjaanayah" name="pekerjaanayah" class="form-control" class="form-control" value="{{ old('pekerjaanayah') }}">
                      @foreach($pekerjaan as $ka)
                      <option value="{{$ka->pekerjaan}}">{{$ka->pekerjaan}}</option>
                      @endforeach
                    </select>   
                  </div>
                </div>

                <!-- namaibu -->
                <div class="form-group row">                        
                  <div class="col-md-4">
                    <label for="namaibu"> Nama Ibu </label>
                    <input id="namaibu" type="text" class="form-control @error('namaibu') is-invalid @enderror" name="namaibu" value="{{ old('namaibu') }}" placeholder="Nama Ibu" required autocomplete="namaibu" autofocus>
                    @error('namaibu')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- pendidikanibu -->                        
                  <div class="col-md-4">
                    <label for="pendidikanibu"> Pendidikan Ibu </label>
                    <select id="pendidikanibu" name="pendidikanibu" class="form-control" class="form-control" value="{{ old('pendidikanibu') }}">
                      @foreach($pendidikan as $ka)
                      <option value="{{$ka->pendidikan}}">{{$ka->pendidikan}}</option>
                      @endforeach
                    </select>
                  </div>
                <!-- pekerjaanibu --> 
                  <div class="col-md-4">
                    <label for="pekerjaanibu"> Pekerjaan Ibu </label>
                    <select id="pekerjaanibu" name="pekerjaanibu" class="form-control" class="form-control" value="{{ old('pekerjaanibu') }}">
                      @foreach($pekerjaan as $ka)
                      <option value="{{$ka->pekerjaan}}">{{$ka->pekerjaan}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <!-- nohp -->
                <div class="form-group row">                        
                  <div class="col-md-12">
                    <label for="nohp"> Nomor WA (+62) </label>
                    <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="+62" placeholder="Nomor HP" required autocomplete="nohp" autofocus>
                    @error('nohp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>    
                </div>               

                <!-- email -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label> <b> Email </b> (namasantri@gmail.com) (tanpa spasi) </label>
                    <input id="email" type="email" class="form-control" name="email" value="@gmail.com" required autocomplete="password" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- password -->
                  <div class="col-md-6">
                    <label> <b>  Password </b>  </label>
                    <input readonly id="password" type="text" class="form-control" name="password" value="santriaska" required autocomplete="password" autofocus>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <!-- __________________________________________________________________________________ -->
                <!-- Tombol -->    
                <div class="form-group row">                    
                  <div class="col-md-12">
                    <br>
                    <button type="submit" class="btn btn-primary btn-sm">
                      Simpan
                    </button>
                    <button type="button" class="btn btn-secondary btn-sm float-right" data-dismiss="modal">Close</button>
                  </div>
                </form>  
              </div>
              <!-- EndFormulir __________________________________________________________________________________________ -->
            </div>
          </div>
        </div>
        <!-- EndModal ------------------------------------------------- -->
      </div>

      <!-- Modal SMP 1 -->
      <div class="modal fade bd-example-modal-lg" id="smp1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pendaftaran <b>SMP 1</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Formulir ______________________________________________________________________________________________ -->
            <div class="modal-body">

              <form action="{{url('daftar/createdaftar')}}" method="POST" enctype="multipart/form-data" >
                {{csrf_field()}}
                <!-- __________________________________________________________________________________ -->

                <!-- nama -->
                <div class="form-group row">                        
                  <div class="col-md-12">
                    <label for="nama"> Pendaftaran ditutup (dialihkan ke SMP 2) </label>
                  </div>
                </div>

              <!-- EndFormulir __________________________________________________________________________________________ -->
            </div>
          </div>
        </div>
        <!-- EndModal ------------------------------------------------- -->
      </div>

      <!-- Modal MTs -->
      <div class="modal fade bd-example-modal-lg" id="mts" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pendaftaran <b>MTs</b> </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Formulir ______________________________________________________________________________________________ -->
            <div class="modal-body">

              <form action="{{url('daftar/createdaftar')}}" method="POST" enctype="multipart/form-data" >
                {{csrf_field()}}
                <!-- __________________________________________________________________________________ -->

                <!-- jalurpendaftaran -->
                    <input type="hidden" id="jalurpendaftaran"  class="form-control" name="jalurpendaftaran" value="Offline"  >
                <!-- bulanpendaftaran -->
                    <input type="hidden" name="bulanpendaftaran" id="bulanpendaftaran" value="<?php echo date("F"); ?>">
                <!-- tahunpendaftaran -->
                    <input type="hidden" name="tahunpendaftaran" id="tahunpendaftaran" value="<?php echo date("Y"); ?>">
                <!-- waktu -->
                    <input type="hidden" name="waktu" id="waktu" value="<?php echo date("d-m-Y"); ?>">

                <!-- jenjang -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="jenjang"> Jenjang </label>
                    <select id="jenjang" name="jenjang" class="form-control" value="{{ old('jenjang') }}">
                      <option value="MTs">MTs</option>
                    </select>
                  </div>
                  <!-- fasilitas -->
                  <div class="col-md-6">
                    <label for="fasilitas"> Fasilitas </label>
                    <select id="fasilitas" name="fasilitas" class="form-control" class="form-control" value="{{ old('fasilitas') }}">
                      @foreach($fasilitas as $ka)
                      <option value="{{$ka->fasilitas}}">{{$ka->fasilitas}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <!-- nama -->
                <div class="form-group row">                        
                  <div class="col-md-12">
                    <label for="nama"> Nama Santri </label>
                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Nama Siswa" required autocomplete="nama" autofocus>
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
                    <label for="jeniskelamin"> Jenis Kelamin  </label>
                    <select id="jeniskelamin" class="form-control" id="jeniskelamin" class="form-control @error('jeniskelamin') is-invalid @enderror" name="jeniskelamin" value="{{ old('jeniskelamin') }}" required autocomplete="jeniskelamin" autofocus>
                      <option selected>-- Jenis Kelamin --</option>
                      <option> Laki-laki </option>
                      <option> Perempuan </option>
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
                    <input id="tempatlahir" type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir" value="{{ old('tempatlahir') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir" autofocus>
                    @error('tempatlahir')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- tanggallahir -->                        
                  <div class="col-md-4">
                    <label for="tanggallahir"> Tanggal Lahir </label>
                    <input id="tanggallahir" type="date" class="form-control @error('tanggallahir') is-invalid @enderror" name="tanggallahir" value="{{ old('tanggallahir') }}" placeholder="Tanggal Lahir" required autocomplete="tanggallahir" autofocus>
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
                    <select class="form-select" name="country" id="country_mts">
                      <option selected>--- Pilih Provinsi ---</option>
                      @foreach ($mst_provinsi as $ka)
                      <option  value="{{$ka->provinsi}}">{{$ka->provinsi}}</option>
                      @endforeach
                    </select>
                  </div>

                  <!-- state -->
                  <div class="col-md-6">
                    <label> Kabupaten </label>
                    <select class="form-select" name="state" id="state_mts">
                      <option selected>--- Kabupaten ---</option>
                    </select>
                  </div>
                </div> 
                
                <!-- kecamatan -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label> Kecamatan </label>
                    <select class="form-select" name="kecamatan" id="kecamatan_mts">
                      <option selected>--- Kecamatan ---</option>
                    </select>
                  </div>

                  <!-- desa -->
                  <div class="col-md-6">
                    <label for="desa"> Dusun/Desa/Kelurahan </label>
                    <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{ old('desa') }}" placeholder="Dusun/Desa/Kelurahan" required autocomplete="desa" autofocus>
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
                    <input id="namaasalsekolah" type="text" class="form-control @error('namaasalsekolah') is-invalid @enderror" name="namaasalsekolah" value="{{ old('namaasalsekolah') }}" placeholder="Nama Asal Sekolah" required autocomplete="namaasalsekolah" autofocus>
                    @error('namaasalsekolah')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- alamatasalsekolah -->                        
                  <div class="col-md-6">
                    <label for="alamatasalsekolah"> Alamat Asal Sekolah </label>
                    <input id="alamatasalsekolah" type="text" class="form-control @error('alamatasalsekolah') is-invalid @enderror" name="alamatasalsekolah" value="{{ old('alamatasalsekolah') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah" autofocus>
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
                    <input id="namaayah" type="text" class="form-control @error('namaayah') is-invalid @enderror" name="namaayah" value="{{ old('namaayah') }}" placeholder="Nama Ayah" required autocomplete="namaayah" autofocus>
                    @error('namaayah')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- pendidikanayah -->                        
                  <div class="col-md-4">
                    <label for="pendidikanayah"> Pendidikan Ayah </label>
                    <select id="pendidikanayah" name="pendidikanayah" class="form-control" class="form-control" value="{{ old('pendidikanayah') }}">
                      @foreach($pendidikan as $ka)
                      <option value="{{$ka->pendidikan}}">{{$ka->pendidikan}}</option>
                      @endforeach
                    </select>
                  </div>
                <!-- pekerjaanayah --> 
                  <div class="col-md-4">
                    <label for="pekerjaanayah"> Pekerjaan Ayah </label>
                    <select id="pekerjaanayah" name="pekerjaanayah" class="form-control" class="form-control" value="{{ old('pekerjaanayah') }}">
                      @foreach($pekerjaan as $ka)
                      <option value="{{$ka->pekerjaan}}">{{$ka->pekerjaan}}</option>
                      @endforeach
                    </select>   
                  </div>
                </div>

                <!-- namaibu -->
                <div class="form-group row">                        
                  <div class="col-md-4">
                    <label for="namaibu"> Nama Ibu </label>
                    <input id="namaibu" type="text" class="form-control @error('namaibu') is-invalid @enderror" name="namaibu" value="{{ old('namaibu') }}" placeholder="Nama Ibu" required autocomplete="namaibu" autofocus>
                    @error('namaibu')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- pendidikanibu -->                        
                  <div class="col-md-4">
                    <label for="pendidikanibu"> Pendidikan Ibu </label>
                    <select id="pendidikanibu" name="pendidikanibu" class="form-control" class="form-control" value="{{ old('pendidikanibu') }}">
                      @foreach($pendidikan as $ka)
                      <option value="{{$ka->pendidikan}}">{{$ka->pendidikan}}</option>
                      @endforeach
                    </select>
                  </div>
                <!-- pekerjaanibu --> 
                  <div class="col-md-4">
                    <label for="pekerjaanibu"> Pekerjaan Ibu </label>
                    <select id="pekerjaanibu" name="pekerjaanibu" class="form-control" class="form-control" value="{{ old('pekerjaanibu') }}">
                      @foreach($pekerjaan as $ka)
                      <option value="{{$ka->pekerjaan}}">{{$ka->pekerjaan}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <!-- nohp -->
                <div class="form-group row">                        
                  <div class="col-md-12">
                    <label for="nohp"> Nomor WA (+62) </label>
                    <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="+62" placeholder="Nomor HP" required autocomplete="nohp" autofocus>
                    @error('nohp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>    
                </div>               

                <!-- email -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label> <b> Email </b> (namasantri@gmail.com) (tanpa spasi) </label>
                    <input id="email" type="email" class="form-control" name="email" value="@gmail.com" required autocomplete="password" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- password -->
                  <div class="col-md-6">
                    <label> <b>  Password </b>  </label>
                    <input readonly id="password" type="text" class="form-control" name="password" value="santriaska" required autocomplete="password" autofocus>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <!-- __________________________________________________________________________________ -->
                <!-- Tombol -->    
                <div class="form-group row">                    
                  <div class="col-md-12">
                    <br>
                    <button type="submit" class="btn btn-primary btn-sm">
                      Simpan
                    </button>
                    <button type="button" class="btn btn-secondary btn-sm float-right" data-dismiss="modal">Close</button>
                  </div>
                </form>  
              </div>
              <!-- EndFormulir __________________________________________________________________________________________ -->
            </div>
          </div>
        </div>
        <!-- EndModal ------------------------------------------------- -->
      </div>

      <!-- Modal SMK -->
      <div class="modal fade bd-example-modal-lg" id="smk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pendaftaran <b>SMK</b> </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Formulir ______________________________________________________________________________________________ -->
            <div class="modal-body">

              <form action="{{url('daftar/createdaftar')}}" method="POST" enctype="multipart/form-data" >
                {{csrf_field()}}
                <!-- __________________________________________________________________________________ -->

                <!-- jalurpendaftaran -->
                    <input type="hidden" id="jalurpendaftaran"  class="form-control" name="jalurpendaftaran" value="Offline"  >
                <!-- bulanpendaftaran -->
                    <input type="hidden" name="bulanpendaftaran" id="bulanpendaftaran" value="<?php echo date("F"); ?>">
                <!-- tahunpendaftaran -->
                    <input type="hidden" name="tahunpendaftaran" id="tahunpendaftaran" value="<?php echo date("Y"); ?>">
                <!-- waktu -->
                    <input type="hidden" name="waktu" id="waktu" value="<?php echo date("d-m-Y"); ?>">

                <!-- jenjang -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="jenjang"> Jenjang </label>
                    <select id="jenjang" name="jenjang" class="form-control" value="{{ old('jenjang') }}">
                      <option value="SMK">SMK</option>
                    </select>
                  </div>
                  <!-- prodi -->
                  <div class="col-md-6">
                    <label for="prodi"> Prodi </label>
                    <select id="prodi" class="form-control" class="form-control" name="prodi" value="{{ old('prodi') }}">
                      <option selected>-- Pilih --</option>
                      <option> TKJ </option>
                      <option> TKR </option>
                    </select>
                  </div>
                </div>

                <!-- alumni -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="alumni"> Alumni  </label>
                    <select id="alumni" class="form-control" class="form-control" name="alumni" value="{{ old('alumni') }}">
                      <option selected>-- Pilih --</option>
                      <option> Alumni Aska </option>
                      <option> Non Alumni Aska </option>
                    </select>
                  </div> 
                  <div class="col-md-6">
                    <label for="fasilitas"> Fasilitas </label>
                    <select id="fasilitas" name="fasilitas" class="form-control" class="form-control" value="{{ old('fasilitas') }}">
                      @foreach($fasilitas as $ka)
                      <option value="{{$ka->fasilitas}}">{{$ka->fasilitas}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <!-- nama -->
                <div class="form-group row">                        
                  <div class="col-md-12">
                    <label for="nama"> Nama Santri </label>
                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Nama Siswa" required autocomplete="nama" autofocus>
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
                    <label for="jeniskelamin"> Jenis Kelamin  </label>
                    <select id="jeniskelamin" class="form-control" id="jeniskelamin" class="form-control @error('jeniskelamin') is-invalid @enderror" name="jeniskelamin" value="{{ old('jeniskelamin') }}" required autocomplete="jeniskelamin" autofocus>
                      <option selected>-- Jenis Kelamin --</option>
                      <option> Laki-laki </option>
                      <option> Perempuan </option>
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
                    <input id="tempatlahir" type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir" value="{{ old('tempatlahir') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir" autofocus>
                    @error('tempatlahir')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- tanggallahir -->                        
                  <div class="col-md-4">
                    <label for="tanggallahir"> Tanggal Lahir </label>
                    <input id="tanggallahir" type="date" class="form-control @error('tanggallahir') is-invalid @enderror" name="tanggallahir" value="{{ old('tanggallahir') }}" placeholder="Tanggal Lahir" required autocomplete="tanggallahir" autofocus>
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
                    <select class="form-select" name="country" id="country_smk">
                      <option selected>--- Pilih Provinsi ---</option>
                      @foreach ($mst_provinsi as $ka)
                      <option  value="{{$ka->provinsi}}">{{$ka->provinsi}}</option>
                      @endforeach
                    </select>
                  </div>

                  <!-- state -->
                  <div class="col-md-6">
                    <label> Kabupaten </label>
                    <select class="form-select" name="state" id="state_smk">
                      <option selected>--- Kabupaten ---</option>
                    </select>
                  </div>
                </div> 
                
                <!-- kecamatan -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label> Kecamatan </label>
                    <select class="form-select" name="kecamatan" id="kecamatan_smk">
                      <option selected>--- Kecamatan ---</option>
                    </select>
                  </div>

                  <!-- desa -->
                  <div class="col-md-6">
                    <label for="desa"> Dusun/Desa/Kelurahan </label>
                    <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{ old('desa') }}" placeholder="Dusun/Desa/Kelurahan" required autocomplete="desa" autofocus>
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
                    <input id="namaasalsekolah" type="text" class="form-control @error('namaasalsekolah') is-invalid @enderror" name="namaasalsekolah" value="{{ old('namaasalsekolah') }}" placeholder="Nama Asal Sekolah" required autocomplete="namaasalsekolah" autofocus>
                    @error('namaasalsekolah')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- alamatasalsekolah -->                        
                  <div class="col-md-6">
                    <label for="alamatasalsekolah"> Alamat Asal Sekolah </label>
                    <input id="alamatasalsekolah" type="text" class="form-control @error('alamatasalsekolah') is-invalid @enderror" name="alamatasalsekolah" value="{{ old('alamatasalsekolah') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah" autofocus>
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
                    <input id="namaayah" type="text" class="form-control @error('namaayah') is-invalid @enderror" name="namaayah" value="{{ old('namaayah') }}" placeholder="Nama Ayah" required autocomplete="namaayah" autofocus>
                    @error('namaayah')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- pendidikanayah -->                        
                  <div class="col-md-4">
                    <label for="pendidikanayah"> Pendidikan Ayah </label>
                    <select id="pendidikanayah" name="pendidikanayah" class="form-control" class="form-control" value="{{ old('pendidikanayah') }}">
                      @foreach($pendidikan as $ka)
                      <option value="{{$ka->pendidikan}}">{{$ka->pendidikan}}</option>
                      @endforeach
                    </select>
                  </div>
                <!-- pekerjaanayah --> 
                  <div class="col-md-4">
                    <label for="pekerjaanayah"> Pekerjaan Ayah </label>
                    <select id="pekerjaanayah" name="pekerjaanayah" class="form-control" class="form-control" value="{{ old('pekerjaanayah') }}">
                      @foreach($pekerjaan as $ka)
                      <option value="{{$ka->pekerjaan}}">{{$ka->pekerjaan}}</option>
                      @endforeach
                    </select>   
                  </div>
                </div>

                <!-- namaibu -->
                <div class="form-group row">                        
                  <div class="col-md-4">
                    <label for="namaibu"> Nama Ibu </label>
                    <input id="namaibu" type="text" class="form-control @error('namaibu') is-invalid @enderror" name="namaibu" value="{{ old('namaibu') }}" placeholder="Nama Ibu" required autocomplete="namaibu" autofocus>
                    @error('namaibu')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- pendidikanibu -->                        
                  <div class="col-md-4">
                    <label for="pendidikanibu"> Pendidikan Ibu </label>
                    <select id="pendidikanibu" name="pendidikanibu" class="form-control" class="form-control" value="{{ old('pendidikanibu') }}">
                      @foreach($pendidikan as $ka)
                      <option value="{{$ka->pendidikan}}">{{$ka->pendidikan}}</option>
                      @endforeach
                    </select>
                  </div>
                <!-- pekerjaanibu --> 
                  <div class="col-md-4">
                    <label for="pekerjaanibu"> Pekerjaan Ibu </label>
                    <select id="pekerjaanibu" name="pekerjaanibu" class="form-control" class="form-control" value="{{ old('pekerjaanibu') }}">
                      @foreach($pekerjaan as $ka)
                      <option value="{{$ka->pekerjaan}}">{{$ka->pekerjaan}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <!-- nohp -->
                <div class="form-group row">                        
                  <div class="col-md-12">
                    <label for="nohp"> Nomor WA (+62) </label>
                    <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="+62" placeholder="Nomor HP" required autocomplete="nohp" autofocus>
                    @error('nohp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>    
                </div>               

                <!-- email -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label> <b> Email </b> (namasantri@gmail.com) (tanpa spasi) </label>
                    <input id="email" type="email" class="form-control" name="email" value="@gmail.com" required autocomplete="password" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- password -->
                  <div class="col-md-6">
                    <label> <b>  Password </b>  </label>
                    <input readonly id="password" type="text" class="form-control" name="password" value="santriaska" required autocomplete="password" autofocus>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <!-- __________________________________________________________________________________ -->
                <!-- Tombol -->    
                <div class="form-group row">                    
                  <div class="col-md-12">
                    <br>
                    <button type="submit" class="btn btn-primary btn-sm">
                      Simpan
                    </button>
                    <button type="button" class="btn btn-secondary btn-sm float-right" data-dismiss="modal">Close</button>
                  </div>
                </form>  
              </div>
              <!-- EndFormulir __________________________________________________________________________________________ -->
            </div>
          </div>
        </div>
        <!-- EndModal ------------------------------------------------- -->
      </div>

      <!-- Modal MA -->
      <div class="modal fade bd-example-modal-lg" id="ma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pendaftaran <b>MA</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Formulir ______________________________________________________________________________________________ -->
            <div class="modal-body">

              <form action="{{url('daftar/createdaftar')}}" method="POST" enctype="multipart/form-data" >
                {{csrf_field()}}
                <!-- __________________________________________________________________________________ -->

                <!-- jalurpendaftaran -->
                    <input type="hidden" id="jalurpendaftaran"  class="form-control" name="jalurpendaftaran" value="Offline"  >
                <!-- bulanpendaftaran -->
                    <input type="hidden" name="bulanpendaftaran" id="bulanpendaftaran" value="<?php echo date("F"); ?>">
                <!-- tahunpendaftaran -->
                    <input type="hidden" name="tahunpendaftaran" id="tahunpendaftaran" value="<?php echo date("Y"); ?>">
                <!-- waktu -->
                    <input type="hidden" name="waktu" id="waktu" value="<?php echo date("d-m-Y"); ?>">

                <!-- jenjang -->
                <div class="form-group row">
                  <div class="col-md-4">
                    <label for="jenjang"> Jenjang </label>
                    <select id="jenjang" name="jenjang" class="form-control" value="{{ old('jenjang') }}">
                      <option value="MA">MA</option>
                    </select>
                  </div>
                  <!-- fasilitas -->
                  <div class="col-md-4">
                    <label for="fasilitas"> Fasilitas </label>
                    <select id="fasilitas" name="fasilitas" class="form-control" class="form-control" value="{{ old('fasilitas') }}">
                      @foreach($fasilitas as $ka)
                      <option value="{{$ka->fasilitas}}">{{$ka->fasilitas}}</option>
                      @endforeach
                    </select>
                  </div>
                  <!-- alumni -->
                  <div class="col-md-4">
                    <label for="alumni"> Alumni  </label>
                    <select id="alumni" class="form-control" class="form-control" name="alumni" value="{{ old('alumni') }}">
                      <option selected>-- Pilih --</option>
                      <option> Alumni Aska </option>
                      <option> Non Alumni Aska </option>
                    </select>
                  </div>                   
                </div>

                <!-- nama -->
                <div class="form-group row">                        
                  <div class="col-md-12">
                    <label for="nama"> Nama Santri </label>
                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Nama Siswa" required autocomplete="nama" autofocus>
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
                    <label for="jeniskelamin"> Jenis Kelamin  </label>
                    <select id="jeniskelamin" class="form-control" id="jeniskelamin" class="form-control @error('jeniskelamin') is-invalid @enderror" name="jeniskelamin" value="{{ old('jeniskelamin') }}" required autocomplete="jeniskelamin" autofocus>
                      <option selected>-- Jenis Kelamin --</option>
                      <option> Laki-laki </option>
                      <option> Perempuan </option>
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
                    <input id="tempatlahir" type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir" value="{{ old('tempatlahir') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir" autofocus>
                    @error('tempatlahir')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- tanggallahir -->                        
                  <div class="col-md-4">
                    <label for="tanggallahir"> Tanggal Lahir </label>
                    <input id="tanggallahir" type="date" class="form-control @error('tanggallahir') is-invalid @enderror" name="tanggallahir" value="{{ old('tanggallahir') }}" placeholder="Tanggal Lahir" required autocomplete="tanggallahir" autofocus>
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
                    <select class="form-select" name="country" id="country_ma">
                      <option selected>--- Pilih Provinsi ---</option>
                      @foreach ($mst_provinsi as $ka)
                      <option  value="{{$ka->provinsi}}">{{$ka->provinsi}}</option>
                      @endforeach
                    </select>
                  </div>

                  <!-- state -->
                  <div class="col-md-6">
                    <label> Kabupaten </label>
                    <select class="form-select" name="state" id="state_ma">
                      <option selected>--- Kabupaten ---</option>
                    </select>
                  </div>
                </div> 
                
                <!-- kecamatan -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label> Kecamatan </label>
                    <select class="form-select" name="kecamatan" id="kecamatan_ma">
                      <option selected>--- Kecamatan ---</option>
                    </select>
                  </div>

                  <!-- desa -->
                  <div class="col-md-6">
                    <label for="desa"> Dusun/Desa/Kelurahan </label>
                    <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{ old('desa') }}" placeholder="Dusun/Desa/Kelurahan" required autocomplete="desa" autofocus>
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
                    <input id="namaasalsekolah" type="text" class="form-control @error('namaasalsekolah') is-invalid @enderror" name="namaasalsekolah" value="{{ old('namaasalsekolah') }}" placeholder="Nama Asal Sekolah" required autocomplete="namaasalsekolah" autofocus>
                    @error('namaasalsekolah')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- alamatasalsekolah -->                        
                  <div class="col-md-6">
                    <label for="alamatasalsekolah"> Alamat Asal Sekolah </label>
                    <input id="alamatasalsekolah" type="text" class="form-control @error('alamatasalsekolah') is-invalid @enderror" name="alamatasalsekolah" value="{{ old('alamatasalsekolah') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah" autofocus>
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
                    <input id="namaayah" type="text" class="form-control @error('namaayah') is-invalid @enderror" name="namaayah" value="{{ old('namaayah') }}" placeholder="Nama Ayah" required autocomplete="namaayah" autofocus>
                    @error('namaayah')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- pendidikanayah -->                        
                  <div class="col-md-4">
                    <label for="pendidikanayah"> Pendidikan Ayah </label>
                    <select id="pendidikanayah" name="pendidikanayah" class="form-control" class="form-control" value="{{ old('pendidikanayah') }}">
                      @foreach($pendidikan as $ka)
                      <option value="{{$ka->pendidikan}}">{{$ka->pendidikan}}</option>
                      @endforeach
                    </select>
                  </div>
                <!-- pekerjaanayah --> 
                  <div class="col-md-4">
                    <label for="pekerjaanayah"> Pekerjaan Ayah </label>
                    <select id="pekerjaanayah" name="pekerjaanayah" class="form-control" class="form-control" value="{{ old('pekerjaanayah') }}">
                      @foreach($pekerjaan as $ka)
                      <option value="{{$ka->pekerjaan}}">{{$ka->pekerjaan}}</option>
                      @endforeach
                    </select>   
                  </div>
                </div>

                <!-- namaibu -->
                <div class="form-group row">                        
                  <div class="col-md-4">
                    <label for="namaibu"> Nama Ibu </label>
                    <input id="namaibu" type="text" class="form-control @error('namaibu') is-invalid @enderror" name="namaibu" value="{{ old('namaibu') }}" placeholder="Nama Ibu" required autocomplete="namaibu" autofocus>
                    @error('namaibu')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- pendidikanibu -->                        
                  <div class="col-md-4">
                    <label for="pendidikanibu"> Pendidikan Ibu </label>
                    <select id="pendidikanibu" name="pendidikanibu" class="form-control" class="form-control" value="{{ old('pendidikanibu') }}">
                      @foreach($pendidikan as $ka)
                      <option value="{{$ka->pendidikan}}">{{$ka->pendidikan}}</option>
                      @endforeach
                    </select>
                  </div>
                <!-- pekerjaanibu --> 
                  <div class="col-md-4">
                    <label for="pekerjaanibu"> Pekerjaan Ibu </label>
                    <select id="pekerjaanibu" name="pekerjaanibu" class="form-control" class="form-control" value="{{ old('pekerjaanibu') }}">
                      @foreach($pekerjaan as $ka)
                      <option value="{{$ka->pekerjaan}}">{{$ka->pekerjaan}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <!-- nohp -->
                <div class="form-group row">                        
                  <div class="col-md-12">
                    <label for="nohp"> Nomor WA (+62) </label>
                    <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="+62" placeholder="Nomor HP" required autocomplete="nohp" autofocus>
                    @error('nohp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>    
                </div>               

                <!-- email -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label> <b> Email </b> (namasantri@gmail.com) (tanpa spasi) </label>
                    <input id="email" type="email" class="form-control" name="email" value="@gmail.com" required autocomplete="password" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- password -->
                  <div class="col-md-6">
                    <label> <b>  Password </b>  </label>
                    <input readonly id="password" type="text" class="form-control" name="password" value="santriaska" required autocomplete="password" autofocus>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <!-- __________________________________________________________________________________ -->
                <!-- Tombol -->    
                <div class="form-group row">                    
                  <div class="col-md-12">
                    <br>
                    <button type="submit" class="btn btn-primary btn-sm">
                      Simpan
                    </button>
                    <button type="button" class="btn btn-secondary btn-sm float-right" data-dismiss="modal">Close</button>
                  </div>
                </form>  
              </div>
              <!-- EndFormulir __________________________________________________________________________________________ -->
            </div>
          </div>
        </div>
        <!-- EndModal ------------------------------------------------- -->
      </div>

      <!-- Modal SMP 2 -->
      <div class="modal fade bd-example-modal-lg" id="smp2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pendaftaran <b>SMP 2</b> </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Formulir ______________________________________________________________________________________________ -->
            <div class="modal-body">

              <form action="{{url('daftar/createdaftar')}}" method="POST" enctype="multipart/form-data" >
                {{csrf_field()}}
                <!-- __________________________________________________________________________________ -->

                <!-- jalurpendaftaran -->
                    <input type="hidden" id="jalurpendaftaran"  class="form-control" name="jalurpendaftaran" value="Offline"  >
                <!-- bulanpendaftaran -->
                    <input type="hidden" name="bulanpendaftaran" id="bulanpendaftaran" value="<?php echo date("F"); ?>">
                <!-- tahunpendaftaran -->
                    <input type="hidden" name="tahunpendaftaran" id="tahunpendaftaran" value="<?php echo date("Y"); ?>">
                <!-- waktu -->
                    <input type="hidden" name="waktu" id="waktu" value="<?php echo date("d-m-Y"); ?>">

                <!-- jenjang -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="jenjang"> Jenjang </label>
                    <select id="jenjang" name="jenjang" class="form-control" value="{{ old('jenjang') }}">
                      <option value="SMP 2">SMP 2</option>
                    </select>
                  </div>
                  <!-- jenjang -->
                  <div class="col-md-6">
                    <label for="fasilitas"> Fasilitas </label>
                    <select id="fasilitas" name="fasilitas" class="form-control" class="form-control" value="{{ old('fasilitas') }}">
                      @foreach($fasilitas as $ka)
                      <option value="{{$ka->fasilitas}}">{{$ka->fasilitas}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <!-- nama -->
                <div class="form-group row">                        
                  <div class="col-md-12">
                    <label for="nama"> Nama Santri </label>
                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Nama Siswa" required autocomplete="nama" autofocus>
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
                    <label for="jeniskelamin"> Jenis Kelamin  </label>
                    <select id="jeniskelamin" class="form-control" id="jeniskelamin" class="form-control @error('jeniskelamin') is-invalid @enderror" name="jeniskelamin" value="{{ old('jeniskelamin') }}" required autocomplete="jeniskelamin" autofocus>
                      <option selected>-- Jenis Kelamin --</option>
                      <option> Laki-laki </option>
                      <option> Perempuan </option>
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
                    <input id="tempatlahir" type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir" value="{{ old('tempatlahir') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir" autofocus>
                    @error('tempatlahir')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- tanggallahir -->                        
                  <div class="col-md-4">
                    <label for="tanggallahir"> Tanggal Lahir </label>
                    <input id="tanggallahir" type="date" class="form-control @error('tanggallahir') is-invalid @enderror" name="tanggallahir" value="{{ old('tanggallahir') }}" placeholder="Tanggal Lahir" required autocomplete="tanggallahir" autofocus>
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
                    <select class="form-select" name="country" id="country_smp2">
                      <option selected>--- Pilih Provinsi ---</option>
                      @foreach ($mst_provinsi as $ka)
                      <option  value="{{$ka->provinsi}}">{{$ka->provinsi}}</option>
                      @endforeach
                    </select>
                  </div>

                  <!-- state -->
                  <div class="col-md-6">
                    <label> Kabupaten </label>
                    <select class="form-select" name="state" id="state_smp2">
                      <option selected>--- Kabupaten ---</option>
                    </select>
                  </div>
                </div> 
                
                <!-- kecamatan -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label> Kecamatan </label>
                    <select class="form-select" name="kecamatan" id="kecamatan_smp2">
                      <option selected>--- Kecamatan ---</option>
                    </select>
                  </div>

                  <!-- desa -->
                  <div class="col-md-6">
                    <label for="desa"> Dusun/Desa/Kelurahan </label>
                    <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{ old('desa') }}" placeholder="Dusun/Desa/Kelurahan" required autocomplete="desa" autofocus>
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
                    <input id="namaasalsekolah" type="text" class="form-control @error('namaasalsekolah') is-invalid @enderror" name="namaasalsekolah" value="{{ old('namaasalsekolah') }}" placeholder="Nama Asal Sekolah" required autocomplete="namaasalsekolah" autofocus>
                    @error('namaasalsekolah')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- alamatasalsekolah -->                        
                  <div class="col-md-6">
                    <label for="alamatasalsekolah"> Alamat Asal Sekolah </label>
                    <input id="alamatasalsekolah" type="text" class="form-control @error('alamatasalsekolah') is-invalid @enderror" name="alamatasalsekolah" value="{{ old('alamatasalsekolah') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah" autofocus>
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
                    <input id="namaayah" type="text" class="form-control @error('namaayah') is-invalid @enderror" name="namaayah" value="{{ old('namaayah') }}" placeholder="Nama Ayah" required autocomplete="namaayah" autofocus>
                    @error('namaayah')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- pendidikanayah -->                        
                  <div class="col-md-4">
                    <label for="pendidikanayah"> Pendidikan Ayah </label>
                    <select id="pendidikanayah" name="pendidikanayah" class="form-control" class="form-control" value="{{ old('pendidikanayah') }}">
                      @foreach($pendidikan as $ka)
                      <option value="{{$ka->pendidikan}}">{{$ka->pendidikan}}</option>
                      @endforeach
                    </select>
                  </div>
                <!-- pekerjaanayah --> 
                  <div class="col-md-4">
                    <label for="pekerjaanayah"> Pekerjaan Ayah </label>
                    <select id="pekerjaanayah" name="pekerjaanayah" class="form-control" class="form-control" value="{{ old('pekerjaanayah') }}">
                      @foreach($pekerjaan as $ka)
                      <option value="{{$ka->pekerjaan}}">{{$ka->pekerjaan}}</option>
                      @endforeach
                    </select>   
                  </div>
                </div>

                <!-- namaibu -->
                <div class="form-group row">                        
                  <div class="col-md-4">
                    <label for="namaibu"> Nama Ibu </label>
                    <input id="namaibu" type="text" class="form-control @error('namaibu') is-invalid @enderror" name="namaibu" value="{{ old('namaibu') }}" placeholder="Nama Ibu" required autocomplete="namaibu" autofocus>
                    @error('namaibu')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- pendidikanibu -->                        
                  <div class="col-md-4">
                    <label for="pendidikanibu"> Pendidikan Ibu </label>
                    <select id="pendidikanibu" name="pendidikanibu" class="form-control" class="form-control" value="{{ old('pendidikanibu') }}">
                      @foreach($pendidikan as $ka)
                      <option value="{{$ka->pendidikan}}">{{$ka->pendidikan}}</option>
                      @endforeach
                    </select>
                  </div>
                <!-- pekerjaanibu --> 
                  <div class="col-md-4">
                    <label for="pekerjaanibu"> Pekerjaan Ibu </label>
                    <select id="pekerjaanibu" name="pekerjaanibu" class="form-control" class="form-control" value="{{ old('pekerjaanibu') }}">
                      @foreach($pekerjaan as $ka)
                      <option value="{{$ka->pekerjaan}}">{{$ka->pekerjaan}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <!-- nohp -->
                <div class="form-group row">                        
                  <div class="col-md-12">
                    <label for="nohp"> Nomor WA (+62) </label>
                    <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="+62" placeholder="Nomor HP" required autocomplete="nohp" autofocus>
                    @error('nohp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>    
                </div>               

                <!-- email -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label> <b> Email </b> (namasantri@gmail.com) (tanpa spasi) </label>
                    <input id="email" type="email" class="form-control" name="email" value="@gmail.com" required autocomplete="password" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- password -->
                  <div class="col-md-6">
                    <label> <b>  Password </b>  </label>
                    <input readonly id="password" type="text" class="form-control" name="password" value="santriaska" required autocomplete="password" autofocus>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <!-- __________________________________________________________________________________ -->
                <!-- Tombol -->    
                <div class="form-group row">                    
                  <div class="col-md-12">
                    <br>
                    <button type="submit" class="btn btn-primary btn-sm">
                      Simpan
                    </button>
                    <button type="button" class="btn btn-secondary btn-sm float-right" data-dismiss="modal">Close</button>
                  </div>
                </form>  
              </div>
              <!-- EndFormulir __________________________________________________________________________________________ -->
            </div>
          </div>
        </div>
        <!-- EndModal ------------------------------------------------- -->
      </div>
<!-- ________________________________________________________________________________ -->

      <!-- Modal Mahad Aly -->
      <div class="modal fade bd-example-modal-lg" id="mahadaly" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pendaftaran <b>Mahad Aly</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Formulir ______________________________________________________________________________________________ -->
            <div class="modal-body">

              <form action="{{url('daftar/createdaftar')}}" method="POST" enctype="multipart/form-data" >
                {{csrf_field()}}
                <!-- __________________________________________________________________________________ -->

                <!-- jalurpendaftaran -->
                    <input type="hidden" id="jalurpendaftaran"  class="form-control" name="jalurpendaftaran" value="Offline"  >
                <!-- bulanpendaftaran -->
                    <input type="hidden" name="bulanpendaftaran" id="bulanpendaftaran" value="<?php echo date("F"); ?>">
                <!-- tahunpendaftaran -->
                    <input type="hidden" name="tahunpendaftaran" id="tahunpendaftaran" value="<?php echo date("Y"); ?>">
                <!-- waktu -->
                    <input type="hidden" name="waktu" id="waktu" value="<?php echo date("d-m-Y"); ?>">

                <!-- jenjang -->
                <div class="form-group row">
                  <div class="col-md-4">
                    <label for="jenjang"> Jenjang </label>
                    <select id="jenjang" name="jenjang" class="form-control" value="{{ old('jenjang') }}">
                      <option value="Mahad Aly">Mahad Aly</option>
                    </select>
                  </div>
                  <!-- fasilitas -->
                  <div class="col-md-4">
                    <label for="fasilitas"> Fasilitas </label>
                    <select id="fasilitas" name="fasilitas" class="form-control" class="form-control" value="{{ old('fasilitas') }}">
                      @foreach($fasilitas as $ka)
                      <option value="{{$ka->fasilitas}}">{{$ka->fasilitas}}</option>
                      @endforeach
                    </select>
                  </div>
                  <!-- alumni -->
                  <div class="col-md-4">
                    <label for="alumni"> Alumni  </label>
                    <select id="alumni" class="form-control" class="form-control" name="alumni" value="{{ old('alumni') }}">
                      <option selected>-- Pilih --</option>
                      <option> Alumni Aska </option>
                      <option> Non Alumni Aska </option>
                    </select>
                  </div>                   
                </div>

                <!-- nama -->
                <div class="form-group row">                        
                  <div class="col-md-12">
                    <label for="nama"> Nama Santri </label>
                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Nama Siswa" required autocomplete="nama" autofocus>
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
                    <label for="jeniskelamin"> Jenis Kelamin  </label>
                    <select id="jeniskelamin" class="form-control" id="jeniskelamin" class="form-control @error('jeniskelamin') is-invalid @enderror" name="jeniskelamin" value="{{ old('jeniskelamin') }}" required autocomplete="jeniskelamin" autofocus>
                      <option selected>-- Jenis Kelamin --</option>
                      <option> Laki-laki </option>
                      <option> Perempuan </option>
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
                    <input id="tempatlahir" type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir" value="{{ old('tempatlahir') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir" autofocus>
                    @error('tempatlahir')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- tanggallahir -->                        
                  <div class="col-md-4">
                    <label for="tanggallahir"> Tanggal Lahir </label>
                    <input id="tanggallahir" type="date" class="form-control @error('tanggallahir') is-invalid @enderror" name="tanggallahir" value="{{ old('tanggallahir') }}" placeholder="Tanggal Lahir" required autocomplete="tanggallahir" autofocus>
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
                    <select class="form-select" name="country" id="country_mahadaly">
                      <option selected>--- Pilih Provinsi ---</option>
                      @foreach ($mst_provinsi as $ka)
                      <option  value="{{$ka->provinsi}}">{{$ka->provinsi}}</option>
                      @endforeach
                    </select>
                  </div>

                  <!-- state -->
                  <div class="col-md-6">
                    <label> Kabupaten </label>
                    <select class="form-select" name="state" id="state_mahadaly">
                      <option selected>--- Kabupaten ---</option>
                    </select>
                  </div>
                </div> 
                
                <!-- kecamatan -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label> Kecamatan </label>
                    <select class="form-select" name="kecamatan" id="kecamatan_mahadaly">
                      <option selected>--- Kecamatan ---</option>
                    </select>
                  </div>

                  <!-- desa -->
                  <div class="col-md-6">
                    <label for="desa"> Dusun/Desa/Kelurahan </label>
                    <input id="desa" type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{ old('desa') }}" placeholder="Dusun/Desa/Kelurahan" required autocomplete="desa" autofocus>
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
                    <input id="namaasalsekolah" type="text" class="form-control @error('namaasalsekolah') is-invalid @enderror" name="namaasalsekolah" value="{{ old('namaasalsekolah') }}" placeholder="Nama Asal Sekolah" required autocomplete="namaasalsekolah" autofocus>
                    @error('namaasalsekolah')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- alamatasalsekolah -->                        
                  <div class="col-md-6">
                    <label for="alamatasalsekolah"> Alamat Asal Sekolah </label>
                    <input id="alamatasalsekolah" type="text" class="form-control @error('alamatasalsekolah') is-invalid @enderror" name="alamatasalsekolah" value="{{ old('alamatasalsekolah') }}" placeholder="Alamat Asal Sekolah" required autocomplete="alamatasalsekolah" autofocus>
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
                    <input id="namaayah" type="text" class="form-control @error('namaayah') is-invalid @enderror" name="namaayah" value="{{ old('namaayah') }}" placeholder="Nama Ayah" required autocomplete="namaayah" autofocus>
                    @error('namaayah')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- pendidikanayah -->                        
                  <div class="col-md-4">
                    <label for="pendidikanayah"> Pendidikan Ayah </label>
                    <select id="pendidikanayah" name="pendidikanayah" class="form-control" class="form-control" value="{{ old('pendidikanayah') }}">
                      @foreach($pendidikan as $ka)
                      <option value="{{$ka->pendidikan}}">{{$ka->pendidikan}}</option>
                      @endforeach
                    </select>
                  </div>
                <!-- pekerjaanayah --> 
                  <div class="col-md-4">
                    <label for="pekerjaanayah"> Pekerjaan Ayah </label>
                    <select id="pekerjaanayah" name="pekerjaanayah" class="form-control" class="form-control" value="{{ old('pekerjaanayah') }}">
                      @foreach($pekerjaan as $ka)
                      <option value="{{$ka->pekerjaan}}">{{$ka->pekerjaan}}</option>
                      @endforeach
                    </select>   
                  </div>
                </div>

                <!-- namaibu -->
                <div class="form-group row">                        
                  <div class="col-md-4">
                    <label for="namaibu"> Nama Ibu </label>
                    <input id="namaibu" type="text" class="form-control @error('namaibu') is-invalid @enderror" name="namaibu" value="{{ old('namaibu') }}" placeholder="Nama Ibu" required autocomplete="namaibu" autofocus>
                    @error('namaibu')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- pendidikanibu -->                        
                  <div class="col-md-4">
                    <label for="pendidikanibu"> Pendidikan Ibu </label>
                    <select id="pendidikanibu" name="pendidikanibu" class="form-control" class="form-control" value="{{ old('pendidikanibu') }}">
                      @foreach($pendidikan as $ka)
                      <option value="{{$ka->pendidikan}}">{{$ka->pendidikan}}</option>
                      @endforeach
                    </select>
                  </div>
                <!-- pekerjaanibu --> 
                  <div class="col-md-4">
                    <label for="pekerjaanibu"> Pekerjaan Ibu </label>
                    <select id="pekerjaanibu" name="pekerjaanibu" class="form-control" class="form-control" value="{{ old('pekerjaanibu') }}">
                      @foreach($pekerjaan as $ka)
                      <option value="{{$ka->pekerjaan}}">{{$ka->pekerjaan}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <!-- nohp -->
                <div class="form-group row">                        
                  <div class="col-md-12">
                    <label for="nohp"> Nomor WA (+62) </label>
                    <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="+62" placeholder="Nomor HP" required autocomplete="nohp" autofocus>
                    @error('nohp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>    
                </div>               

                <!-- email -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <label> <b> Email </b> (namasantri@gmail.com) (tanpa spasi) </label>
                    <input id="email" type="email" class="form-control" name="email" value="@gmail.com" required autocomplete="password" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- password -->
                  <div class="col-md-6">
                    <label> <b>  Password </b>  </label>
                    <input readonly id="password" type="text" class="form-control" name="password" value="santriaska" required autocomplete="password" autofocus>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <!-- __________________________________________________________________________________ -->
                <!-- Tombol -->    
                <div class="form-group row">                    
                  <div class="col-md-12">
                    <br>
                    <button type="submit" class="btn btn-primary btn-sm">
                      Simpan
                    </button>
                    <button type="button" class="btn btn-secondary btn-sm float-right" data-dismiss="modal">Close</button>
                  </div>
                </form>  
              </div>
              <!-- EndFormulir __________________________________________________________________________________________ -->
            </div>
          </div>
        </div>
        <!-- EndModal ------------------------------------------------- -->
      </div>
      
<!-- ________________________________________________________________________________ -->
<!-- ________________________________________________________________________________ -->

    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>ppaska.id</b>
      </div>
      <strong>Aplikasi Data Santri <a href="https://ppaska.id/" target="_blank"> Pondok Pesantren Askhabul Kahfi</a></strong> Semarang.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- ChartJS -->
  <script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('adminlte/plugins/sparklines/sparkline.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{asset('adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{asset('adminlte/plugins/moment/moment.min.js')}}"></script>
  <script src="{{asset('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script src="{{asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('adminlte/dist/js/pages/dashboard.js')}}"></script>

  <!-- DataTables  & Plugins -->
  <script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('adminlte/plugins/jszip/jszip.min.js')}}"></script>
  <script src="{{asset('adminlte/plugins/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{asset('adminlte/plugins/pdfmake/vfs_fonts.js')}}"></script>
  <script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

  <!-- Page specific script -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>


<!-- ________________dropdown__________________________________ -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- _________ SMP1 ____________ -->
<script>
    $('#country_smp1').change(function(){
    var kabID = $(this).val();    
    if(kabID){
        $.ajax({
           type:"GET",
        //   url:"/getMsKabupaten?kabID="+kabID,
           url:"{{url("")}}/getMsKabupaten?kabID="+kabID,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#state_smp1").empty();
                $("#kecamatan_smp1").empty();
                $("#state_smp1").append('<option>--- Pilih Kabupaten ---</option>');
                $("#kecamatan_smp1").append('<option>--- Kecamatan ---</option>');
                $.each(res,function(nama,kode){
                    $("#state_smp1").append('<option value="'+kode+'">'+kode+'</option>');
                });
            }else{
               $("#state_smp1").empty();
               $("#kecamatan_smp1").empty();
            }
           }
        });
    }else{
        $("#state_smp1").empty();
        $("#kecamatan_smp1").empty();
    }      
   });
    $('#state_smp1').change(function(){
    var kecID = $(this).val();    
    if(kecID){
        $.ajax({
           type:"GET",
           url:"{{url("")}}/getMsKecamatan?kecID="+kecID,
        //   url:"/getMsKecamatan?kecID="+kecID,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#kecamatan_smp1").empty();
                $("#kecamatan_smp1").append('<option>--- Pilih Kecamatan ---</option>');
                $.each(res,function(nama,kode){
                    $("#kecamatan_smp1").append('<option value="'+kode+'">'+kode+'</option>');
                });
            }else{
               $("#kecamatan_smp1").empty();
            }
           }
        });
    }else{
        $("#kecamatan_smp1").empty();
    }      
   });
</script>

<!-- _________ MTs ____________ -->
<script>
    $('#country_mts').change(function(){
    var kabID = $(this).val();    
    if(kabID){
        $.ajax({
           type:"GET",
        //   url:"/getMsKabupaten?kabID="+kabID,
           url:"{{url("")}}/getMsKabupaten?kabID="+kabID,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#state_mts").empty();
                $("#kecamatan_mts").empty();
                $("#state_mts").append('<option>--- Pilih Kabupaten ---</option>');
                $("#kecamatan_mts").append('<option>--- Kecamatan ---</option>');
                $.each(res,function(nama,kode){
                    $("#state_mts").append('<option value="'+kode+'">'+kode+'</option>');
                });
            }else{
               $("#state_mts").empty();
               $("#kecamatan_mts").empty();
            }
           }
        });
    }else{
        $("#state_mts").empty();
        $("#kecamatan_mts").empty();
    }      
   });
    $('#state_mts').change(function(){
    var kecID = $(this).val();    
    if(kecID){
        $.ajax({
           type:"GET",
           url:"{{url("")}}/getMsKecamatan?kecID="+kecID,
        //   url:"/getMsKecamatan?kecID="+kecID,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#kecamatan_mts").empty();
                $("#kecamatan_mts").append('<option>--- Pilih Kecamatan ---</option>');
                $.each(res,function(nama,kode){
                    $("#kecamatan_mts").append('<option value="'+kode+'">'+kode+'</option>');
                });
            }else{
               $("#kecamatan_mts").empty();
            }
           }
        });
    }else{
        $("#kecamatan_mts").empty();
    }      
   });
</script>

<!-- _________ SMK ____________ -->
<script>
    $('#country_smk').change(function(){
    var kabID = $(this).val();    
    if(kabID){
        $.ajax({
           type:"GET",
        //   url:"/getMsKabupaten?kabID="+kabID,
           url:"{{url("")}}/getMsKabupaten?kabID="+kabID,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#state_smk").empty();
                $("#kecamatan_smk").empty();
                $("#state_smk").append('<option>--- Pilih Kabupaten ---</option>');
                $("#kecamatan_smk").append('<option>--- Kecamatan ---</option>');
                $.each(res,function(nama,kode){
                    $("#state_smk").append('<option value="'+kode+'">'+kode+'</option>');
                });
            }else{
               $("#state_smk").empty();
               $("#kecamatan_smk").empty();
            }
           }
        });
    }else{
        $("#state_smk").empty();
        $("#kecamatan_smk").empty();
    }      
   });
    $('#state_smk').change(function(){
    var kecID = $(this).val();    
    if(kecID){
        $.ajax({
           type:"GET",
           url:"{{url("")}}/getMsKecamatan?kecID="+kecID,
        //   url:"/getMsKecamatan?kecID="+kecID,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#kecamatan_smk").empty();
                $("#kecamatan_smk").append('<option>--- Pilih Kecamatan ---</option>');
                $.each(res,function(nama,kode){
                    $("#kecamatan_smk").append('<option value="'+kode+'">'+kode+'</option>');
                });
            }else{
               $("#kecamatan_smk").empty();
            }
           }
        });
    }else{
        $("#kecamatan_smk").empty();
    }      
   });
</script>

<!-- _________ MA ____________ -->
<script>
    $('#country_ma').change(function(){
    var kabID = $(this).val();    
    if(kabID){
        $.ajax({
           type:"GET",
        //   url:"/getMsKabupaten?kabID="+kabID,
           url:"{{url("")}}/getMsKabupaten?kabID="+kabID,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#state_ma").empty();
                $("#kecamatan_ma").empty();
                $("#state_ma").append('<option>--- Pilih Kabupaten ---</option>');
                $("#kecamatan_ma").append('<option>--- Kecamatan ---</option>');
                $.each(res,function(nama,kode){
                    $("#state_ma").append('<option value="'+kode+'">'+kode+'</option>');
                });
            }else{
               $("#state_ma").empty();
               $("#kecamatan_ma").empty();
            }
           }
        });
    }else{
        $("#state_ma").empty();
        $("#kecamatan_ma").empty();
    }      
   });
    $('#state_ma').change(function(){
    var kecID = $(this).val();    
    if(kecID){
        $.ajax({
           type:"GET",
           url:"{{url("")}}/getMsKecamatan?kecID="+kecID,
        //   url:"/getMsKecamatan?kecID="+kecID,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#kecamatan_ma").empty();
                $("#kecamatan_ma").append('<option>--- Pilih Kecamatan ---</option>');
                $.each(res,function(nama,kode){
                    $("#kecamatan_ma").append('<option value="'+kode+'">'+kode+'</option>');
                });
            }else{
               $("#kecamatan_ma").empty();
            }
           }
        });
    }else{
        $("#kecamatan_ma").empty();
    }      
   });
</script>

<!-- _________ SMP2 ____________ -->
<script>
    $('#country_smp2').change(function(){
    var kabID = $(this).val();    
    if(kabID){
        $.ajax({
           type:"GET",
        //   url:"/getMsKabupaten?kabID="+kabID,
           url:"{{url("")}}/getMsKabupaten?kabID="+kabID,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#state_smp2").empty();
                $("#kecamatan_smp2").empty();
                $("#state_smp2").append('<option>--- Pilih Kabupaten ---</option>');
                $("#kecamatan_smp2").append('<option>--- Kecamatan ---</option>');
                $.each(res,function(nama,kode){
                    $("#state_smp2").append('<option value="'+kode+'">'+kode+'</option>');
                });
            }else{
               $("#state_smp2").empty();
               $("#kecamatan_smp2").empty();
            }
           }
        });
    }else{
        $("#state_smp2").empty();
        $("#kecamatan_smp2").empty();
    }      
   });
    $('#state_smp2').change(function(){
    var kecID = $(this).val();    
    if(kecID){
        $.ajax({
           type:"GET",
           url:"{{url("")}}/getMsKecamatan?kecID="+kecID,
        //   url:"/getMsKecamatan?kecID="+kecID,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#kecamatan_smp2").empty();
                $("#kecamatan_smp2").append('<option>--- Pilih Kecamatan ---</option>');
                $.each(res,function(nama,kode){
                    $("#kecamatan_smp2").append('<option value="'+kode+'">'+kode+'</option>');
                });
            }else{
               $("#kecamatan_smp2").empty();
            }
           }
        });
    }else{
        $("#kecamatan_smp2").empty();
    }      
   });
</script>

<!-- ____________  Mahad Aly __________________ -->
<script>
  $('#country_mahadaly').change(function(){
    var kabID = $(this).val();    
    if(kabID){
        $.ajax({
           type:"GET",
           // url:"/getMsKabupaten?kabID="+kabID,
           url:"{{url("")}}/getMsKabupaten?kabID="+kabID,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#state_mahadaly").empty();
                $("#kecamatan_mahadaly").empty();
                $("#state_mahadaly").append('<option>--- Pilih Kabupaten ---</option>');
                $("#kecamatan_mahadaly").append('<option>--- Kecamatan ---</option>');
                $.each(res,function(nama,kode){
                    $("#state_mahadaly").append('<option value="'+kode+'">'+kode+'</option>');
                });
            }else{
               $("#state_mahadaly").empty();
               $("#kecamatan_mahadaly").empty();
            }
           }
        });
    }else{
        $("#state_mahadaly").empty();
        $("#kecamatan_mahadaly").empty();
    }      
   });
 
   $('#state_mahadaly').change(function(){
    var kecID = $(this).val();    
    if(kecID){
        $.ajax({
           type:"GET",
           // url:"/getMsKecamatan?kecID="+kecID,
           url:"{{url("")}}/getMsKecamatan?kecID="+kecID,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#kecamatan_mahadaly").empty();
                $("#kecamatan_mahadaly").append('<option>--- Pilih Kecamatan ---</option>');
                $.each(res,function(nama,kode){
                    $("#kecamatan_mahadaly").append('<option value="'+kode+'">'+kode+'</option>');
                });
            }else{
               $("#kecamatan_mahadaly").empty();
            }
           }
        });
    }else{
        $("#kecamatan_mahadaly").empty();
    }      
   });
</script>
<!-- _____________________________________ -->

<!-- _________ Prodi ____________ -->
<script>
    //get Kelas Prodi
  $('#jenjang').change(function(){
      var kabID = $(this).val();    
      if(kabID){
          $.ajax({
             type:"GET",
             // url:"{{url('getPelanggaranBentuk')}}?kabID="+kabID,
             url:"{{url("")}}/getProdi?kabID="+kabID,
            //  url:"/getProdi?kabID="+kabID,
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

<!-- __________________________________________________ -->

</body>
</html>
