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
            <h3 class="card-title"> <b> Tambahkan Biaya disini </b> </h3>
          </div>

          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th> SMP Reguler gel 1 </th>
                  <th> SMP Non Reguler gel 1 </th>
                  <th> SMP Reguler gel 2 </th>
                  <th> SMP Non Reguler gel 2 </th>
                  <th> MTs Reguler gel 1 </th>
                  <th> MTs Non Reguler gel 1 </th>
                  <th> MTs Reguler gel 2 </th>
                  <th> MTs Non Reguler gel 2 </th>
                  <th> SMK Reguler gel 1 </th>
                  <th> SMK Non Reguler gel 1 </th>
                  <th> SMK Reguler gel 2 </th>
                  <th> SMK Non Reguler gel 2 </th>
                  <th> MA Reguler gel 1 </th>
                  <th> MA Non Reguler gel 1 </th>
                  <th> MA Reguler gel 2 </th>
                  <th> MA Non Reguler gel 2 </th>
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
                <!-- Variabel php untuk nomor-->    <?php
                $nomer = 1;
                ?>
                <!-- ambil data di database-->
                @foreach($data_biaya as $biaya)
                <tr>
                  <th>{{ $nomer++}}</th>
                  <td>{{ $biaya->smpreg1}}</td>
                  <td>{{ $biaya->smpnonreg1}}</td>
                  <td>{{ $biaya->smpreg2}}</td>
                  <td>{{ $biaya->smpnonreg2}}</td>
                  <td>{{ $biaya->mtsreg1}}</td>
                  <td>{{ $biaya->mtsnonreg1}}</td>
                  <td>{{ $biaya->mtsreg2}}</td>
                  <td>{{ $biaya->mtsnonreg2}}</td>
                  <td>{{ $biaya->smkreg1}}</td>
                  <td>{{ $biaya->smknonreg1}}</td>
                  <td>{{ $biaya->smkreg2}}</td>
                  <td>{{ $biaya->smknonreg2}}</td>
                  <td>{{ $biaya->mareg1}}</td>
                  <td>{{ $biaya->manonreg1}}</td>
                  <td>{{ $biaya->mareg2}}</td>
                  <td>{{ $biaya->manonreg2}}</td>
                  <td>
                    <a href="{{ url('biaya') }}/{{$biaya->id}}/{{('editbiaya')}}" class="btn btn-warning btn-sm">Edit</a>
<!--                     <a href="{{ url('biaya') }}/{{$biaya->id}}/{{('deletebiaya')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus ?')">Delete</a> -->
                  </td>
                </tr>
                @endforeach  
              </tbody>
            </table>

            <!-- Button trigger modal -->
<!--             <button type="button" class="btn btn-primary btn-sm float-left" data-toggle="modal" data-target="#biaya">
              Tambah Data
            </button> -->

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
  <div class="modal fade" id="biaya" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Tambah biaya </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <!-- Formulir ______________________________________________________________________________________________ -->
        <div class="modal-body">

          <form action="{{ url('biaya/createbiaya') }}" method="POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            <!-- ______________________________________________________ -->
            <!-- SMP -->
            <div class="form-group row">   
              <div class="col-md-3">
                <label> SMP Reguler gel 1 </label>
                <input id="smpreg1" type="text" class="form-control @error('smpreg1') is-invalid @enderror" name="smpreg1" value="{{ old('smpreg1') }}"  required autocomplete="smpreg1" autofocuku>
                @error('smpreg1')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col-md-3">
                <label> SMP Non Reguler gel 2 </label>
                <input id="smpnonreg1" type="text" class="form-control @error('smpnonreg1') is-invalid @enderror" name="smpnonreg1" value="{{ old('smpnonreg1') }}"  required autocomplete="smpnonreg1" autofocuku>
                @error('smpnonreg1')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col-md-3">
                <label> SMP Reguler gel 2 </label>
                <input id="smpreg2" type="text" class="form-control @error('smpreg2') is-invalid @enderror" name="smpreg2" value="{{ old('smpreg2') }}"  required autocomplete="smpreg2" autofocuku>
                @error('smpreg2')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col-md-3">
                <label> SMP Non Reguler gel 2 </label>
                <input id="smpnonreg2" type="text" class="form-control @error('smpnonreg2') is-invalid @enderror" name="smpnonreg2" value="{{ old('smpnonreg2') }}"  required autocomplete="smpnonreg2" autofocuku>
                @error('smpnonreg2')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- MTs -->
            <div class="form-group row">   
              <div class="col-md-3">
                <label> MTs Reguler gel 1 </label>
                <input id="mtsreg1" type="text" class="form-control @error('mtsreg1') is-invalid @enderror" name="mtsreg1" value="{{ old('mtsreg1') }}"  required autocomplete="mtsreg1" autofocuku>
                @error('mtsreg1')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col-md-3">
                <label> MTs Non Reguler gel 2 </label>
                <input id="mtsnonreg1" type="text" class="form-control @error('mtsnonreg1') is-invalid @enderror" name="mtsnonreg1" value="{{ old('mtsnonreg1') }}"  required autocomplete="mtsnonreg1" autofocuku>
                @error('mtsnonreg1')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col-md-3">
                <label> MTs Reguler gel 2 </label>
                <input id="mtsreg2" type="text" class="form-control @error('mtsreg2') is-invalid @enderror" name="mtsreg2" value="{{ old('mtsreg2') }}"  required autocomplete="mtsreg2" autofocuku>
                @error('mtsreg2')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col-md-3">
                <label> MTs Non Reguler gel 2 </label>
                <input id="mtsnonreg2" type="text" class="form-control @error('mtsnonreg2') is-invalid @enderror" name="mtsnonreg2" value="{{ old('mtsnonreg2') }}" required autocomplete="mtsnonreg2" autofocuku>
                @error('mtsnonreg2')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- SMK -->
            <div class="form-group row">   
              <div class="col-md-3">
                <label> SMK Reguler gel 1 </label>
                <input id="smkreg1" type="text" class="form-control @error('smkreg1') is-invalid @enderror" name="smkreg1" value="{{ old('smkreg1') }}"  required autocomplete="smkreg1" autofocuku>
                @error('smkreg1')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col-md-3">
                <label> SMK Non Reguler gel 2 </label>
                <input id="smknonreg1" type="text" class="form-control @error('smknonreg1') is-invalid @enderror" name="smknonreg1" value="{{ old('smknonreg1') }}"  required autocomplete="smknonreg1" autofocuku>
                @error('smknonreg1')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col-md-3">
                <label> SMK Reguler gel 2 </label>
                <input id="smkreg2" type="text" class="form-control @error('smkreg2') is-invalid @enderror" name="smkreg2" value="{{ old('smkreg2') }}" required autocomplete="smkreg2" autofocuku>
                @error('smkreg2')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col-md-3">
                <label> SMK Non Reguler gel 2 </label>
                <input id="smknonreg2" type="text" class="form-control @error('smknonreg2') is-invalid @enderror" name="smknonreg2" value="{{ old('smknonreg2') }}"  required autocomplete="smknonreg2" autofocuku>
                @error('smknonreg2')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <!-- MA -->
            <div class="form-group row">   
              <div class="col-md-3">
                <label> MA Reguler gel 1 </label>
                <input id="mareg1" type="text" class="form-control @error('mareg1') is-invalid @enderror" name="mareg1" value="{{ old('mareg1') }}"  required autocomplete="mareg1" autofocuku>
                @error('mareg1')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col-md-3">
                <label> MA Non Reguler gel 2 </label>
                <input id="manonreg1" type="text" class="form-control @error('manonreg1') is-invalid @enderror" name="manonreg1" value="{{ old('manonreg1') }}" required autocomplete="manonreg1" autofocuku>
                @error('manonreg1')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col-md-3">
                <label> MA Reguler gel 2 </label>
                <input id="mareg2" type="text" class="form-control @error('mareg2') is-invalid @enderror" name="mareg2" value="{{ old('mareg2') }}" required autocomplete="mareg2" autofocuku>
                @error('mareg2')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col-md-3">
                <label> MA Non Reguler gel 2 </label>
                <input id="manonreg2" type="text" class="form-control @error('manonreg2') is-invalid @enderror" name="manonreg2" value="{{ old('manonreg2') }}"  required autocomplete="manonreg2" autofocuku>
                @error('manonreg2')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <!-- _____________________________________________________________ -->
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

          <!-- EndFormulir _______________________________________________________ -->
        </div>
      </div>
    </div>
    <!-- EndModal ------------------------------------------------- -->

<!--_______________________________________________________________________________-->

  <!-- Modal ------------------------------------------------- -->
  <div class="modal fade" id="biaya" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Tambah biaya </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- Formulir _________________________________________________________ -->
        <div class="modal-body">
          <!-- form start -->
          <form action="{{ url('biaya') }}/{{$biaya->id}}/{{('updatebiaya')}}" method="POST" enctype="multharga_awalart/form-data" >
            {{csrf_field()}}
            <div class="card-body">
              <!-- _____________________________________________________ -->
              <!-- SMP -->                        
              <div class="form-group row">
                <div class="col-md-3">
                  <label for="smpreg1"> SMP Reguler gel 1 </label>
                  <input id="smpreg1" type="text" class="form-control @error('smpreg1') is-invalid @enderror" name="smpreg1" value="{{ $biaya->smpreg1}}"  required autocomplete="smpreg1" autofocus>
                  @error('smpreg1')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="col-md-3">
                  <label for="smpnonreg1"> SMP Non Reguler gel 1 </label>
                  <input id="smpnonreg1" type="text" class="form-control @error('smpnonreg1') is-invalid @enderror" name="smpnonreg1" value="{{ $biaya->smpnonreg1}}"  required autocomplete="smpnonreg1" autofocus>
                  @error('smpnonreg1')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="col-md-3">
                  <label for="smpreg2"> SMP Reguler gel 2 </label>
                  <input id="smpreg2" type="text" class="form-control @error('smpreg2') is-invalid @enderror" name="smpreg2" value="{{ $biaya->smpreg2}}"  required autocomplete="smpreg2" autofocus>
                  @error('smpreg2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="col-md-3">
                  <label for="smpnonreg2"> SMP Non Reguler gel 2 </label>
                  <input id="smpnonreg2" type="text" class="form-control @error('smpnonreg2') is-invalid @enderror" name="smpnonreg2" value="{{ $biaya->smpnonreg2}}"  required autocomplete="smpnonreg2" autofocus>
                  @error('smpnonreg2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <!-- MTs -->                        
              <div class="form-group row">
                <div class="col-md-3">
                  <label for="mtsreg1"> MTs Reguler gel 1 </label>
                  <input id="mtsreg1" type="text" class="form-control @error('mtsreg1') is-invalid @enderror" name="mtsreg1" value="{{ $biaya->mtsreg1}}"  required autocomplete="mtsreg1" autofocus>
                  @error('mtsreg1')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="col-md-3">
                  <label for="mtsnonreg1"> MTs Non Reguler gel 1 </label>
                  <input id="mtsnonreg1" type="text" class="form-control @error('mtsnonreg1') is-invalid @enderror" name="mtsnonreg1" value="{{ $biaya->mtsnonreg1}}"  required autocomplete="mtsnonreg1" autofocus>
                  @error('mtsnonreg1')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="col-md-3">
                  <label for="mtsreg2"> MTs Reguler gel 2 </label>
                  <input id="mtsreg2" type="text" class="form-control @error('mtsreg2') is-invalid @enderror" name="mtsreg2" value="{{ $biaya->mtsreg2}}"  required autocomplete="mtsreg2" autofocus>
                  @error('mtsreg2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="col-md-3">
                  <label for="mtsnonreg2"> MTs Non Reguler gel 2 </label>
                  <input id="mtsnonreg2" type="text" class="form-control @error('mtsnonreg2') is-invalid @enderror" name="mtsnonreg2" value="{{ $biaya->mtsnonreg2}}"  required autocomplete="mtsnonreg2" autofocus>
                  @error('mtsnonreg2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <!-- SMK -->                        
              <div class="form-group row">
                <div class="col-md-3">
                  <label for="smkreg1"> SMK Reguler gel 1 </label>
                  <input id="smkreg1" type="text" class="form-control @error('smkreg1') is-invalid @enderror" name="smkreg1" value="{{ $biaya->smkreg1}}"  required autocomplete="smkreg1" autofocus>
                  @error('smkreg1')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="col-md-3">
                  <label for="smknonreg1"> SMK Non Reguler gel 1 </label>
                  <input id="smknonreg1" type="text" class="form-control @error('smknonreg1') is-invalid @enderror" name="smknonreg1" value="{{ $biaya->smknonreg1}}"  required autocomplete="smknonreg1" autofocus>
                  @error('smknonreg1')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="col-md-3">
                  <label for="smkreg2"> SMK Reguler gel 2 </label>
                  <input id="smkreg2" type="text" class="form-control @error('smkreg2') is-invalid @enderror" name="smkreg2" value="{{ $biaya->smkreg2}}"  required autocomplete="smkreg2" autofocus>
                  @error('smkreg2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="col-md-3">
                  <label for="smknonreg2"> SMK Non Reguler gel 2 </label>
                  <input id="smknonreg2" type="text" class="form-control @error('smknonreg2') is-invalid @enderror" name="smknonreg2" value="{{ $biaya->smknonreg2}}"  required autocomplete="smknonreg2" autofocus>
                  @error('smknonreg2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <!-- MA -->                        
              <div class="form-group row">
                <div class="col-md-3">
                  <label for="mareg1"> MA Reguler gel 1 </label>
                  <input id="mareg1" type="text" class="form-control @error('mareg1') is-invalid @enderror" name="mareg1" value="{{ $biaya->mareg1}}"  required autocomplete="mareg1" autofocus>
                  @error('mareg1')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="col-md-3">
                  <label for="manonreg1"> MA Non Reguler gel 1 </label>
                  <input id="manonreg1" type="text" class="form-control @error('manonreg1') is-invalid @enderror" name="manonreg1" value="{{ $biaya->manonreg1}}"  required autocomplete="manonreg1" autofocus>
                  @error('manonreg1')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="col-md-3">
                  <label for="mareg2"> MA Reguler gel 2 </label>
                  <input id="mareg2" type="text" class="form-control @error('mareg2') is-invalid @enderror" name="mareg2" value="{{ $biaya->mareg2}}"  required autocomplete="mareg2" autofocus>
                  @error('mareg2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="col-md-3">
                  <label for="manonreg2"> MA Non Reguler gel 2 </label>
                  <input id="manonreg2" type="text" class="form-control @error('manonreg2') is-invalid @enderror" name="manonreg2" value="{{ $biaya->manonreg2}}"  required autocomplete="manonreg2" autofocus>
                  @error('manonreg2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              
              <!-- Tombol -->
              <div class="col-md-12">
                <br><br>
                <button type="submit" class="btn btn-primary">
                  Update
                </button>
              </div>
            </div>
            
          </form>

          <!-- EndFormulir _______________________________________________________ -->
        </div>
      </div>
    </div>
    <!-- EndModal ------------------------------------------------- -->









  </section>
  <!-- /.content -->





  @endsection
