<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Pendaftaran Santri Baru Ponpes Askhabul Kahfi </title>
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('adminlte/dist/img/logoaska.png')}}" width="30">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">

<!-- ________________dropdown__________________________________ -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous"> 
<!-- _______________________________________________________________ --> 

</head>


<body>


  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <hr><hr>
              <h2 align="center">
                <b>Pendaftaran Santri Baru Ponpes Askhabul Kahfi</b>
              </h2>
            <hr><hr>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">

              <div class="card-header">
                <h3 class="card-title"> Formulir Pendaftaran Santri Baru </h3>
              </div>


            <div class="modal-body">

              <form action="{{url('data_online')}}" method="POST" enctype="multipart/form-data" >
                {{csrf_field()}}
                <!-- __________________________________________________ -->

                <!-- jalurpendaftaran -->
                    <input type="hidden" id="jalurpendaftaran"  class="form-control" name="jalurpendaftaran" value="Online"  >
                <!-- bulanpendaftaran -->
                    <input type="hidden" name="bulanpendaftaran" id="bulanpendaftaran" value="<?php echo date("F"); ?>">
                <!-- tahunpendaftaran -->
                    <input type="hidden" name="tahunpendaftaran" id="tahunpendaftaran" value="<?php echo date("Y"); ?>">
                <!-- waktu -->
                    <input type="hidden" name="waktu" id="waktu" value="<?php echo date("d-m-Y"); ?>">

                <!-- jenjang -->
                <div class="form-group row">
                  <div class="col-md-5">
                    <label for="jenjang"> Jenjang </label>
                    <select id="jenjang" name="jenjang" class="form-control" value="{{ old('jenjang') }}">
                        <option> SMP 2 </option>
                        <option> MTs </option>
                        <option> SMK </option>
                        <option> MA </option>
                        <option> Mahad Aly </option>
                        <option disabled> Pendaftaran SMP 1 ditutup, dialihkan ke SMP 2 </option>
                        <!--@foreach($jenjang as $ka)-->
                        <!--<option value="{{$ka->jenjang}}">{{$ka->jenjang}}</option>-->
                        <!--@endforeach-->
                    </select>
                  </div>

                  <!-- prodi -->
                  <div class="col-md-2">
                    <label for="prodi"> Prodi SMK </label>
                    <select id="prodi" name="prodi" class="form-control">
                      <option selected></option>
                    </select>
                  </div>

                <!-- fasilitas -->
                  <div class="col-md-5">
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
                   <label> <b> Email (Username) </b> (namasantri@gmail.com) (tanpa spasi) </label>
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
                    <button type="submit" class="btn btn-success">
                      Daftar
                    </button>
                    <a class="float-right"> <b>Periksa kembali koneksi jaringan anda sebelum mendaftar</b></a>
<!--                     <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button> -->
                  </div>
                </form>  
              </div>
              <!-- EndFormulir __________________________________________________________________________________________ -->
            </div>



            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>





<!-- jQuery -->
<script src="{{asset('adminlte//plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('adminlte//plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('adminlte//plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte//dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte//dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

<!-- ________________dropdown__________________________________ -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
 //Lokasi: public/wilayah.js
$('#country').change(function(){
    var kabID = $(this).val();    
    if(kabID){
        $.ajax({
           type:"GET",
        //   url:"/getMsKabupaten?kabID="+kabID,
           url:"{{url("")}}/getMsKabupaten?kabID="+kabID,
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
