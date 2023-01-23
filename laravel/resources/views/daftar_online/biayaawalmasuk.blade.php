@extends('layouts.app')

@section('content')


<head>
  <title> Registrasi - Pondok Pesantren Askhabul Kahfi</title>

</head>


<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Biaya Awal Masuk Santri Baru</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('profil_pendaftaran_online') }}">  Profile Santri </a></li>
          <li class="breadcrumb-item active">Biaya Awal Masuk </li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- =========================================================== -->
    <div class="row">
      <div class="col-md-3">
        <div class="card card-secondary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">SMP 1 / SMP 2,<br> Reguler, Gelombang 1</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            @foreach($uang as $ka)
            <option 
            value="{{$ka->smpreg1}}">
            {{$ka->smpreg1}}
            </option>
            @endforeach
          </div>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-3">
        <div class="card card-secondary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">SMP 1 / SMP 2,<br> Non Reguler, Gelombang 1</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            @foreach($uang as $ka)
            <option 
            value="{{$ka->smpnonreg1}}">
            {{$ka->smpnonreg1}}
            </option>
            @endforeach
          </div>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-3">
        <div class="card card-secondary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">SMP 1 / SMP 2,<br> Reguler, Gelombang 2</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            @foreach($uang as $ka)
            <option 
            value="{{$ka->smpreg2}}">
            {{$ka->smpreg2}}
            </option>
            @endforeach
          </div>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-3">
        <div class="card card-secondary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">SMP 1 / SMP 2,<br> Non Reguler, Gelombang 2</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            @foreach($uang as $ka)
            <option 
            value="{{$ka->smpnonreg2}}">
            {{$ka->smpnonreg2}}
            </option>
            @endforeach
          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-3">
        <div class="card card-secondary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">MTs, Reguler,<br> Gelombang 1</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            @foreach($uang as $ka)
            <option 
            value="{{$ka->mtsreg1}}">
            {{$ka->mtsreg1}}
            </option>
            @endforeach          
          </div>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-3">
        <div class="card card-secondary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">MTs, Non Reguler,<br> Gelombang 1</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            @foreach($uang as $ka)
            <option 
            value="{{$ka->mtsnonreg1}}">
            {{$ka->mtsnonreg1}}
            </option>
            @endforeach    
          </div>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-3">
        <div class="card card-secondary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">MTs, Reguler,<br> Gelombang 2</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            @foreach($uang as $ka)
            <option 
            value="{{$ka->mtsreg2}}">
            {{$ka->mtsreg2}}
            </option>
            @endforeach 
          </div>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-3">
        <div class="card card-secondary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">MTs, Non Reguler,<br> Gelombang 2</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            @foreach($uang as $ka)
            <option 
            value="{{$ka->mtsnonreg2}}">
            {{$ka->mtsnonreg2}}
            </option>
            @endforeach 
          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-3">
        <div class="card card-secondary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">SMK, Reguler,<br> Gelombang 1</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            @foreach($uang as $ka)
            <option 
            value="{{$ka->smkreg1}}">
            {{$ka->smkreg1}}
            </option>
            @endforeach 
          </div>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-3">
        <div class="card card-secondary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">SMK, Non Reguler,<br> Gelombang 1</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            @foreach($uang as $ka)
            <option 
            value="{{$ka->smknonreg1}}">
            {{$ka->smknonreg1}}
            </option>
            @endforeach 
          </div>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-3">
        <div class="card card-secondary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">SMK, Reguler,<br> Gelombang 2</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            @foreach($uang as $ka)
            <option 
            value="{{$ka->smkreg2}}">
            {{$ka->smkreg2}}
            </option>
            @endforeach 
          </div>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-3">
        <div class="card card-secondary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">SMK, Non Reguler,<br> Gelombang 2</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            @foreach($uang as $ka)
            <option 
            value="{{$ka->smknonreg2}}">
            {{$ka->smknonreg2}}
            </option>
            @endforeach
          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-3">
        <div class="card card-secondary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">MA, Reguler,<br> Gelombang 1</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            @foreach($uang as $ka)
            <option 
            value="{{$ka->mareg1}}">
            {{$ka->mareg1}}
            </option>
            @endforeach
          </div>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-3">
        <div class="card card-secondary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">MA, Non Reguler,<br> Gelombang 1</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            @foreach($uang as $ka)
            <option 
            value="{{$ka->manonreg1}}">
            {{$ka->manonreg1}}
            </option>
            @endforeach
          </div>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-3">
        <div class="card card-secondary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">MA, Reguler,<br> Gelombang 2</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            @foreach($uang as $ka)
            <option 
            value="{{$ka->mareg2}}">
            {{$ka->mareg2}}
            </option>
            @endforeach
          </div>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-3">
        <div class="card card-secondary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">MA, Non Reguler,<br> Gelombang 2</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            @foreach($uang as $ka)
            <option 
            value="{{$ka->manonreg2}}">
            {{$ka->manonreg2}}
            </option>
            @endforeach
          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <hr><hr>

    <div class="row">
      <div class="col-md-2">
        <div class="card card-secondary collapsed-card">
          <div class="card-header">
            <h3 class="card-title"> Masukan Biaya <br> </h3>
            <div class="card-tools">
              <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#registrasi">
                <b>+</b>
              </button>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->
    <hr>

<!-- =========================================================== -->

  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<!-- <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
  <i class="fas fa-chevron-up"></i>
</a> -->




<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">  
          <div class="row">
            <div class="col-md-12">

              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title"> <b> Data History Pembayaran {{ ($siswa->nama) }}, 
                    ({{($siswa->jenjang)}},{{($siswa->kelas)}},{{($siswa->ruang)}}),({{($siswa->kampus)}},{{($siswa->gedung)}},{{($siswa->kamar)}})</b> </h3>
                </div>
                <div class="panel-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th> No </th>
                        <th> Nama </th>
                        <th> Status Registrasi </th>
                        <th> Status Lunas </th>
                        <th> Waktu Membayar </th>
                        <th> Sudah Membayar </th>
@if ($siswa->jalurpendaftaran == 'Online')
                        <th> Bukti Pembayaran </th>
@endif
                        <th> Aksi </th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- Variabel php untuk nomor-->    <?php
                      $nomer = 1;
                      ?>
                      <!-- ambil data di database-->
                      @foreach($biaya_awal_masuk as $biaya)
                      <tr>
                        <th>{{ $nomer++}}</th>
                        <td>{{ $biaya->nama}} </td>
                        <td>{{ $biaya->registrasi}} </td>
                        <td>{{ $biaya->lunas}} </td>
                        <td> {{ date('d F Y', strtotime($biaya->waktu)) }} </td>
                        <td> Rp. {{ number_format( $biaya->biaya )}} </td>
@if ($siswa->jalurpendaftaran == 'Online')
                        <td>
                          <h4> <img src="{{$biaya->getUpload()}}" width="20%" height="100"> </h4>
                        </td>
@endif
                        <td><a href="{{url('daftar_online')}}/{{$siswa->id}}/{{$biaya->id}}/{{'deleteregistrasi'}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus')">Delete</a>
                        </td>
                      </tr>
                      @endforeach  
                    </tbody>
                  </table>
                  <a class="text-danger"> <b>Warning...!! Nomor 1 jangan dihapus</b> </a>
                  <a href="{{ url('daftar_online') }}/{{$siswa->id}}/{{('printregistrasi')}}" target="_blank" class="btn btn-success float-right"></i> Print Registrasi </a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- Tambah Data Biaya Awal Masuk -->
<div class="modal fade" id="registrasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h class="modal-title" id="exampleModalLabel">Tambah Data Biaya Awal Masuk</h>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form action="{{url('daftar_online')}}/{{$siswa->id}}/addbiaya"  method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}

@if ($biaya->registrasi == 'belum')
 
                <!-- registrasi -->
                <div class="form-group row">                        
                  <div class="col-md-12">
                    <input readonly name="registrasi" id="registrasi" type="hidden" class="form-control" value="sudah registrasi">
                  </div>
                </div>

@else($biaya->registrasi == 'sudah registrasi')

                <!-- registrasi -->
                <div class="form-group row">                        
                  <div class="col-md-12">
                    <input readonly name="registrasi" id="registrasi" type="hidden" class="form-control" value="angsuran">
                  </div>
                </div>  

@endif
                <!-- registrasi -->
      <!-- 
                <div class="form-group row">
                  <label> Registrasi / Angsuran </label> <br>
                  <span> jika <b>baru</b>  registrasi, silahkan pilih = <b>sudah registrasi</b> </span> <br>
                  <span> jika <b>sudah pernah</b> registrasi, silahkan pilih = <b>angsuran</b> </span>  <br><br>
                  <select class="form-control" id="registrasi" class="form-control" name="registrasi" value="{{ old('registrasi') }}">
                    <option selected> sudah registrasi </option>
                    <option> angsuran </option>
                  </select> 
                </div> 
       -->             

                <!-- waktu -->
<!--                 <div class="form-group row">
                  <label> Waktu Membayar</label>
                  <input name="waktu" type="date" class="form-control @error('waktu') is-invalid @enderror" id="waktu" value="{{old('waktu')}}" required autocomplete="waktu" autofocus>
                  @error('waktu')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> -->

                <!-- waktu -->
                    <input type="hidden" name="waktu" id="waktu" value="<?php echo date("d-m-Y"); ?>">

@if ($biaya->lunas == 'belum' || $biaya->lunas == 'belum lunas' )
                <!-- biaya -->
                <div class="form-group row">
                  <label> Masukan Biaya</label>
                  <input name="biaya" type="text" class="form-control @error('biaya') is-invalid @enderror" id="biaya" value="{{old('biaya')}}" required autocomplete="biaya" autofocus>
                  @error('biaya')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

          <!-- upload -->
          <div class="form-group row">
            <label> Upload Bukti Pembayaran </label>
            <input name="upload" type="file" class="form-control @error('upload') is-invalid @enderror" id="upload" aria-describedby="emailHelp" value="{{old('upload')}}" required autocomplete="upload" autofocus>
            @error('upload')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

                <!-- lunas -->
                <div class="form-group row">
                  <label> Status Lunas </label> <br>
                  <select class="form-control" id="lunas" class="form-control @error('biaya') is-invalid @enderror" name="lunas" value="{{ old('lunas') }}" required autocomplete="biaya" autofocus>
                    <option> -- Pilih -- </option>
                    <option> belum lunas </option>
                    <option> sudah lunas </option>
                  </select> 
                  @error('lunas')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>  
@else($biaya->registrasi == 'sudah lunas')
                <h3>Sudah lunas</h3>
@endif
                <!-- <input type="hidden" name="lunas" id="lunas" value="sudah lunas"> -->

                <!-- upload -->
      <!--           
                <div class="form-group row">
                  <label for="upload"> Upload Bukti Pembayaran </label>
                  <input name="upload" type="file" class="form-control @error('upload') is-invalid @enderror" id="upload" aria-describedby="emailHelp" value="{{old('upload')}}" required autocomplete="upload" autofocus>
                  @error('upload')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div> 
      -->

        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>

      </form>
    </div>

  </div>
</div>
</div>





@endsection