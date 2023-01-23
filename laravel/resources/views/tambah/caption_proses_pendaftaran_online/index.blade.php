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
            <h3 class="card-title"> <b> Tambahkan Caption proses pendaftaran online disini </b> </h3>
          </div>


          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th> Caption </th>
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
                <!-- Variabel php untuk nomor-->    <?php
                $nomer = 1;
                ?>
                <!-- ambil data di database-->
                @foreach($data_caption_proses_pendaftaran_online as $caption_proses_pendaftaran_online)
                <tr>
                  <th>{{ $nomer++}}</th>
                  <td>{{ $caption_proses_pendaftaran_online->caption}} </td>
                  <td>
                    <a href="{{ url('caption_proses_pendaftaran_online') }}/{{$caption_proses_pendaftaran_online->id}}/{{('editcaption_proses_pendaftaran_online')}}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ url('caption_proses_pendaftaran_online') }}/{{$caption_proses_pendaftaran_online->id}}/{{('deletecaption_proses_pendaftaran_online')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus ?')">Delete</a>
                  </td>
                </tr>
                @endforeach  
              </tbody>
            </table>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm float-left" data-toggle="modal" data-target="#caption_proses_pendaftaran_online">
              Tambah Data
            </button>

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



  <!-- Modal ------------------------------------------------- -->
  <div class="modal fade" id="caption_proses_pendaftaran_online" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Tambah Caption proses pendaftaran online </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <!-- Formulir ______________________________________________________________________________________________ -->
        <div class="modal-body">

          <form action="{{ url('caption_proses_pendaftaran_online/createcaption_proses_pendaftaran_online') }}" method="POST" enctype="multipart/form-data" >
            {{csrf_field()}}

            <!-- __________________________________________________________________________________ -->

            <!-- link -->
            <div class="form-group row">                        
              <div class="col-md-12">
                <label> Caption </label>
                <input id="caption" name="caption" type="text" class="form-control" value="{{ old('link') }}">
              </div>
            </div>

            <!-- __________________________________________________________________________________ -->
            <!-- Tombol -->    
            <div class="form-group row">                    
              <div class="col-md-12">
                <br>
                <button type="submit" class="btn btn-primary">
                  Simpan
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>

            </form>  
          </div>

          <!-- EndFormulir __________________________________________________________________________________________ -->
        </div>
      </div>
    </div>
    <!-- EndModal ------------------------------------------------- -->



  </section>
  <!-- /.content -->





  @endsection
