@extends('layouts.app')

@section('content')

<head>
  <title> Pindah Kelas - Pondok Pesantren Askhabul Kahfi</title>
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
            <h3 class="card-title">Edit Data Kelas </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <select name="list_jenjang" id="list_jenjang">
              @foreach($jenjang as $ka)
              <option>
                {{$ka->jenjang}}
              </option>
              @endforeach
            </select>
            <button onclick="funcPindahJenjang()">Pindah Jenjang</button>

            <select name="list_kelas" id="list_kelas">
              @foreach($kelas as $ka)
              <option>
                {{$ka->kab_kode}}
              </option>
              @endforeach
            </select>
            <button onclick="funcPindahKelas()">Pindah Kelas</button>

            <select name="list_ruang" id="list_ruang">
              <option selected>--- Ruang ---</option>
            </select>
            <button onclick="funcPindahRuang()">Pindah Ruang</button>            

            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th> Pindah Data </th>
                  <th>Nama Santri</th>
                  <th>Jenjang</th>
                  <th>Kelas</th>
                  <th>Ruang</th>
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
                  <td>{{ $siswa->jenjang}} </td>
                  <td>{{ $siswa->kelas}} </td>
                  <td>{{ $siswa->ruang}} </td>
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

  <!-- ________________________________________________________________________________ -->

  <!-- ________________dropdown__________________________________ -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    //get Kelas Ruang
  $('#list_kelas').change(function(){
      var kabID = $(this).val();    
      if(kabID){
          $.ajax({
             type:"GET",
             // url:"{{url('getPelanggaranBentuk')}}?kabID="+kabID,
             url:"/getRuang?kabID="+kabID,
             dataType: 'JSON',
             success:function(res){               
              if(res){
                  $("#list_ruang").empty();
                  // $("#desa").empty();
                  $("#list_ruang").append('<option>--- Pilih Ruang ---</option>');
                  // $("#desa").append('<option>---Pilih Desa---</option>');
                  $.each(res,function(nama,kode){
                      $("#list_ruang").append('<option value="'+kode+'">'+kode+'</option>');
                  });
              }else{
                 $("#list_ruang").empty();
                 // $("#desa").empty();
              }
             }
          });
      }else{
          $("#list_ruang").empty();
          // $("#desa").empty();
      }      
     });
  </script>



<script>
function funcPindahJenjang(){
    let siswa_id = [];
    $(".list_siswa:checked").each(function(){
        siswa_id.push($(this).val());
    });
    let jenjang = $("#list_jenjang").val();
    $.ajax({
        type : 'post',
        url  : "{{url('siswa/pindahjenjang')}}",
        data : {siswa_id:siswa_id, jenjang: jenjang, _token: "{{ csrf_token() }}"},
        dataType : 'json',
        success : function(res) {
          
        }
    });
    alert('berhasil');
    location.reload();
  }
</script>

<script>
function funcPindahKelas(){
    let siswa_id = [];
    $(".list_siswa:checked").each(function(){
        siswa_id.push($(this).val());
    });
    let kelas = $("#list_kelas").val();
    $.ajax({
        type : 'post',
        url  : "{{url('siswa/pindahkelas')}}",
        data : {siswa_id:siswa_id, kelas: kelas, _token: "{{ csrf_token() }}"},
        dataType : 'json',
        success : function(res) {
          
        }
    });
    alert('berhasil');
    location.reload();
  }
</script>

<script>
function funcPindahRuang(){
    let siswa_id = [];
    $(".list_siswa:checked").each(function(){
        siswa_id.push($(this).val());
    });
    let ruang = $("#list_ruang").val();
    $.ajax({
        type : 'post',
        url  : "{{url('siswa/pindahruang')}}",
        data : {siswa_id:siswa_id, ruang: ruang, _token: "{{ csrf_token() }}"},
        dataType : 'json',
        success : function(res) {
          
        }
    });
    alert('berhasil');
    location.reload();
  }
</script>



@endsection
