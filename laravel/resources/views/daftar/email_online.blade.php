<head>
  <title> Email - Pondok Pesantren Askhabul Kahfi</title>
</head>

@extends('layouts.app')

@section('content')





  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-8">
          <h1> Email Pendaftaran Online </h1>
        </div>
        <div class="col-sm-4">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
            <li class="breadcrumb-item active">Email</li>
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
              <h3 class="card-title"> Email Pendaftaran Online </h3>
            </div>
            
            <div class="card-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jalur</th>
                    <th>Jenjang</th>
                    <th>Nama</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Variabel php untuk nomor-->    <?php
                  $nomer = 1;
                  ?>
                  <!-- ambil data di database-->
                  @foreach($users as $siswa)
                  <tr>

                    <th>{{ $nomer++}}</th>
                    <td>{{ $siswa->jalurpendaftaran}} </td>
                    <td>{{ $siswa->jenjang}} </td>
                    <td>{{ $siswa->name}} </td>
                    <td>{{ $siswa->email}} </td>

                  </tr>
                  @endforeach  
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




@endsection
