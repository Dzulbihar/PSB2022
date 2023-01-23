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
              <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Data Pelanggaran</a></li>
            </ul>
          </div><!-- /.card-header -->

          <div class="card-body">
            <div class="tab-content">

              <div class="active tab-pane" id="activity">
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
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Tanggal</th>
                              <th>Bentuk Pelanggaran</th>
                              <th>Hukuman</th>
                              <th>Catatan</th>
                              <th>Kategori</th>
                              <th>Skor</th>
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
                              <td> {{$hukuman->pivot->nama}} </td>
                              <td> {{$hukuman->pivot->tanggal}} </td>
                              <td> {{$hukuman->pivot->bentuk}} </td>
                              <td> {{$hukuman->pivot->hukum}} </td>
                              <td> {{$hukuman->pivot->catatan}} </td>
                              <td> {{$hukuman->pivot->kategori}} </td>
                              <td> {{$hukuman->pivot->skor}} </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <a href="{{ url('umar201') }}/{{$siswa->id}}/{{('detail201')}}" class="btn btn-success btn-sm">Kembali</a>
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

            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->




</section>
<!-- /.content -->

@endsection



