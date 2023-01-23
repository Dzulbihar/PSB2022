@extends('layouts.app')

@section('content')

<head>
  <title> Profile - Pondok Pesantren Askhabul Kahfi</title>

  <!-- ______________dropdown_______________________________________________ --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous"> 
  <!-- _______________________________________________________________________ --> 

  
</head>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Profile</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/daftar/dataditerima')}}">Data Santri Baru</a></li>
          <li class="breadcrumb-item active">Profile Santri</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-2">
        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Nomor</h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Nomor </strong>
            <p class="text-muted">

              @if ($siswa->jenjang == 'MTs')
                          S.00{{$siswa->id}}
              @endif 
              @if ($siswa->jenjang == 'SMP 1')
                          P1.00{{$siswa->id}}
              @endif  
              @if ($siswa->jenjang == 'SMP 2')
                          P2.00{{$siswa->id}}
              @endif  
              @if ($siswa->jenjang == 'SMK')
                          K.00{{$siswa->id}}
              @endif  
              @if ($siswa->jenjang == 'MA')
                          M.00{{$siswa->id}}
              @endif 

            </p>     
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Jalur</h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Jalur </strong>
            <p class="text-muted">{{Str::upper($siswa->jalurpendaftaran)}}</p>     
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Fasilitas</h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Fasilitas </strong>
            <p class="text-muted">{{Str::upper($siswa->fasilitas)}}</p>               
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Pilihan</h3>
          </div>
          <div class="card-body">
            <a href="{{ url('daftar') }}/{{$siswa->id}}/{{('edit')}}" target="_blank" class="btn btn-warning btn-sm">Edit Data Diri</a>
            <a href="{{ url('daftar') }}/{{$siswa->id}}/{{('printdatadiri')}}" target="_blank" class="btn btn-success btn-sm"></i> Print Data Diri </a>
            <a href="{{ url('daftar') }}/{{$siswa->id}}/{{('printslipregistrasi')}}" target="_blank" class="btn btn-secondary  btn-sm"></i> Print Slip Registrasi </a>

            @if ($siswa->jalurpendaftaran == 'Online')
            <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#online">
              Lihat Bukti Pembayaran Registrasi
            </button>
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#syarat">
              Lihat Syarat Pendaftaran
            </button>
            @endif

            <a href="{{ url('daftar') }}/{{$siswa->id}}/{{('biayaawalmasuk')}}" target="_blank" class="btn btn-danger btn-sm"></i> Biaya Awal Masuk </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <h3 class="profile-username text-center">Nama Santri</h3>
            <h4 class="text-muted text-center"> <b> {{Str::upper($siswa->nama)}} </b>  </h4>
            <ul class="list-group list-group-unbordered mb-3">
              <li>
                <h4> <img src="{{$siswa->getFoto()}}" width="100%"> </h4>
                <p> 
                  <a href="{{ url('daftar') }}/{{$siswa->id}}/{{('editfoto')}}" class="btn btn-warning btn-sm"> Masukan Foto </a> 
                  <a href="http://localhost:8080/ponpesaska/webcam.html" class="btn btn-warning btn-sm float-right" target="_blank">Ambil Gambar</a>
                </p>
              </li> 
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Data diri</h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Nama Santri </strong>
            <p class="text-muted">{{Str::upper($siswa->nama)}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Tempat Tanggal Lahir </strong>
            <p class="text-muted">{{Str::upper($siswa->tempatlahir)}} , {{ \Carbon\Carbon::parse($siswa->tanggallahir)->format('j F Y')}} </p>
            <hr>   
            <strong><i class="fas fa-file-alt mr-1"></i> Jenis Kelamin </strong>
            <p class="text-muted">{{Str::upper($siswa->jeniskelamin)}}</p>  
            <hr>   
            <strong><i class="fas fa-file-alt mr-1"></i> Nomor HP </strong>
            <p class="text-muted">{{Str::upper($siswa->nohp)}}</p>      
            <hr>   
            <strong><i class="fas fa-file-alt mr-1"></i> NISN </strong>
            <p class="text-muted">{{Str::upper($siswa->nisn)}}</p>   
            <hr>   
            <strong><i class="fas fa-file-alt mr-1"></i> NIK </strong>
            <p class="text-muted">{{Str::upper($siswa->nik)}}</p> 
            <hr>   
            <strong><i class="fas fa-file-alt mr-1"></i> KK </strong>
            <p class="text-muted">{{Str::upper($siswa->kk)}}</p> 
            <hr>   
            <strong><i class="fas fa-file-alt mr-1"></i> NO KIP </strong>
            <p class="text-muted">{{Str::upper($siswa->nokip)}}</p> 
          </div>
        </div>
        <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#editnisn">
          Lengkapi Data diri
        </button> 
        <hr>
      </div>

      <div class="col-md-3">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Wali</h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Nama Ayah </strong>
            <p class="text-muted">{{Str::upper($siswa->namaayah)}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Pendidikan Ayah </strong>
            <p class="text-muted">{{Str::upper($siswa->pendidikanayah)}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Pekerjaan Ayah </strong>
            <p class="text-muted">{{Str::upper($siswa->pekerjaanayah)}}</p>    
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Nama Ibu </strong>
            <p class="text-muted">{{Str::upper($siswa->namaibu)}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Pendidikan Ibu </strong>
            <p class="text-muted">{{Str::upper($siswa->pendidikanibu)}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Pekerjaan Ibu </strong>
            <p class="text-muted">{{Str::upper($siswa->pekerjaanibu)}}</p>
          </div>
        </div>
        <hr><hr><hr><hr><hr><hr><hr><hr>
      </div>

      <div class="col-md-3">
        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Asal Sekolah</h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Nama Asal Sekolah </strong>
            <p class="text-muted">{{Str::upper($siswa->namaasalsekolah)}}</p>  
            <hr>   
            <strong><i class="fas fa-file-alt mr-1"></i> Alamat Asal Sekolah </strong>
            <p class="text-muted">{{Str::upper($siswa->alamatasalsekolah)}}</p>
          </div>
        </div>
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Alamat</h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Desa </strong>
            <p class="text-muted">{{Str::upper($siswa->desa)}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Kecamatan </strong>
            <p class="text-muted">{{Str::upper($siswa->kecamatan)}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Kabupaten </strong>
            <p class="text-muted">{{Str::upper($siswa->state)}}</p> 
            <hr>   
            <strong><i class="fas fa-file-alt mr-1"></i> Provinsi </strong>
            <p class="text-muted">{{Str::upper($siswa->country)}}</p>
          </div>
        </div>     
        <hr><hr><hr>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <!-- Pondok -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Gedung</h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Kampus </strong>
            <p class="text-muted">{{Str::upper($siswa->kampus)}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Gedung </strong>
            <p class="text-muted">{{Str::upper($siswa->gedung)}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Kamar </strong>
            <p class="text-muted">{{Str::upper($siswa->kamar)}}</p>                
          </div>
          <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editkampus">
            Edit
          </button> 
        </div>
      </div>

      <div class="col-md-6">
        <!-- Sekolah -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">
              Kelas
            </h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Jenjang </strong> 
            <p class="text-muted">{{Str::upper($siswa->jenjang)}} {{Str::upper($siswa->prodi)}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Kelas </strong>
            <p class="text-muted">{{Str::upper($siswa->kelas)}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Ruang </strong>
            <p class="text-muted">{{Str::upper($siswa->ruang)}}</p>                
          </div>
          <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editjenjang">
            Edit
          </button>
        </div>
      </div>
    </div>


    <!-- ______________________________________________________________________ -->

    @if ($siswa->jalurpendaftaran == 'Online')
    <!-- Modal syarat -->
    <div class="modal fade" id="syarat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle"> Lihat Syarat Pendaftaran </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group row">    
              <div class="col-md-12">
                @foreach($Upload_syarat as $syarat)
                <h4> <img src="{{$syarat->getKK()}}" width="100%" height="100%"> </h4>
                <h4> <img src="{{$syarat->getAKTE()}}" width="100%" height="100%"> </h4>
                <h4> <img src="{{$syarat->getFOTO()}}" width="100%" height="100%"> </h4>
                @endforeach 
              </div>                    
            </div>  
          </div>
        </div>
      </div>
    </div>
    <!-- Modal online -->
    <div class="modal fade" id="online" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle"> Bukti Pembayaran Registrasi Pendaftaran </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group row">    
              <div class="col-md-12">
                <h4> <img src="{{$siswa->getFoto_registrasi_online()}}" width="100%" height="100%"> </h4>
              </div>                    
            </div>  
          </div>
        </div>
      </div>
    </div>
    @endif
    <!-- ______________________________________________________________________ -->


  <!-- Modal Edit Jenjang -->
  <div class="modal fade" id="editjenjang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle"> Edit Data Jenjang </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ url('daftar') }}/{{$siswa->id}}/{{('updatedetail')}}" method="POST" enctype="multipart/form-data"  >
            {{ csrf_field() }}
            <!-- jenjang --> 
            <div class="form-group row">
              <div class="col-md-12">
                <label> Jenjang </label>
                <select id="jenjang" name="jenjang" class="form-control" class="form-control">
                  <option selected> {{Str::upper($siswa->jenjang)}} </option> 
                  @foreach($jenjang as $ka)
                    <option>
                      {{$ka->jenjang}}
                    </option>
                  @endforeach
                  </option>
                </select>
              </div>
            </div> 
            <!-- kelas -->   
            <div class="form-group row">
              <div class="col-md-6">
                <label> Kelas </label>
                <select id="kelas" class="form-control" name="kelas">
                  <option selected> {{Str::upper($siswa->kelas)}} </option> 
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
                <select class="form-select" name="ruang" id="ruang">
                  <option selected> {{Str::upper($siswa->ruang)}} </option>
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal Edit Kampus -->
  <div class="modal fade" id="editkampus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle"> Edit Data Kampus </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ url('daftar') }}/{{$siswa->id}}/{{('updatedetail')}}" method="POST" enctype="multipart/form-data"  >
            {{ csrf_field() }}

            <!-- kampus --> 
            <div class="form-group row">
              <div class="col-md-12">
                <label> Kampus </label>
                <select id="kampus" name="kampus" class="form-control" class="form-control">
                  <option selected> {{Str::upper($siswa->kampus)}} </option> 
                  @foreach($kampus as $ka)
                    <option>
                      {{$ka->kampus}}
                    </option>
                  @endforeach
                  </option>
                </select>
              </div>
            </div> 
            <!-- gedung -->   
            <div class="form-group row">
              <div class="col-md-6">
                <label> Gedung </label>
                <select id="gedung" class="form-control" name="gedung">
                  <option selected> {{Str::upper($siswa->gedung)}} </option> 
                  @foreach($gedung as $ka)
                    <option>
                      {{$ka->kab_kode}}
                    </option>
                  @endforeach
                  </option>
                </select>
              </div>
              <!-- kamar --> 
              <div class="col-md-6">
                <label> Kamar </label>
                <select class="form-select" name="kamar" id="kamar">
                  <option selected> {{Str::upper($siswa->kamar)}} </option>
                </select>
              </div>
            </div>  

            <div class="modal-footer">
              <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

      <!-- Modal Edit nisn -->
      <div class="modal fade" id="editnisn" tabindex="-1" role="dialog" aria-labelledby="editnisn" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editnisn"> Lengkapi Data </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ url('daftar') }}/{{$siswa->id}}/{{('updatedetail')}}" method="POST" enctype="multipart/form-data"  >
                {{ csrf_field() }}
                <div class="form-group row">    
                  <div class="col-md-12">
                    <label> NISN </label>
                    <input id="nisn" type="text" class="form-control" name="nisn" value="{{$siswa->nisn}}" placeholder="NISN" >
                  </div>  
                  <div class="col-md-12">
                    <label> NIK </label>
                    <input id="nik" type="text" class="form-control" name="nik" value="{{$siswa->nik}}" placeholder="NIK">
                  </div>  
                  <div class="col-md-12">
                    <label> KK </label>
                    <input id="kk" type="text" class="form-control" name="kk" value="{{$siswa->kk}}" placeholder="KK">
                  </div>  
                  <div class="col-md-12">
                    <label> NO KIP  </label>
                    <input id="nokip" type="text" class="form-control" name="nokip" value="{{$siswa->nokip}}" placeholder="NO KIP">
                  </div>  
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


  </div>
</section>
<!-- /.content -->


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
  <!-- __________________________________________________ --> 


@endsection

