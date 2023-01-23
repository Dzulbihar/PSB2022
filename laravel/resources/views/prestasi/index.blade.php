@extends('layouts.app')

@section('content')


<head>
	<title> Prestasi - Pondok Pesantren Askhabul Kahfi</title>
</head>

<br>
<!-- Notifikasi ------------------------------------------------- -->
@if(session('sukses'))
<div class="alert alert-success" role="alert">
	{{session('sukses')}}
</div>
@endif

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">


				<div class="card">
					<div class="card-header">
						<h3 class="card-title"> <b>Data Prestasi {{$siswa->nama}}</b> </h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">

						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Tanggal</th>
									<th>Kategori</th>
									<th>Tingkat</th>
									<th>Catatan</th>
									<th>Skor</th>
                  @if(auth()->user()->role == 'Administrator')
									<th>Aksi</th>
                  @endif
                  @if(auth()->user()->role == 'Admin Kampus')
                  <th>Aksi</th>
                  @endif
								</tr>
							</thead>
							<tbody>
								<!-- Variabel php untuk nomor-->    <?php
								$nomer = 1;
								?>
								<!-- ambil data di database-->
								@foreach($prestasi as $prestasi)
								<tr>
									<th>{{ $nomer++}}</th>
									<td> {{$prestasi->tanggal}} </td>
									<td> {{$prestasi->kategori}} </td>
									<td> {{$prestasi->tingkat}} </td>
									<td> {{$prestasi->catatan}} </td>
									<td> {{$prestasi->skor}} </td>
                  @if(auth()->user()->role == 'Administrator')
									<td>
										<a href="{{ url('siswa') }}/{{$siswa->id}}/{{$prestasi->id}}/{{('editprestasi')}}" class="btn btn-warning btn-sm">Edit</a>
										<a href="{{ url('siswa') }}/{{$siswa->id}}/{{$prestasi->id}}/{{'deleteprestasi'}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus')">Delete</a>
									</td>
                  @endif
                  @if(auth()->user()->role == 'Admin Kampus')
                  <td>
                    <a href="{{ url('siswa') }}/{{$siswa->id}}/{{$prestasi->id}}/{{('editprestasi')}}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ url('siswa') }}/{{$siswa->id}}/{{$prestasi->id}}/{{'deleteprestasi'}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus')">Delete</a>
                  </td>
                  @endif
                </tr>
                @endforeach
							</tbody>
						</table>

            <!-- Button trigger modal -->
            <div>

            @if(auth()->user()->role == 'Administrator')
              <button type="button" class="btn btn-primary btn-sm float-left" data-toggle="modal" data-target="#siswa">
                Tambah Data
              </button>
              <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('printprestasi')}}" rel="noopener" target="_blank" class="btn btn-default bg-primary btn-sm"><i class="fas fa-print"></i> Print</a>
            @endif
            @if(auth()->user()->role == 'Admin Kampus')
              <button type="button" class="btn btn-primary btn-sm float-left" data-toggle="modal" data-target="#siswa">
                Tambah Data
              </button>
              <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('printprestasi')}}" rel="noopener" target="_blank" class="btn btn-default bg-primary btn-sm"><i class="fas fa-print"></i> Print</a>
            @endif 
              <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('detail')}}" rel="noopener" class="btn btn-primary btn-sm"> Kembali </a>
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
<div class="modal fade bd-example-modal-lg" id="siswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Prestasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{url('siswa')}}/{{$siswa->id}}/addprestasi" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- __________________________________________________________________________________ -->

          <!-- kategori -->
          <div class="form-group row">
            <div class="col-md-6">
              <label> Kategori </label>
              <input name="kategori" id="kategori" type="text" class="form-control" value="{{ old('kategori') }}" placeholder="Kategori">
            </div>
            <!-- tingkat -->
            <div class="col-md-6">
              <label> Tingkat </label>
              <input name="tingkat" id="tingkat" type="text" class="form-control" value="{{ old('tingkat') }}" placeholder="Tingkat">
            </div>              
          </div>

          <!-- tanggal -->
          <div class="form-group row">
            <div class="col-md-6">
              <label> Waktu </label>
              <input name="tanggal" id="tanggal" type="date" class="form-control" value="{{ old('tanggal') }}" placeholder="Waktu">
            </div>
            <!-- skor -->
            <div class="col-md-6">
              <label> Skor </label>
              <input name="skor" id="skor" type="number" class="form-control" value="{{ old('skor') }}" placeholder="Skor">
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