@extends('layouts.app')

@section('content')
    <!-- Main content -->
<section class="content">
    <div class="container-fluid">
<!-- Notifikasi ------------------------------------------------- -->
        @if(session('sukses'))
        <div class="alert alert-success mt-3" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
            <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-header">
                            <h2> <a href="{{url('/perizinan')}}">Perizinan Santri</a> &raquo; Detail</h2>
                        </div>
                    <div class="card-body ">
                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <strong><i class="fas fa-user mr-1"></i>Nama</strong>
                                        <p class="text-muted">
                                        {{ $data->siswa->nama }}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-user mr-1"></i>Kelas</strong>
                                        <p class="text-muted">
                                        {{ $data->siswa->kelas }} {{ $data->siswa->jenjang }} 
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-user mr-1"></i>Kamar</strong>
                                        <p class="text-muted">
                                        {{ $data->siswa->gedung }}  {{ $data->siswa->kamar }}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-user mr-1"></i>Alamat</strong>
                                        <p class="text-muted">
                                        {{ $data->siswa->desa }},{{ $data->siswa->kecamatan }},{{ $data->siswa->state }},{{ $data->siswa->country }}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-user mr-1"></i>Wali</strong>
                                        <p class="text-muted">
                                        Bpk.{{ $data->siswa->namaayah }}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-user mr-1"></i>Telepon</strong>
                                        <p class="text-muted">
                                        {{ $data->siswa->nohp }}
                                        </p>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="card-body">
                                    <strong><i class="fas fa-user mr-1"></i>Keperluan</strong>
                                    <p class="text-muted">
                                    {{ $data->keperluan }}
                                    </p>
                                    <hr>
                                    <strong><i class="fas fa-user mr-1"></i>Catatan</strong>
                                    <p class="text-muted">
                                    {{ $data->catatan }}
                                    </p>
                                    <hr>
                                    <strong><i class="fas fa-user mr-1"></i>Tanggal Izin</strong>
                                    <p class="text-muted">
                                    {{ date('d F Y', strtotime($data->created_at)) }}
                                    </p>
                                    <hr>
                                    <strong><i class="fas fa-user mr-1"></i>Tanggal Kembali</strong>
                                    <p class="text-muted">
                                    {{ date('d F Y', strtotime($data->tgl_kembali)) }}
                                    </p>
                                    <hr>
                                    <strong><i class="fas fa-user mr-1"></i>Status</strong>
                                    <p class="text-muted">
                                        @if ($data->status == 0)
                                        <span class="badge badge-danger text-white">Not Verify</span>
                                    @elseif ($data->status == 1)
                                        <span class="badge badge-warning " >Verify - 
                                          @if ( date(('Y-m-d')) > $data->tgl_kembali) 
                                            <span class="text-danger">Terlambat</span>
                                          @else
                                            Masa Izin
                                          @endif
    
                                        </span>
                                    @else
                                        <span class="badge badge-success">Sudah Kembali</span>
                                    @endif
                                    </p>
                                    <a href="{{url('/perizinan')}}/{{ $data->id }}/edit" class="btn btn-primary mt-4 btn-sm">
                                        Edit Data Santri
                                      </a>
                                  </div>
                                </div>
                            </div>
                           
                        </div>
            </div>
        </div>
    </div>
    </section>
    <!-- /.content -->




@endsection






