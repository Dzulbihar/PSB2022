@extends('layouts.app')

@section('content')

<head>
  <title> Pindah Kamar - Pondok Pesantren Askhabul Kahfi</title>
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
            <h3 class="card-title"> Edit Data Kamar </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <select name="list_kampus" id="list_kampus">
              @foreach($kampus as $ka)
              <option>
                {{$ka->kampus}}
              </option>
              @endforeach
            </select>
            <button onclick="funcPindahKampus()">Pindah Kampus</button>            

            <select name="list_gedung" id="list_gedung">
              @foreach($gedung as $ka)
              <option>
                {{$ka->kab_kode}}
              </option>
              @endforeach
            </select>
            <button onclick="funcPindahGedung()">Pindah Gedung</button>

            <select name="list_kamar" id="list_kamar">
              <option selected>--- Kamar ---</option>    
            </select>
            <button onclick="funcPindahKamar()">Pindah Kamar</button>                  


            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th> Pindah Data </th>
                  <th>Nama Santri</th>
                  <th>Kampus</th>
                  <th>Gedung</th>
                  <th>Kamar</th>
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
                  <td>{{ $siswa->kampus}} </td>
                  <td>{{ $siswa->gedung}} </td>
                  <td>{{ $siswa->kamar}} </td>
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


  <!-- ________________dropdown__________________________________ -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    //get Kamar Gedung
  $('#list_gedung').change(function(){
      var kabID = $(this).val();    
      if(kabID){
          $.ajax({
             type:"GET",
             // url:"{{url('getPelanggaranBentuk')}}?kabID="+kabID,
             url:"/getKamar?kabID="+kabID,
             dataType: 'JSON',
             success:function(res){               
              if(res){
                  $("#list_kamar").empty();
                  // $("#desa").empty();
                  $("#list_kamar").append('<option>--- Pilih Kamar ---</option>');
                  // $("#desa").append('<option>---Pilih Desa---</option>');
                  $.each(res,function(nama,kode){
                      $("#list_kamar").append('<option value="'+kode+'">'+kode+'</option>');
                  });
              }else{
                 $("#list_kamar").empty();
                 // $("#desa").empty();
              }
             }
          });
      }else{
          $("#list_kamar").empty();
          // $("#desa").empty();
      }      
     });
  </script>



<script>
function funcPindahKampus(){
    let siswa_id = [];
    $(".list_siswa:checked").each(function(){
        siswa_id.push($(this).val());
    });
    let kampus = $("#list_kampus").val();
    $.ajax({
        type : 'post',
        url  : "{{url('siswa/pindahkampus')}}",
        data : {siswa_id:siswa_id, kampus: kampus, _token: "{{ csrf_token() }}"},
        dataType : 'json',
        success : function(res) {
          
        }
    });
    alert('berhasil');
    location.reload();
  }
</script>

<script>
function funcPindahGedung(){
    let siswa_id = [];
    $(".list_siswa:checked").each(function(){
        siswa_id.push($(this).val());
    });
    let gedung = $("#list_gedung").val();
    $.ajax({
        type : 'post',
        url  : "{{url('siswa/pindahgedung')}}",
        data : {siswa_id:siswa_id, gedung: gedung, _token: "{{ csrf_token() }}"},
        dataType : 'json',
        success : function(res) {
          
        }
    });
    alert('berhasil');
    location.reload();
  }
</script>

<script>
function funcPindahKamar(){
    let siswa_id = [];
    $(".list_siswa:checked").each(function(){
        siswa_id.push($(this).val());
    });
    let kamar = $("#list_kamar").val();
    $.ajax({
        type : 'post',
        url  : "{{url('siswa/pindahkamar')}}",
        data : {siswa_id:siswa_id, kamar: kamar, _token: "{{ csrf_token() }}"},
        dataType : 'json',
        success : function(res) {
          
        }
    });
    alert('berhasil');
    location.reload();
  }
</script>


@endsection
