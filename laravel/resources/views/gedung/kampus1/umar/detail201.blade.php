@extends('layouts.app')


@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Profile</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
          <li class="breadcrumb-item active">Profile Santri</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">

            <h3 class="profile-username text-center">Nama Santri</h3>
            <h4 class="text-muted text-center"> <b> {{ $siswa->nama}} </b>  </h4>

            <ul class="list-group list-group-unbordered mb-3">
              <li>
                <h4> <img src="{{$siswa->getFoto()}}" width="100%"> </h4>
                <p> <a href="{{ url('umar201') }}/{{$siswa->id}}/{{('editfoto201')}}" class="btn btn-primary btn-sm"> Masukan Foto </a> </p>
              </li> 
              <li class="list-group-item">
                <b>Nama Santri</b> <a class="float-right"> {{ $siswa->nama}} </a>
              </li>           
              <li class="list-group-item">
                <b>Alamat</b> <a class="float-right"> {{ $siswa->alamat}} </a>
              </li>
              <li class="list-group-item">
                <b>Wali Murid</b> <a class="float-right"> {{ $siswa->wali}} </a>
              </li>
              <li class="list-group-item">
                <b>Nomor HP</b> <a class="float-right"> {{ $siswa->nohp}} </a>
              </li>
            </ul>

        <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Gedung</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-file-alt mr-1"></i> Kampus </strong>
                <p class="text-muted">{{ $siswa->kampus}}</p>
                <hr>
                <strong><i class="fas fa-file-alt mr-1"></i> Gedung </strong>
                <p class="text-muted">{{ $siswa->gedung}}</p>
                <hr>
                <strong><i class="fas fa-file-alt mr-1"></i> Kamar </strong>
                <p class="text-muted">{{ $siswa->kamar}}</p>                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kelas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-file-alt mr-1"></i> Jenjang </strong>
                <p class="text-muted">{{ $siswa->jenjang}}</p>
                <hr>
                <strong><i class="fas fa-file-alt mr-1"></i> Kelas </strong>
                <p class="text-muted">{{ $siswa->kelas}}</p>
                <hr>
                <strong><i class="fas fa-file-alt mr-1"></i> Ruang </strong>
                <p class="text-muted">{{ $siswa->ruang}}</p>                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->

      <div class="col-md-9">
        <div class="card">

          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#pelanggaran" data-toggle="tab">
                Data Pelanggaran
              </a></li>
              <li class="nav-item"><a class="nav-link" href="#prestasi" data-toggle="tab">
                Data Prestasi
              </a></li>
              <li class="nav-item"><a class="nav-link" href="#perizinan" data-toggle="tab">
                Data Perizinan
              </a></li>
              <li class="nav-item"><a class="nav-link" href="#penitipan" data-toggle="tab">
                Data Penitipan Uang
              </a></li>
            </ul>
          </div><!-- /.card-header -->

<!-- _____________________________________________________________________________ -->
          <div class="card-body">
            <div class="tab-content">
<!-- Data Pelanggaran ____________________________________________________________ -->
              <div class="active tab-pane" id="pelanggaran">
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
                        <h3> <b>  Data Santri {{$siswa->nama}}  </b>   </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Tanggal</th>
                              <th>Bentuk Pelanggaran</th>
                              <th>Hukuman</th>
                              <th>Catatan</th>
                              <th>Lokasi</th>
                              <th>Skor</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <!-- Variabel php untuk nomor-->    <?php
                            $nomer = 1;
                            ?>
                            <!-- ambil data di database-->
                            @foreach($siswa->hukuman as $hukuman)
                            <tr>
                              <!-- <th>{{ $nomer++}}</th> -->
                              <td> {{$hukuman->pelanggaran}} </td>
                              <td> {{$hukuman->pivot->tanggal}} </td>
                              <td> {{$hukuman->pivot->bentuk}} </td>
                              <td> {{$hukuman->pivot->hukum}} </td>
                              <td> {{$hukuman->pivot->catatan}} </td>
                              <td> {{$hukuman->pivot->kategori}} </td>
                              <td> {{$hukuman->pivot->skor}} </td>
                              <td>
                                <a href="{{ url('umar201') }}/{{$siswa->id}}/{{$hukuman->id}}/{{'deletepelanggaranumar201'}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus')">Delete</a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <!-- Button trigger modal -->
                        <!-- Tambah NilaiPelanggaran Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#NilaiPelanggaran">
                          Tambah Pelanggaran
                        </button>
                        <a href="{{ url('umar201') }}/{{$siswa->id}}/{{('printpelanggaran201')}}" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                        <a href="{{ url('umar201') }}/{{$siswa->id}}/{{('exportpelanggaran201')}}" class="btn btn-success">Export</a>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.tab-pane -->

<!-- Data Prestasi ____________________________________________________________ -->
              <div class="tab-pane" id="prestasi">
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
                        <h3> <b>  Data Santri {{$siswa->nama}}  </b>   </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Tanggal</th>
                              <th>Kategori</th>
                              <th>Tingkat</th>
                              <th>Catatan</th>
                              <th>Skor</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <!-- Variabel php untuk nomor-->    <?php
                            $nomer = 1;
                            ?>
                            <!-- ambil data di database-->
                            @foreach($siswa->hadiah as $hadiah)
                            <tr>
                              <!-- <th>{{ $nomer++}}</th> -->
                              <td> {{$hadiah->prestasi}} </td>
                              <td> {{$hadiah->pivot->tanggal}} </td>
                              <td> {{$hadiah->pivot->kategori}} </td>
                              <td> {{$hadiah->pivot->tingkat}} </td>
                              <td> {{$hadiah->pivot->catatan}} </td>
                              <td> {{$hadiah->pivot->skor}} </td>
                              <td>
                                <a href="{{ url('umar201') }}/{{$siswa->id}}/{{$hadiah->id}}/{{'deleteprestasiumar201'}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus')">Delete</a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <!-- Button trigger modal -->
                        <!-- Tambah NilaiPrestasi Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#NilaiPrestasi">
                          Tambah Prestasi
                        </button>
                        <a href="{{ url('umar201') }}/{{$siswa->id}}/{{('printprestasi201')}}" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                        <a href="{{ url('umar201') }}/{{$siswa->id}}/{{('exportprestasi201')}}" class="btn btn-success">Export</a>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.tab-pane -->


              <div class="tab-pane" id="perizinan">
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="penitipan">
                
              </div>
              <!-- /.tab-pane -->


            </div>
            <!-- /.tab-content -->
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



  <!-- Tambah Nilai Pelanggaran -->
  <div class="modal fade" id="NilaiPelanggaran" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Pelanggaran</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{url('umar201')}}/{{$siswa->id}}/addpelanggaranumar201" method="POST" enctype="multipart/form-data" >
            {{ csrf_field() }}
            <!-- Nama -->
            <div class="form-group">
              <label for="nama"> Nama </label>
              <input readonly name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama" value="{{ $siswa->nama}}">
              @if($errors->has('nama'))
              <span class="help-block"> {{$errors->first('nama')}} </span>
              @endif
            </div>
            <!-- pelanggaran -->
            <div class="form-group">
              <label for="hukuman">Data Pelanggaran  (JANGAN SAMPAI LUPA) </label>
              <select class="form-control" id="hukuman" name="hukuman">
                @foreach($sanksi as $mp)
                <option value="{{$mp->id}}"> {{$mp->pelanggaran}} </option>
                @endforeach
              </select>
            </div>
            <!-- Tanggal -->
            <div class="form-group">
              <label for="tanggal"> Tanggal </label>
              <input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tanggal" value="{{old('tanggal')}}">
              @if($errors->has('tanggal'))
              <span class="help-block"> {{$errors->first('tanggal')}} </span>
              @endif
            </div>
            <!-- bentuk -->
            <div class="form-group">
              <label for="bentuk"> Bentuk Pelanggaran </label>
              <input name="bentuk" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="bentuk" value="{{old('bentuk')}}">
              @if($errors->has('bentuk'))
              <span class="help-block"> {{$errors->first('bentuk')}} </span>
              @endif
            </div>
            <!-- hukum -->
            <div class="form-group">
              <!-- ambil dari database pesan --> 
              <label for="hukum"> Hukuman </label>
              <select class="form-control" id="hukum" name="hukum">
                @foreach($nakal as $ka)
                  <option value="{{$ka->sanksi}}">{{$ka->sanksi}}</option>
                @endforeach
              </select>
            </div>
            <!-- catatan -->
            <div class="form-group">
              <label for="catatan"> Catatan </label>
              <input name="catatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="catatan" value="{{old('catatan')}}">
           </div>
            <!-- kategori -->
            <div class="form-group">
              <label for="kategori"> Kategori </label>
              <select id="kategori" class="form-control" id="kategori" class="form-control @error('kategori') is-invalid @enderror" name="kategori" value="{{ old('kategori') }}" required autocomplete="kategori" autofocus>
                <option selected>-- Pilih Kategori --</option>
                <option> Pondok </option>
                <option> Sekolah </option>
              </select>
              @error('kategori')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <!-- skor -->
            <div class="form-group">
              <label for="skor"> Skor </label>
              <input name="skor" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="skor" value="{{old('skor')}}">
              @if($errors->has('skor'))
              <span class="help-block"> {{$errors->first('skor')}} </span>
              @endif
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<!-- ______________________________________________________________________________________________________ -->
  <!-- Tambah Nilai Prestasi -->
  <div class="modal fade" id="NilaiPrestasi" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Prestasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{url('umar201')}}/{{$siswa->id}}/addprestasiumar201" method="POST" enctype="multipart/form-data" >
            {{ csrf_field() }}
            <!-- Nama -->
            <div class="form-group">
              <label for="nama"> Nama </label>
              <input readonly name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama" value="{{ $siswa->nama}}">
              @if($errors->has('nama'))
              <span class="help-block"> {{$errors->first('nama')}} </span>
              @endif
            </div>
            <!-- prestasi -->
            <div class="form-group">
              <label for="hadiah">Data Prestasi  (JANGAN SAMPAI LUPA) </label>
              <select class="form-control" id="hadiah" name="hadiah">
                @foreach($senang as $sn)
                <option value="{{$sn->id}}"> {{$sn->prestasi}} </option>
                @endforeach
              </select>
            </div>
            <!-- Tanggal -->
            <div class="form-group">
              <label for="tanggal"> Tanggal </label>
              <input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tanggal" value="{{old('tanggal')}}">
              @if($errors->has('tanggal'))
              <span class="help-block"> {{$errors->first('tanggal')}} </span>
              @endif
            </div>
            <!-- kategori -->
            <div class="form-group">
              <label for="kategori"> Kategori </label>
              <input name="kategori" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="kategori" value="{{old('kategori')}}">
              @if($errors->has('kategori'))
              <span class="help-block"> {{$errors->first('kategori')}} </span>
              @endif
            </div>            
            <!-- tingkat -->
            <div class="form-group">
              <label for="tingkat"> Tingkat </label>
              <input name="tingkat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tingkat" value="{{old('tingkat')}}">
              @if($errors->has('tingkat'))
              <span class="help-block"> {{$errors->first('tingkat')}} </span>
              @endif
            </div>
            <!-- catatan -->
            <div class="form-group">
              <label for="catatan"> Catatan </label>
              <input name="catatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="catatan" value="{{old('catatan')}}">
           </div>

            <!-- skor -->
            <div class="form-group">
              <label for="skor"> Skor </label>
              <input name="skor" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="skor" value="{{old('skor')}}">
              @if($errors->has('skor'))
              <span class="help-block"> {{$errors->first('skor')}} </span>
              @endif
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</section>
<!-- /.content -->

@endsection

