<head>
  <title> Data Penitipan Uang Kampus 2 - Pondok Pesantren Askhabul Kahfi</title>
</head>

@extends('layouts.app')

@section('content')



<div class="col-md-12">
  <!-- /.info-box -->
  <div class="info-box mb-3 bg-secondary">
    <div class="info-box-content">
      <div class="col-sm-6">
        <h1> <b> Data Penitipan Uang  </b>  </h1>
      </div>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
</div>

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
            <h3 class="card-title"> <b> Data Penitipan Uang Kampus 2</b> </h3>
          </div>

          <!-- /.card-header -->
          <div class="card-body">

            <table id="example1" class="table table-bordered table-striped">

              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Kampus</th>
                  <th>Kelas</th>
                  <th>Kamar</th>
                  <th> Uang Tabungan </th>
                  <th> Uang Penarikan </th>
                  <th> Sisa Uang </th>
                </tr>
              </thead>

              <tbody>
                <!-- Variabel php untuk nomor-->    
                <?php
                $nomer = 1;
                ?>
                <!-- ambil data di database-->
                @foreach(penitipan_uangkampus2() as $s)
                <tr>
                  <th>{{ $nomer++}}</th>
                  <td>{{ $s->nama}} </td>
                  <td>{{ $s->kampus}} </td>
                  <td>{{ $s->kelas}}, {{ $s->ruang}} </td>
                  <td>{{ $s->kamar}}, {{ $s->gedung}} </td>
                  <td>{{ $s->skorNabung}} </td>
                  <td>{{ $s->skorAmbil}} </td>
                  <td> 
                    <?php 
                        $nabung = "{$s->skorNabung}";
                        $ambil = "{$s->skorAmbil}";
                        $sisa = $nabung-$ambil;
                        echo $sisa;
                     ?>
                  </td>
                </tr>
                @endforeach  
              </tbody>
            </table>
            <td>
              <button type="button" class="btn  btn-outline-primary btn-sm"><a href="{{url('/rankingpelanggaran')}}">Kembali</a></button>
            </td>            
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
