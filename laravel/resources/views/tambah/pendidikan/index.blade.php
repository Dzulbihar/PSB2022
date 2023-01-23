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
                <h3 class="card-title"> <b> Tambahkan Pendidikan disini </b> </h3>
              </div>


              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th> Pendidikan </th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                      <!-- Variabel php untuk nomor-->    <?php
                      $nomer = 1;
                      ?>
                      <!-- ambil data di database-->
                      @foreach($data_pendidikan as $pendidikan)
                          <tr>
                              <th>{{ $nomer++}}</th>
                              <td>{{ $pendidikan->pendidikan}} </td>
                              <td>
                                <a href="{{ url('pendidikan') }}/{{$pendidikan->id}}/{{('editpendidikan')}}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{ url('pendidikan') }}/{{$pendidikan->id}}/{{('deletependidikan')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus ?')">Delete</a>
                              </td>
                          </tr>
                      @endforeach  
                  </tbody>
                </table>

<!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm float-left" data-toggle="modal" data-target="#pendidikan">
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
  <div class="modal fade" id="pendidikan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Tambah Pendidikan </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

<!-- Formulir ______________________________________________________________________________________________ -->
        <div class="modal-body">

          <form action="{{ url('pendidikan/creatependidikan') }}" method="POST" enctype="multipart/form-data" >
            {{csrf_field()}}

<!-- __________________________________________________________________________________ -->


    <!-- pendidikan -->
              <div class="form-group row">                        
                <div class="col-md-12">
                  <label for="#"> Pendidikan </label>
                  <input id="pendidikan" type="text" class="form-control @error('pendidikan') is-invalid @enderror" name="pendidikan" value="{{ old('pendidikan') }}" placeholder="Tambah pendidikan" required autocomplete="pendidikan" autofocuku>
                  @error('pendidikan')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!-- hukum -->
          <div class="form-group">
            <!-- ambil dari database pesan --> 
                  
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
