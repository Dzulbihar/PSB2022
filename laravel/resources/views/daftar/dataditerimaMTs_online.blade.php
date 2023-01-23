<head>
  <title> Data Diterima - Pondok Pesantren Askhabul Kahfi</title>
</head>

@extends('layouts.app')

@section('content')





  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-8">
          <h1> Diterima di MTs </h1>
          <h3> (Online) </h3>
        </div>
        <div class="col-sm-4">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
            <li class="breadcrumb-item active">Pendaftaran</li>
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
              <h3 class="card-title"> Silakan untuk melakukan Registrasi</h3>
            </div>
            <!-- /.card-header -->
            
            <div class="card-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenjang</th>
                    <th>Fasilitas</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Live Chat</th>
                    <th>Status</th>
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
                    <td>{{Str::upper($siswa->nama)}} </td>
                    <td>{{Str::upper($siswa->jenjang)}} </td>
                    <td>{{Str::upper($siswa->fasilitas)}} </td>
                    <td>{{Str::upper($siswa->jeniskelamin)}} </td>
                    <td>{{Str::upper($siswa->desa)}}, {{Str::upper($siswa->kecamatan)}}, {{Str::upper($siswa->state)}}, {{Str::upper($siswa->country)}} </td>
                    <td>
                      <label  class="badge badge-success">
                        <a href="{{ url('daftar') }}/{{$siswa->id}}/{{('chatwa')}}" class="text-white" target="_blank"> Chat WA </a>
                      </label> 
                    </td>
                    <td>  
                      <label  class="badge {{($siswa->status == 1) ? 'badge-success' : 'badge-danger'}}" >
                        @if ($siswa->status == 1)
                        <a class="text-white"> {{ ($siswa->status == 0) ? 'Belum Tes' : 'Sudah diterima' }} </a>
                      @else
                        <a class="text-white"> {{ ($siswa->status == 0) ? 'Belum Tes' : 'Sudah diterima' }} </a>
                      @endif
                      </label> 
                    </td>
                    <td>
                      <a href="{{ url('daftar') }}/{{$siswa->id}}/{{('detail')}}" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{ url('daftar') }}/{{$siswa->id}}/{{('deletedataditerimaMTs')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus ?')">Delete</a>
                    </td>
                  </tr>
                  @endforeach  
                </tbody>
              </table>

              <br>
              <a href="{{url('daftar/data_online')}}" class="btn btn-warning"> Data belum Tes</a>
              <a href="{{url('daftar/dataditerimaSMP1_online')}}" class="btn btn-info"> Data diterima <b>SMP 1</b> </a>
              <a href="{{url('daftar/dataditerimaSMP2_online')}}" class="btn btn-info"> Data diterima <b>SMP 2</b> </a>
              <a href="{{url('daftar/dataditerimaMTs_online')}}" class="btn btn-info"> Data diterima <b>MTs</b> </a>
              <a href="{{url('daftar/dataditerimaSMK_online')}}" class="btn btn-info"> Data diterima <b>SMK</b> </a>
              <a href="{{url('daftar/dataditerimaMA_online')}}" class="btn btn-info"> Data diterima <b>MA</b> </a>
              <a href="{{url('daftar/dataditerimaMAHADALY_online')}}" class="btn btn-info"> Data diterima <b>Mahad Aly</b> </a>

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
