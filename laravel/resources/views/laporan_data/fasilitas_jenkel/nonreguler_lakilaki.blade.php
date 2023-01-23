<head>
  <title> Data Non Reguler Laki-laki - Pondok Pesantren Askhabul Kahfi</title>
</head>

@extends('layouts.app')

@section('content')





<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1> <b>Non Reguler Laki-laki</b> </h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
          <li class="breadcrumb-item active">Non Reguler Laki-laki</li>
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
            <h3 class="card-title"> Non Reguler Laki-laki </h3>
          </div>
          <!-- /.card-header -->
          
          <div class="card-body">

            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>

                  <th>Aktivitas</th>

                  <th>Nama</th>
                  <th>Fasilitas</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>

                  <th>Kampus</th>
                  <th>Kelas</th>

                  <th>TTL</th>

                  <th>Tentang Ayah</th>
                  <th>Tentang Ibu</th>

                  <th>Foto</th>

                  <th>NISN</th>
                  <th>KK</th>
                  <th>NIK</th>
                  <th>NO KIP</th>                  
                </tr>
              </thead>
              <tbody>
                <!-- Variabel php untuk nomor-->    
                <?php
                $nomer = 1;
                ?>
                <!-- ambil data di database-->
                @foreach($data_siswa as $siswa)
                <tr>
                  <th> {{$nomer++}} </th>

                  <td>
                    <label  class="badge badge-success">
                      <a href="{{ url('daftar') }}/{{$siswa->id}}/{{('chatwa')}}" class="text-white" target="_blank"> Chat WA </a>
                    </label>
                    <label  class="badge badge-primary">
                      <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('prestasi')}}" class="text-white" target="_blank"> Data Prestasi </a> 
                    </label> 
                    <label  class="badge badge-danger">
                      <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('pelanggaran')}}" class="text-white" target="_blank"> Data Pelanggaran</a>
                    </label> 
                    <label  class="badge badge-warning">
                      <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('penitipan_uang')}}" class="text-white" target="_blank"> Data Penitipan Uang</a>
                    </label> 
                  </td>

                  <td> {{Str::upper($siswa->nama)}} </td>
                  <td> {{Str::upper($siswa->fasilitas)}} </td>
                  <td> {{Str::upper($siswa->jeniskelamin)}} </td>
                  <td> {{Str::upper($siswa->desa)}}, {{Str::upper($siswa->kecamatan)}}, {{Str::upper($siswa->state)}}, {{Str::upper($siswa->country)}} </td>

                  <td> {{Str::upper($siswa->kampus)}}, {{Str::upper($siswa->gedung)}}, {{Str::upper($siswa->kamar)}} </td>
                  <td> {{Str::upper($siswa->jenjang)}} {{Str::upper($siswa->prodi)}}, {{Str::upper($siswa->kelas)}}, {{Str::upper($siswa->ruang)}}</td>

                  <td> {{Str::upper($siswa->tempatlahir)}}, {{ \Carbon\Carbon::parse($siswa->tanggallahir)->format('j F Y')}} </td>

                  <td> {{Str::upper($siswa->namaayah)}}, {{Str::upper($siswa->pekerjaanayah)}} </td>
                  <td> {{Str::upper($siswa->namaibu)}}, {{Str::upper($siswa->pekerjaanibu)}} </td>

                  <td> <img src="{{$siswa->getFoto()}}" width="100%"> </td>

                  <td> {{Str::upper($siswa->nisn)}} </td>
                  <td> {{Str::upper($siswa->kk)}} </td>
                  <td> {{Str::upper($siswa->nik)}} </td>
                  <td> {{Str::upper($siswa->nokip)}} </td>
                </tr>
                @endforeach  
              </tbody>
            </table>

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

@endsection
