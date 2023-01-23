@extends('layouts.app')

@section('content')


<head>
  <title> perizinan - Pondok Pesantren Askhabul Kahfi</title>
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
            <h3 class="card-title"> <b>Data Perizinan {{$siswa->nama}}</b> </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Keperluan</th>
                  <th>Tanggal Izin</th>
                  <th>Tanggal Kembali</th>
                  <th>Status</th>
                </tr>
              </thead>
              @foreach ($perizinan as $item)
              <tbody>
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->siswa->nama }}</td>
                  <td>{{ $item->keperluan }}</td>
                  <td>{{ date('d F Y', strtotime($item->created_at)) }}</td>
                  <td>{{ date('d F Y', strtotime($item->tgl_kembali)) }}</td>

                  <td align="center">
                    @if ($item->status == 0)
                    <span class="badge badge-danger text-white">Not Verify</span>
                    @elseif ($item->status == 1)
                    <span class="badge badge-warning " >Verify - 
                      @if ( date(('Y-m-d')) > $item->tgl_kembali) 
                      <span class="text-danger">Terlambat</span>
                      @else
                      Masa Izin
                      @endif
                    </span>
                    @else
                    <span class="badge badge-success">Sudah Kembali</span>
                    @endif
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>

            <!-- Button trigger modal -->
            <div>
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




  @endsection