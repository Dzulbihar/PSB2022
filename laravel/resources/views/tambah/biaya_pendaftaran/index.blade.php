@extends('layouts.app')

@section('content')

<head>
  <title> Master Data - Pondok Pesantren Askhabul Kahfi</title>
</head>

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
            <h3 class="card-title"> <b> Tambahkan Biaya Pendaftaran disini </b> </h3>
          </div>


          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th> Uang Sebanyak </th>
                  <th> Terbilang </th>
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
                <!-- Variabel php untuk nomor-->    <?php
                $nomer = 1;
                ?>
                <!-- ambil data di database-->
                @foreach($data_biaya_pendaftaran as $biaya_pendaftaran)
                <tr>
                  <th>{{ $nomer++}}</th>
                  <td>{{ $biaya_pendaftaran->uang_sebanyak}} </td>
                  <td>{{ $biaya_pendaftaran->terbilang}} </td>
                  <td>
                    <a href="{{ url('biaya_pendaftaran') }}/{{$biaya_pendaftaran->id}}/{{('editbiaya_pendaftaran')}}" class="btn btn-warning btn-sm">Edit</a>
                  </td>
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
<!-- /.content -->





@endsection
