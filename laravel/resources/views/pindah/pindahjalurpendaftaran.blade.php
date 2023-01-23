@extends('layouts.app')

@section('content')

<head>
  <title> Pindah Jalur - Pondok Pesantren Askhabul Kahfi</title>
</head>

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
            <h3 class="card-title"> Edit Data Jalur </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <select name="list_jalurpendaftaran" id="list_jalurpendaftaran">
              <option> Santri Lama </option>
              <option> Offline </option>
              <option> Online </option>
            </select>
            <button onclick="funcPindahjalurpendaftaran()">Pindah jalurpendaftaran</button>                           

            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th> Pindah Data </th>
                  <th>Nama Santri</th>
                  <th>Jalur Pendaftaran</th>
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
                  <td>
                    <div class="checkbox checkbox-success">
                        <input name="list_siswa[]" class="list_siswa" type="checkbox" value="{{$siswa->id}}">
                    </div>
                  </td>
                  <td>{{ $siswa->nama}} </td>
                  <td>{{ $siswa->jalurpendaftaran}} </td>
                </tr>
                @endforeach  
              </tbody>
            </table>

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

  <!-- ____________________________________________________________________________ -->

<script>
function funcPindahjalurpendaftaran(){
    let siswa_id = [];
    $(".list_siswa:checked").each(function(){
        siswa_id.push($(this).val());
    });
    let jalurpendaftaran = $("#list_jalurpendaftaran").val();
    $.ajax({
        type : 'post',
        url  : "{{url('siswa/pindahjalurpendaftaran')}}",
        data : {siswa_id:siswa_id, jalurpendaftaran: jalurpendaftaran, _token: "{{ csrf_token() }}"},
        dataType : 'json',
        success : function(res) {
          
        }
    });
    alert('berhasil');
    location.reload();
  }
</script>




@endsection
