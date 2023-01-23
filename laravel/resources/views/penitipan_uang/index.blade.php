<head>
  <title> Penitipan Uang {{$siswa->nama}} - {{$siswa->jenjang}} </title>
</head>


@extends('layouts.app')

@section('content')


<!-- Main content -->
<section class="content">
	<div class="container-fluid">

  <!-- Notifikasi ------------------------------------------------- -->
  @if(session('sukses'))
  <div class="alert alert-success" role="alert">
    {{session('sukses')}}
  </div>
  @endif

  <?php 
    $koneksi = mysqli_connect("localhost","ppaskaid_aplikasi_ponpes_2022","aplikasi_ponpes_2022","ppaskaid_aplikasi_ponpes_2022");
    $nabung = mysqli_query($koneksi,"SELECT SUM(nabung) AS nabung FROM penitipan_uang WHERE siswa_id='$siswa->id'");
    $ambil = mysqli_query($koneksi,"SELECT SUM(ambil) AS ambil FROM penitipan_uang WHERE siswa_id='$siswa->id'");

    while($d = mysqli_fetch_array($nabung)){
      $tabungan = $d['nabung']; 
    }

    while($d = mysqli_fetch_array($ambil)){
      $penarikan = $d['ambil']; 
    }

    $hasil = $tabungan - $penarikan;
  ?>

		<div class="row">
			<div class="col-12">

				<div class="card">
					<div class="card-header">
						<h3 class="card-title"> 
              <b> Data Penitipan Uang {{$siswa->nama}} </b>
            </h3>
            <h3 align="right">
              <b>
                
                Sisa Uang  = Rp.
                <?php echo number_format($hasil,0,",","."); ?>
              </b>
            </h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">

						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Tanggal</th>
									<th> Nabung </th>
									<th> Ambil </th>
									<!-- <th> Total </th> -->
                  <th>Catatan</th>
									@if(auth()->user()->role == 'Administrator')
                  <th>Aksi</th>
                  @endif
                  @if(auth()->user()->role == 'Admin Kampus')
                  <th>Aksi</th>
                  @endif
								</tr>
							</thead>
							<tbody>

								<!-- Variabel php untuk nomor-->    
                <?php
								  $nomer = 1;
								?>
								<!-- ambil data di database-->
								@foreach($penitipan_uang as $penitipan_uang)
								<tr>
									<th>{{ $nomer++}}</th>
									<td> {{ \Carbon\Carbon::parse($penitipan_uang->tanggal)->format('j F Y')}} </td>
									<td> {{$penitipan_uang->nabung}} </td>
									<td> {{$penitipan_uang->ambil}} </td>
                  <td> {{$penitipan_uang->catatan}} </td>

                  @if(auth()->user()->role == 'Administrator')
									<td>
										<a href="{{ url('siswa') }}/{{$siswa->id}}/{{$penitipan_uang->id}}/{{('editpenitipan_uang')}}" class="btn btn-warning btn-sm">Edit</a>
										<a href="{{ url('siswa') }}/{{$siswa->id}}/{{$penitipan_uang->id}}/{{'deletepenitipan_uang'}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus')">Delete</a>
									</td>
                  @endif
                  @if(auth()->user()->role == 'Admin Kampus')
                  <td>
                    <a href="{{ url('siswa') }}/{{$siswa->id}}/{{$penitipan_uang->id}}/{{('editpenitipan_uang')}}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ url('siswa') }}/{{$siswa->id}}/{{$penitipan_uang->id}}/{{'deletepenitipan_uang'}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus')">Delete</a>
                  </td>
                  @endif
								</tr>
								@endforeach  
							</tbody>
						</table>      

            <!-- Button trigger modal -->
            <div>
            @if(auth()->user()->role == 'Administrator')
              <button type="button" class="btn btn-success btn-sm float-left" data-toggle="modal" data-target="#siswa">
                Menabung
              </button>
              <button type="button" class="btn btn-danger btn-sm float-left" data-toggle="modal" data-target="#ambil">
                Ambil Uang
              </button>
              <!-- <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('printpenitipan_uang')}}" rel="noopener" target="_blank" class="btn btn-default bg-primary btn-sm"><i class="fas fa-print"></i> Print</a> -->
              <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('detail')}}" rel="noopener" class="btn btn-primary btn-sm float-right"> Kembali </a>
            @endif
            @if(auth()->user()->role == 'Admin Kampus')
              <button type="button" class="btn btn-success btn-sm float-left" data-toggle="modal" data-target="#siswa">
                Menabung
              </button>
              <button type="button" class="btn btn-danger btn-sm float-left" data-toggle="modal" data-target="#ambil">
                Ambil Uang
              </button>
              <!-- <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('printpenitipan_uang')}}" rel="noopener" target="_blank" class="btn btn-default bg-primary btn-sm"><i class="fas fa-print"></i> Print</a> -->
              <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('detail')}}" rel="noopener" class="btn btn-primary btn-sm float-right"> Kembali </a>
            @endif 
            @if(auth()->user()->role == 'siswa')
              <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('detail')}}" rel="noopener" class="btn btn-primary btn-sm"> Kembali </a>
            @endif 
            </div>

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



<!-- Modal ------------------------------------------------- -->
<div class="modal fade bd-example-modal-lg" id="ambil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penitipan Uang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form action="{{url('siswa')}}/{{$siswa->id}}/addpenitipan_uang" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}

          <!-- tanggal -->
          <div class="form-group row">
            <div class="col-md-6">
              <label> Waktu </label>
              <input name="tanggal" id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}" placeholder="Waktu" required autocomplete="tanggal" autofocus>
              @error('tanggal')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <!-- ambil -->
            <div class="col-md-6">
              <label> Ambil Uang </label>
              <input name="ambil" id="ambil" type="number" class="form-control @error('ambil') is-invalid @enderror" value="{{ old('ambil') }}" placeholder="Ambil Uang" required autocomplete="ambil" autofocus>
              @error('ambil')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>              
          </div>

          <!-- catatan -->
          <div class="form-group row">
            <div class="col-md-12">
              <label> Catatan </label>
              <textarea name="catatan" id="catatan" class="form-control" rows="3"></textarea>
            </div>              
          </div>

          <!-- __________________________________________________________________________________ -->
          <!-- Tombol -->    
          <div class="form-group row">                    
            <div class="col-md-12">
              <br>
              <button type="submit" class="btn btn-primary btn-sm">
                Simpan
              </button>
              <button type="button" class="btn btn-secondary btn-sm float-right" data-dismiss="modal">Close</button>
            </div>
          </form>  
          </div>
        <!-- EndFormulir __________________________________________________________________________________________ -->
      </div>

    </div>
  </div>
</div>
<!-- EndModal ------------------------------------------------- -->




<!-- Modal ------------------------------------------------- -->
<div class="modal fade bd-example-modal-lg" id="siswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penitipan Uang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form action="{{url('siswa')}}/{{$siswa->id}}/addpenitipan_uang" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}

          <!-- tanggal -->
          <div class="form-group row">
            <div class="col-md-6">
              <label> Waktu </label>
              <input name="tanggal" id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}" placeholder="Waktu" required autocomplete="tanggal" autofocus>
              @error('tanggal')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <!-- nabung -->
            <div class="col-md-6">
              <label> Tambah Uang </label>
              <input name="nabung" id="nabung" type="number" class="form-control @error('nabung') is-invalid @enderror" value="{{ old('nabung') }}" placeholder="Tambah Uang" required autocomplete="nabung" autofocus>
              @error('nabung')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>              
          </div>

          <!-- catatan -->
          <div class="form-group row">
            <div class="col-md-12">
              <label> Catatan </label>
              <textarea name="catatan" id="catatan" class="form-control" rows="3"></textarea>
            </div>              
          </div>

          <!-- __________________________________________________________________________________ -->
          <!-- Tombol -->    
          <div class="form-group row">                    
            <div class="col-md-12">
              <br>
              <button type="submit" class="btn btn-primary btn-sm">
                Simpan
              </button>
              <button type="button" class="btn btn-secondary btn-sm float-right" data-dismiss="modal">Close</button>
            </div>
          </form>  
          </div>
        <!-- EndFormulir __________________________________________________________________________________________ -->
      </div>

    </div>
  </div>
</div>
<!-- EndModal ------------------------------------------------- -->










  @endsection