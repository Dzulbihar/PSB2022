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
          <li class="breadcrumb-item"><a href="{{url('/siswa')}}">Data Semua Santri</a></li>
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
      <div class="col-md-3">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Jalur</h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Jalur </strong>
            <p class="text-muted">{{$siswa->jalurpendaftaran}}</p>     
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Fasilitas</h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Fasilitas </strong>
            <p class="text-muted">{{$siswa->fasilitas}}</p>     
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Pilihan</h3>
          </div>
          <div class="card-body">
            <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('edit')}}" target="_blank" class="btn btn-warning btn-sm">Edit Data Diri</a>
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
            <h4 class="text-muted text-center"> <b> {{ $siswa->nama}} </b>  </h4>
            <ul class="list-group list-group-unbordered mb-3">
              <li>
                <h4> <img src="{{$siswa->getFoto()}}" width="100%"> </h4>
                <p> 
                  <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('editfoto')}}" class="btn btn-warning btn-sm"> Masukan Foto </a>
                  <a href="http://localhost:8080/ponpesaska/webcam.html" class="btn btn-warning btn-sm float-right" target="_blank">Ambil Gambar</a> 
                </p>
              </li>

            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <!-- Data Diri -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Data diri</h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Nama Santri </strong>
            <p class="text-muted">{{ $siswa->nama}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Tempat Tanggal Lahir </strong>
            <p class="text-muted">{{ $siswa->tempatlahir}} , {{ \Carbon\Carbon::parse($siswa->tanggallahir)->format('j F Y')}}</p>
            <hr>   
            <strong><i class="fas fa-file-alt mr-1"></i> Jenis Kelamin </strong>
            <p class="text-muted">{{ $siswa->jeniskelamin}}</p>  
            <hr>   
            <strong><i class="fas fa-file-alt mr-1"></i> Nomor HP </strong>
            <p class="text-muted">{{ $siswa->nohp}}</p>      
            <hr>   
            <strong><i class="fas fa-file-alt mr-1"></i> NISN </strong>
            <p class="text-muted">{{ $siswa->nisn}}</p>   
            <hr>   
            <strong><i class="fas fa-file-alt mr-1"></i> NIK </strong>
            <p class="text-muted">{{ $siswa->nik}}</p> 
            <hr>   
            <strong><i class="fas fa-file-alt mr-1"></i> KK </strong>
            <p class="text-muted">{{ $siswa->kk}}</p> 
            <hr>   
            <strong><i class="fas fa-file-alt mr-1"></i> NO KIP </strong>
            <p class="text-muted">{{ $siswa->nokip}}</p> 
          </div>
        </div>
        <button type="button" class="btn btn-warning btn-sm btn-block" data-toggle="modal" data-target="#editnisn">
          Lengkapi Data diri
        </button> 
        <hr>
      </div>

      <div class="col-md-3">
        <!-- Wali -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Wali</h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Nama Ayah </strong>
            <p class="text-muted">{{ $siswa->namaayah}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Pendidikan Ayah </strong>
            <p class="text-muted">{{ $siswa->pendidikanayah}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Pekerjaan Ayah </strong>
            <p class="text-muted">{{ $siswa->pekerjaanayah}}</p>    
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Nama Ibu </strong>
            <p class="text-muted">{{ $siswa->namaibu}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Pendidikan Ibu </strong>
            <p class="text-muted">{{ $siswa->pendidikanibu}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Pekerjaan Ibu </strong>
            <p class="text-muted">{{ $siswa->pekerjaanibu}}</p>
          </div>
        </div>
        <hr><hr><hr><hr><hr><hr><hr><hr>
      </div>

      <div class="col-md-3">
        <!-- Asal Sekolah -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Asal Sekolah</h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Nama Asal Sekolah </strong>
            <p class="text-muted">{{ $siswa->namaasalsekolah}}</p>  
            <hr>   
            <strong><i class="fas fa-file-alt mr-1"></i> Alamat Asal Sekolah </strong>
            <p class="text-muted">{{ $siswa->alamatasalsekolah}}</p>
          </div>
        </div>
        <!-- Alamat -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Alamat</h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Desa </strong>
            <p class="text-muted">{{ $siswa->desa}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Kecamatan </strong>
            <p class="text-muted">{{ $siswa->kecamatan}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Kabupaten </strong>
            <p class="text-muted">{{ $siswa->state}}</p> 
            <hr>   
            <strong><i class="fas fa-file-alt mr-1"></i> Provinsi </strong>
            <p class="text-muted">{{ $siswa->country}}</p>
          </div>
        </div>     
        <hr><hr><hr>
      </div>
    </div>

<!-- ______________________________________________________________________ -->

    <div class="row">
      <div class="col-md-6">
        <!-- Pondok -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Gedung</h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Kampus </strong>
            <p class="text-muted">{{ $siswa->kampus}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Gedung </strong>
            <p class="text-muted">{{ $siswa->gedung}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Kamar </strong>
            <p class="text-muted">{{ $siswa->kamar}}</p>                
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
            <p class="text-muted">{{ $siswa->jenjang}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Kelas </strong>
            <p class="text-muted">{{ $siswa->kelas}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Ruang </strong>
            <p class="text-muted">{{ $siswa->ruang}}</p>                
          </div>
          <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editjenjang">
            Edit
          </button>
        </div>
      </div>
    </div>

<!-- ______________________________________________________________________ -->

<div class="row">
  <div class="col-md-4">
    <div class="card card-primary">
      <div class="card-body">
        <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('prestasi')}}" target="_blank" class="btn btn-success btn-block"> Data Prestasi </a> 
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card card-primary">
      <div class="card-body">
        <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('pelanggaran')}}" target="_blank" class="btn btn-danger btn-block"> Data Pelanggaran</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card card-primary">
      <div class="card-body">
        <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('penitipan_uang')}}" target="_blank" class="btn btn-info btn-block"> Data Penitipan Uang</a>
      </div>
    </div>
  </div>
</div>                        

<!-- ______________________________________________________________________ -->
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
        <form action="{{ url('siswa') }}/{{$siswa->id}}/{{('updatedetail')}}" method="POST" enctype="multipart/form-data"  >
          {{ csrf_field() }}
          <!-- jenjang --> 
          <div class="form-group row">
            <div class="col-md-12">
              <label> Jenjang </label>
              <select id="jenjang" name="jenjang" class="form-control" class="form-control">
                <option selected> {{ $siswa->jenjang}} </option> 
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
                <option selected> {{ $siswa->kelas}} </option> 
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
                <option selected> {{ $siswa->ruang}} </option>
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
        <form action="{{ url('siswa') }}/{{$siswa->id}}/{{('updatedetail')}}" method="POST" enctype="multipart/form-data"  >
          {{ csrf_field() }}

          <!-- kampus --> 
          <div class="form-group row">
            <div class="col-md-12">
              <label> Kampus </label>
              <select id="kampus" name="kampus" class="form-control" class="form-control">
                <option selected> {{ $siswa->kampus}} </option> 
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
                <option selected> {{ $siswa->gedung}} </option> 
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
                <option selected> {{ $siswa->kamar}} </option>
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
        <form action="{{ url('siswa') }}/{{$siswa->id}}/{{('updatedetail')}}" method="POST" enctype="multipart/form-data"  >
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
            <button type="submit" class="btn btn-primary btn-sm">Update</button>
          </div>
        </form>
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
             url:"{{url("")}}/getRuang?kabID="+kabID,
            //  url:"https://ppaska.id/getRuang?kabID="+kabID,
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
            //  url:"https://ppaska.id/getKamar?kabID="+kabID,
             url:"{{url("")}}/getKamar?kabID="+kabID,
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

