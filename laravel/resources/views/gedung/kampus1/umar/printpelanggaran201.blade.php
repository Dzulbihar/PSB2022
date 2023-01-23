<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Pendataan Santri | Print Pelanggaran </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
</head>

<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> Data Diri
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-9 invoice-col">

        <li class="list-group-item">
          <h4>
            <b>Nama Santri</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; <a class="float-center"> {{ $siswa->nama}} </a>
          </h4>
        </li>

        <li class="list-group-item">
          <h4>
            <b>Kampus</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; <a class="float-center"> {{ $siswa->kampus}} </a>
          </h4>
        </li>

        <li class="list-group-item">
          <h4>
            <b>Gedung</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; <a class="float-center"> {{ $siswa->gedung}} </a>
          </h4>
        </li>

        <li class="list-group-item">
          <h4>
            <b>Kamar</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; <a class="float-center"> {{ $siswa->kamar}} </a>
          </h4>
        </li>

        <li class="list-group-item">
          <h4>
            <b>Jenjang</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; <a class="float-center"> {{ $siswa->jenjang}} </a>
          </h4>
        </li>

        <li class="list-group-item">
          <h4>
            <b>Kelas</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; <a class="float-center"> {{ $siswa->kelas}} </a>
          </h4>
        </li>

        <li class="list-group-item">
          <h4>
            <b>Ruang</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; <a class="float-center"> {{ $siswa->ruang}} </a>
          </h4>
        </li>

        <li class="list-group-item">
          <h4>
            <b>Alamat</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; <a class="float-center"> {{ $siswa->alamat}} </a>
          </h4>
        </li>

        <li class="list-group-item">
          <h4>
            <b>Wali Murid</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; <a class="float-center"> {{ $siswa->wali}} </a>
          </h4>
        </li>

        <li class="list-group-item">
          <h4>
            <b>Nomor HP</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; <a class="float-center"> {{ $siswa->nohp}} </a>
          </h4>
        </li> 

      </div>
      <!-- /.col -->

      <div class="col-sm-3 invoice-col">
        <li class="list-group-item">
          <h4> <img src="{{$siswa->getFoto()}}" width="100%"> </h4>
        </li> 
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <br><br>

    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> Data Pelanggaran
          <small class="float-right">Date:{{ $siswa->created_at}}</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Bentuk Pelanggaran</th>
              <th>Hukuman</th>
              <th>Catatan</th>
            </tr>
          </thead>

          <tbody>
          <!-- Variabel php untuk nomor-->    <?php
          $nomer = 1;
          ?>
          <!-- ambil data di database-->
          @foreach($siswa->hukuman as $hukuman)
            <tr>
              <th>{{ $nomer++}}</th>
              <td> {{$hukuman->pivot->tanggal}} </td>
              <td> {{$hukuman->pivot->bentuk}} </td>
              <td> {{$hukuman->pivot->hukum}} </td>
              <td> {{$hukuman->pivot->catatan}} </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>

</body>
</html>
