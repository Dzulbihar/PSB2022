
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Data Santri - Pondok Pesantren Askhabul Kahfi</title>
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

<!-- <body class="hold-transition sidebar-mini"> -->
<!-- <body class="hold-transition sidebar-mini sidebar-collapse"> -->
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
  <div class="wrapper">

      <!-- ________________Navbar_______________________________________ -->  
      @include('layouts.navbar')
      <!-- ____________________________________________________________________ --> 
      <!-- ________________Sidebar______________________________________________ -->
      @include('layouts.sidebar')
      <!-- ____________________________________________________________________ -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Semua Santri </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                <li class="breadcrumb-item active">Data Semua Santri</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

          <!-- Notifikasi ------------------------------------------------- -->
          @if(session('sukses'))
          <div class="alert alert-success" role="alert">
            {{session('sukses')}}
          </div>
          @endif

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Santri Pondok Pesantren Askhabul Kahfi</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Santri</th>
                        <th>Jenjang</th>
                        <th>Kampus</th>
                        <th>Fasilitas</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Live Chat</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- Variabel php untuk nomor-->    <?php
                      $nomer = 1;
                      ?>
                      <!-- ambil data di database-->
                      @foreach($data_siswa as $siswa)
                      <tr>
                        <th>{{ $nomer++}}</th>
                        <td>{{ $siswa->nama}} </td>
                        <td>{{$siswa->jenjang}} {{$siswa->prodi}} </td>
                        <td>{{ $siswa->kampus}} </td>
                        <td>{{ $siswa->fasilitas}} </td>
                        <td>{{ $siswa->jeniskelamin}} </td>
                        <td>{{ $siswa->desa}}, {{ $siswa->kecamatan}}, {{ $siswa->state}}, {{ $siswa->country}} </td>
                        <td>
                          <label  class="badge badge-success">
                            <a href="{{ url('daftar') }}/{{$siswa->id}}/{{('chatwa')}}" class="text-white" target="_blank"> Chat WA </a>
                          </label> 
                        </td>
                        <td>
                          <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('detail')}}" class="btn btn-success btn-sm">Detail</a>
                          <!-- <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('edit')}}" class="btn btn-warning btn-sm">Edit</a> -->
                          <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus ?')">Delete</a>
                        </td>
                      </tr>
                      @endforeach  
                    </tbody>
                  </table>

                  <!-- Button trigger modal -->
                  <br>
                  <div>
                    <button type="button" class="btn btn-primary btn-sm float-left" data-toggle="modal" data-target="#siswa">
                      Tambah Data
                    </button>
                    <a href="">.</a>
                    <a type="button" class="btn btn-success btn-sm text-white"  data-toggle="modal" data-target="#SantriImport">
                      Import Data Excel
                  </a>
                  <a href="{{url('/tamplate/?file=siswa.xls')}}" class="btn btn-success btn-sm text-white">
                  	Download Tamplate Import Data Excel disini
                  </a>
                  </div>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>

      <!-- Modal Import -->
      <div class="modal fade" id="SantriImport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> Masukan Data Import </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            @if ($message= Session::get('success'))
            <script>
              alert('Berhasil Mengimport Data!');
            </script>
            @endif

            <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="form-group">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="file" name="file" required="required">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary btn-sm">Import</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>

      <!-- Modal ------------------------------------------------- -->
      <div class="modal fade bd-example-modal-lg" id="siswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data Santri</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Formulir ______________________________________________________________________________________________ -->
            <div class="modal-body">

              <form action="{{url('siswa/create')}}" method="POST" enctype="multipart/form-data" >
                {{csrf_field()}}
                <!-- __________________________________________________________________________________ -->

                <!-- jalurpendaftaran -->
                    <!-- <input type="hidden" id="jalurpendaftaran"  class="form-control" name="jalurpendaftaran" value="Santri Lama" > -->
                <!-- bulanpendaftaran -->
                    <!-- <input type="hidden" name="bulanpendaftaran" id="bulanpendaftaran" value="<?php echo date("F"); ?>"> -->
                <!-- tahunpendaftaran -->
                    <!-- <input type="hidden" name="tahunpendaftaran" id="tahunpendaftaran" value="<?php echo date("Y"); ?>"> -->
                <!-- waktu -->
                    <!-- <input type="hidden" name="waktu" id="waktu" value="<?php echo date("d-m-Y"); ?>"> -->

                <!-- jenjang -->
                <div class="form-group row">
                  <div class="col-md-2">
                    <label for="jenjang"> Jenjang </label>
                    <select id="jenjang" name="jenjang" class="form-control" class="form-control @error('jenjang') is-invalid @enderror" value="{{ old('jenjang') }}" required autocomplete="jenjang" autofocus>
                      @foreach($jenjang as $ka)
                      <option value="{{$ka->jenjang}}">{{$ka->jenjang}}</option>
                      @endforeach
                    </select>
                    @error('jenjang')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror 
                  </div>

                  <!-- prodi -->
                  <div class="col-md-2">
                    <label for="prodi"> Prodi SMK </label>
                    <select id="prodi" name="prodi" class="form-control">
                      <option selected></option>
                    </select>
                  </div>
                  <!-- kelas -->
                  <div class="col-md-4">
                    <label for="kelas"> Kelas </label>
                    <select class="form-control" name="kelas" id="kelas">
                      <option selected>--- Pilih Kelas ---</option>
                      @foreach ($kelas as $r_kab)
                      <option  value="{{$r_kab->kab_kode}}">{{$r_kab->kab_kode}}</option>
                      @endforeach
                    </select> 
                  </div>
                  <!-- ruang -->
                  <div class="col-md-4">
                    <label for="ruang"> Ruang </label>
                    <select class="form-control" name="ruang" id="ruang">
                      <option selected>--- Ruang ---</option>
                    </select>
                  </div>
                </div>

                <!-- kampus -->
                <div class="form-group row">
                  <div class="col-md-4">
                    <label for="kampus"> Kampus </label>
                    <select id="kampus" name="kampus" class="form-control" class="form-control @error('kampus') is-invalid @enderror" value="{{ old('kampus') }}" required autocomplete="kampus" autofocus>
                      @foreach($kampus as $ka)
                      <option value="{{$ka->kampus}}">{{$ka->kampus}}</option>
                      @endforeach
                    </select>
                    @error('kampus')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror 
                  </div>
                  <!-- gedung -->
                  <div class="col-md-4">
                    <label for="gedung"> Gedung </label>
                    <select class="form-control" name="gedung" id="gedung">
                      <option selected>--- Pilih Gedung ---</option>
                      @foreach ($gedung as $r_kab)
                      <option  value="{{$r_kab->kab_kode}}">{{$r_kab->kab_kode}}</option>
                      @endforeach
                    </select> 
                  </div>
                  <!-- kamar -->
                  <div class="col-md-4">
                    <label for="kamar"> Kamar </label>
                    <select class="form-control" name="kamar" id="kamar">
                      <option selected>--- Kamar ---</option>
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

                <!-- fasilitas -->
                <div class="form-group row">                        
                  <div class="col-md-6">
                    <label for="fasilitas"> Fasilitas </label>
                    <select id="fasilitas" name="fasilitas" class="form-control" class="form-control" value="{{ old('fasilitas') }}">
                      @foreach($fasilitas as $ka)
                      <option value="{{$ka->fasilitas}}">{{$ka->fasilitas}}</option>
                      @endforeach
                    </select>
                  </div>
                  <!-- jeniskelamin -->                        
                  <div class="col-md-6">
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
                </div>

                <!-- tempatlahir -->
                <div class="form-group row">                        
                  <div class="col-md-6">
                    <label for="tempatlahir"> Tempat Lahir </label>
                    <input id="tempatlahir" type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir" value="{{ old('tempatlahir') }}" placeholder="Tempat Lahir" required autocomplete="tempatlahir" autofocus>
                    @error('tempatlahir')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <!-- tanggallahir -->                        
                  <div class="col-md-6">
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
                    <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" 
                    value="+62" required autocomplete="nohp" autofocus>
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




  <!-- ________________dropdown__________________________________ -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
    //get Kelas Ruang
  $('#kelas').change(function(){
      var kabID = $(this).val();    
      if(kabID){
          $.ajax({
             type:"GET",
             // url:"{{url('getPelanggaranBentuk')}}?kabID="+kabID,
            //  url:"https://ppaska.id/getRuang?kabID="+kabID,
             url:"{{url("")}}/getRuang?kabID="+kabID,
            //  url:"/getRuang?kabID="+kabID,
             dataType: 'JSON',
             success:function(res){               
              if(res){
                  $("#ruang").empty();
                  // $("#desa").empty();
                  $("#ruang").append('<option>--- Pilih Ruang ---</option>');
                  // $("#desa").append('<option>---Pilih Desa---</option>');
                  $.each(res,function(nama,kode){
                      $("#ruang").append('<option value="'+kode+'">'+kode+'</option>');
                  });
              }else{
                 $("#ruang").empty();
                 // $("#desa").empty();
              }
             }
          });
      }else{
          $("#ruang").empty();
          // $("#desa").empty();
      }      
     });
  </script>

  <script>
    //get Kamar Gedung
  $('#gedung').change(function(){
      var kabID = $(this).val();    
      if(kabID){
          $.ajax({
             type:"GET",
             // url:"{{url('getPelanggaranBentuk')}}?kabID="+kabID,
             url:"{{url("")}}/getKamar?kabID="+kabID,
            //  url:"https://ppaska.id/getKamar?kabID="+kabID,
            //  url:"/getKamar?kabID="+kabID,
             dataType: 'JSON',
             success:function(res){               
              if(res){
                  $("#kamar").empty();
                  // $("#desa").empty();
                  $("#kamar").append('<option>--- Pilih Kamar ---</option>');
                  // $("#desa").append('<option>---Pilih Desa---</option>');
                  $.each(res,function(nama,kode){
                      $("#kamar").append('<option value="'+kode+'">'+kode+'</option>');
                  });
              }else{
                 $("#kamar").empty();
                 // $("#desa").empty();
              }
             }
          });
      }else{
          $("#kamar").empty();
          // $("#desa").empty();
      }      
     });
  </script>

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
  <!-- __________________________________________________ --> 


  <!-- jQuery -->
  <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
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
  <!-- AdminLTE App -->
  <script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
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


<script>
    //get Kelas Ruang
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




</body>

</html>
