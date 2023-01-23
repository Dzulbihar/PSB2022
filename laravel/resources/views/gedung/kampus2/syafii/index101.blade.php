@extends('layouts.app')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Semua Santri </h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
          <li class="breadcrumb-item active">Data Semua Santri</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

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
            <h3 class="card-title">Data Santri Ponpes Askhabul Kahfi</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Santri</th>
                  <th>Kampus</th>
                  <th>Kamar</th>
                  <th>Jenjang</th>
                  <th>Kelas</th>
                  <th>Alamat</th>
                  <th>Wali murid</th>
                  <th>Nomor HP</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <!-- Variabel php untuk nomor-->    <?php
                $nomer = 1;
                ?>
                <!-- ambil data di database-->
                @foreach($data_siswa as $siswa)
                <tr>
                  <th>{{ $nomer++}}</th>
                  <td>{{ $siswa->nama}} </td>
                  <td>{{ $siswa->kampus}} </td>
                  <td>{{ $siswa->gedung}}, {{ $siswa->kamar}} </td>
                  <td>{{ $siswa->jenjang}} </td>
                  <td>{{ $siswa->kelas}}, {{ $siswa->ruang}} </td>
                  <td>{{ $siswa->alamat}} </td>
                  <td>{{ $siswa->wali}} </td>
                  <td>{{ $siswa->nohp}} </td>
                  <td>
                    <a href="{{ url('syafii101') }}/{{$siswa->id}}/{{('detail101')}}" class="btn btn-success btn-sm">Detail</a>
                    <a href="{{ url('syafii101') }}/{{$siswa->id}}/{{('edit101')}}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ url('syafii101') }}/{{$siswa->id}}/{{('delete101')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus ?')">Delete</a>
                  </td>
                </tr>
                @endforeach  
              </tbody>
            </table>

            <!-- Button trigger modal -->
            <div>
              <button type="button" class="btn btn-primary btn-sm float-left" data-toggle="modal" data-target="#siswa">
                Tambah Data
              </button>
              <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#SiswaImport">
                Import Data Excel
              </a> 
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

  <!-- Modal Import -->
  <div class="modal fade" id="SiswaImport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        @if ($message= Session::get('success'))
        <script>
          alert('Berhasil Mengimport Data!');
        </script>
        @endif
        <!--         <form action="
        HAPUUSSS
        " method="post" enctype="multipart/form-data">
                  <div class="modal-body">
                    <div class="form-group">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <input type="file" name="file" required="required">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Import</button>
                    </div>
                  </div>
                </form> -->
      </div>
    </div>
  </div>

<!-- Modal ------------------------------------------------- -->
  <div class="modal fade" id="siswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Santri</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
<!-- Formulir ______________________________________________________________________________________________ -->
        <div class="modal-body">

          <form action="{{url('syafii101/create101')}}" method="POST" enctype="multipart/form-data" >
            {{csrf_field()}}
<!-- __________________________________________________________________________________ -->
    <!-- nama -->
            <div class="form-group row">                        
              <div class="col-md-12">
                <label for="#"> Nama Santri </label>
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Nama Siswa" required autocomplete="nama" autofocuku>
                @error('nama')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
    <!-- kampus -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <label for="#"> Kampus </label>
                <select id="kampus" class="form-control" id="kampus" class="form-control @error('kampus') is-invalid @enderror" name="kampus" value="{{ old('kampus') }}" required autocomplete="kampus" autofocus>
                  <option selected>--Pilih Kampus--</option>
                  <option> Kampus 1 </option>
                  <option> Kampus 2 </option>
                  <option> Kampus 3 </option>
                  <option> Kampus 4 </option>
                </select>
                @error('kampus')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror   
              </div>
    <!-- gedung -->             
              <div class="col-md-4">
                <label for="#"> Gedung </label>
                <select id="gedung" class="form-control" id="gedung" class="form-control @error('gedung') is-invalid @enderror" name="gedung" value="{{ old('gedung') }}" required autocomplete="gedung" autofocus>
                  <option selected>--Pilih Gedung--</option>
                  <option> Ummar bin Khattab  </option>
                  <option> Utsman bin Affan  </option>
                  <option> Imam Ghozali  </option>
                  <option> Imam Syafii </option>
                  <option> Imam Bukhori </option>
                  <option> Imam Muslim </option>
                  <option> Ibnu Anfas </option>
                  <option> Imam Tobari </option>
                  <option> Khotijah  </option>
                  <option> Hj. Sofiyatun  </option>
                  <option> Robiah  </option>
                  <option> Masyitoh  </option>
                  <option> Gedung A  </option>
                  <option> Gedung B </option>
                </select>
                @error('gedung')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror   
              </div>
    <!-- kamar -->
              <div class="col-md-4">
                <label for="#"> Kamar </label>
                <select id="kamar" class="form-control" id="kamar" class="form-control @error('kamar') is-invalid @enderror" name="kamar" value="{{ old('kamar') }}" required autocomplete="kamar" autofocus>
                  <option selected>--Pilih Kamar--</option>
                  <option> 101 </option>
                  <option> 102 </option>
                  <option> 103 </option>
                  <option> 104 </option>
                  <option> 105 </option>
                  <option> 106 </option>
                  <option> 107 </option>
                  <option> 108 </option>
                  <option> 109 </option>
                  <option> 110 </option>
                  <option> 111 </option>
                  <option> 112 </option>
                  <option> 113 </option>
                  <option> 114 </option>
                  <option> 115 </option>
                  <option> 116 </option>
                  <option> 201 </option>
                  <option> 202 </option>
                  <option> 203 </option>
                  <option> 204 </option>
                  <option> 205 </option>
                  <option> 206 </option>
                  <option> 207 </option>
                  <option> 208 </option>
                  <option> 209 </option>
                  <option> 210 </option>
                  <option> 211 </option>
                  <option> 212 </option>
                  <option> 213 </option>
                  <option> 214 </option>
                  <option> 215 </option>
                  <option> 216 </option>
                  <option> 301 </option>
                  <option> 302 </option>
                  <option> 303 </option>
                  <option> 304 </option>
                  <option> 305 </option>
                  <option> 306 </option>
                  <option> 307 </option>
                  <option> 308 </option>
                  <option> 309 </option>
                  <option> 310 </option>
                  <option> 311 </option>
                  <option> 312 </option>
                  <option> 313 </option>
                  <option> 314 </option>
                  <option> 315 </option>
                  <option> 316 </option>
                  <option> 401 </option>
                  <option> 402 </option>
                  <option> 403 </option>
                  <option> 404 </option>
                  <option> 405 </option>
                  <option> 406 </option>
                  <option> 407 </option>    
                  <option> 408 </option>
                  <option> 409 </option> 
                  <option> 410 </option> 
                  <option> 411 </option> 
                  <option> 412 </option> 
                  <option> 413 </option> 
                  <option> 414 </option> 
                  <option> 415 </option> 
                  <option> 416 </option>                   
                </select>
                @error('kamar')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror   
              </div>
            </div>
    <!-- jenjang -->                        
            <div class="form-group row">
              <div class="col-md-4">
                <label for="#"> Jenjang </label>
                <select id="jenjang" class="form-control" id="jenjang" class="form-control @error('jenjang') is-invalid @enderror" name="jenjang" value="{{ old('jenjang') }}" required autocomplete="jenjang" autofocus>
                  <option selected>--Pilih Jenjang--</option>
                  <option> SMP 1 </option>
                  <option> SMP 2 </option>
                  <option> MTs </option>
                  <option> SMK </option>
                  <option> MA </option>
                </select>
                @error('jenjang')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror   
              </div>
    <!-- kelas -->                        
              <div class="col-md-4">
                <label for="#"> Kelas </label>
                <select id="kelas" class="form-control" id="kelas" class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{ old('kelas') }}" required autocomplete="kelas" autofocus>
                  <option selected>--Pilih Kelas--</option>
                  <option> 7 </option>
                  <option> 8 </option>
                  <option> 9 </option>
                  <option> 10 </option>
                  <option> 11 </option>
                  <option> 12 </option>
                </select>
                @error('kelas')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror   
              </div>
    <!-- ruang -->                        
              <div class="col-md-4">
                <label for="#"> Ruang </label>
                <select id="ruang" class="form-control" id="ruang" class="form-control @error('ruang') is-invalid @enderror" name="ruang" value="{{ old('ruang') }}" required autocomplete="ruang" autofocus>
                  <option selected>--Pilih Ruang--</option>
                  <option> a </option>
                  <option> b </option>
                  <option> c </option>
                  <option> d </option>
                  <option> e </option>
                  <option> f </option>
                  <option> g </option>
                  <option> h </option>
                  <option> i </option>
                  <option> j </option>
                  <option> k </option>
                  <option> l </option>
                  <option> TKJ 1 </option>
                  <option> TKJ 2 </option>
                  <option> TKJ 3 </option>
                  <option> TKJ 4 </option>
                  <option> TKR 1 </option>
                  <option> TKR 2 </option>
                  <option> TKR 3 </option>
                  <option> TKR 4 </option>
                  <option> MIPA 1 </option>
                  <option> MIPA 2 </option>
                  <option> MIPA 3 </option>
                  <option> MIPA 4 </option>
                </select>
                @error('ruang')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror   
              </div>
            </div>                        
    <!-- alamat -->
            <div class="form-group row">                        
              <div class="col-md-6">
                <label for="#"> Alamat </label>
                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Alamat" required autocomplete="alamat" autofocuku>
                @error('alamat')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
    <!-- wali -->                        
              <div class="col-md-6">
                <label for="#"> Wali Murid </label>
                <input id="wali" type="text" class="form-control @error('wali') is-invalid @enderror" name="wali" value="{{ old('wali') }}" placeholder="Wali Murid" required autocomplete="wali" autofocuku>
                @error('wali')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
    <!-- nohp -->
            <div class="form-group row">                       
              <div class="col-md-6">
                <label for="#"> Nomor HP </label>
                <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ old('nohp') }}" placeholder="Nomor HP" required autocomplete="nohp" autofocuku>
                @error('nohp')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
    <!-- foto -->                        
              <div class="col-md-6">
                <label for="#"> Foto Santri (jika ada) </label>
                <input id="foto" type="file" class="form-control" name="foto" value="{{ old('foto') }}">
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
