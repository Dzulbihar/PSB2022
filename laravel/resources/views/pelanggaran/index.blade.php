@extends('layouts.app')

@section('content')


<head>
  <title> Pelanggaran - Pondok Pesantren Askhabul Kahfi</title>
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
            <h3 class="card-title"> <b>Data Pelanggaran {{$siswa->nama}}</b> </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Bentuk</th>
                  <th>Hukuman</th>
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
                @foreach($pelanggaran as $pelanggaran)
                <tr>
                  <th>{{ $nomer++}}</th>
                  <td> {{$pelanggaran->tanggal}} </td>
                  <td> {{$pelanggaran->bentuk}} </td>
                  <td> {{$pelanggaran->hukuman}} </td>
                  <td> {{$pelanggaran->catatan}} </td>
                  <td> {{$pelanggaran->skor}} </td>
                  @if(auth()->user()->role == 'Administrator')
                  <td>
                    <a href="{{ url('siswa') }}/{{$siswa->id}}/{{$pelanggaran->id}}/{{('editpelanggaran')}}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ url('siswa') }}/{{$siswa->id}}/{{$pelanggaran->id}}/{{'deletepelanggaran'}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus')">Delete</a>
                  </td>
                  @endif
                  @if(auth()->user()->role == 'Admin Kampus')
                  <td>
                    <a href="{{ url('siswa') }}/{{$siswa->id}}/{{$pelanggaran->id}}/{{('editpelanggaran')}}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ url('siswa') }}/{{$siswa->id}}/{{$pelanggaran->id}}/{{'deletepelanggaran'}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus')">Delete</a>
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
              <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('printpelanggaran')}}" rel="noopener" target="_blank" class="btn btn-default bg-primary btn-sm"><i class="fas fa-print"></i> Print</a>
            @endif 
            @if(auth()->user()->role == 'Admin Kampus')
              <button type="button" class="btn btn-primary btn-sm float-left" data-toggle="modal" data-target="#siswa">
                Tambah Data
              </button>
              <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('printpelanggaran')}}" rel="noopener" target="_blank" class="btn btn-default bg-primary btn-sm"><i class="fas fa-print"></i> Print</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pelanggaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Formulir ______________________________________________________________________________________________ -->
      <div class="modal-body">

        <form action="{{url('siswa')}}/{{$siswa->id}}/addpelanggaran" method="POST" enctype="multipart/form-data" >
          {{csrf_field()}}
          <!-- __________________________________________________________________________________ -->

          <!-- bentuk -->
          <div class="form-group row">
            <div class="col-md-6">
              <label> Bentuk </label>
              <input name="bentuk" id="bentuk" type="text" class="form-control" value="{{ old('bentuk') }}" placeholder="Bentuk">
            </div>
            <!-- hukuman -->
            <div class="col-md-6">
              <label> Hukuman </label>
              <input name="hukuman" id="hukuman" type="text" class="form-control" value="{{ old('hukuman') }}" placeholder="Hukuman">
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