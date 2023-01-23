
@extends('layouts.app')

@section('content')

<head>
  <title> Profile - Pondok Pesantren Askhabul Kahfi</title>
</head>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1> Profile </h1>
      </div>
    </div>
  </div>
</section>


<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-2">
        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title"> Nomor Pendaftaran</h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Nomor </strong>
            <p class="text-muted">{{$siswa->jenjang}}_00{{$siswa->id}}</p>     
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title"> Jenjang </h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Jenjang </strong>
            <p class="text-muted">{{ $siswa->jenjang}}</p>     
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title"> Fasilitas </h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-file-alt mr-1"></i> Fasilitas </strong>
            <p class="text-muted">{{$siswa->fasilitas}}</p>     
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
            <a href="{{ url('daftar_online') }}/{{$siswa->id}}/{{('edit')}}" target="_blank" class="btn btn-warning btn-sm">Edit Data Diri</a>
            <a href="{{ url('daftar') }}/{{$siswa->id}}/{{('printdatadiri')}}" target="_blank" class="btn btn-success btn-sm"></i> Print Data Diri </a>

            <a href="{{ url('daftar_online') }}/{{$siswa->id}}/{{('registrasi_online')}}" target="_blank" class="btn btn-secondary btn-sm"></i> Upload Bukti Pembayaran Registrasi </a>

            <a href="{{ url('daftar_online') }}/{{$siswa->id}}/{{('syarat_daftar')}}" target="_blank" class="btn btn-info btn-sm"></i> Upload Persyaratan Pendaftaran </a>

            <a href="{{ url('daftar_online') }}/{{$siswa->id}}/{{('biayaawalmasuk')}}" target="_blank" class="btn btn-danger btn-sm"></i> Biaya Awal Masuk </a>
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
                <p> <a href="{{ url('daftar_online') }}/{{$siswa->id}}/{{('editfoto')}}" class="btn btn-warning btn-sm"> Masukan Foto </a> </p>
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
            <p class="text-muted">{{ $siswa->nama}}</p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Tempat Tanggal Lahir </strong>
            <p class="text-muted">{{ $siswa->tempatlahir}} , {{ \Carbon\Carbon::parse($siswa->tanggallahir)->format('j F Y')}}}</p>
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
        <!-- About Me Box -->
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
            <form action="{{ url('daftar_online') }}/{{$siswa->id}}/{{('updatedetail')}}" method="POST" enctype="multipart/form-data"  >
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


  </div>
</section>

<!-- ______________________________________________________________________ -->






















@endsection

