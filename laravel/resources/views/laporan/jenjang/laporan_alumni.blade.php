<head>
  <title> Laporan Pendaftaran Santri Baru Alumni </title>
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</head>


@extends('layouts.app')


@section('content')
<!-- Jenjang -->
<section class="content-header">
  <div class="row">
    <!-- laporan_alumni_ke_smk -->
    <div class="col-lg-6 col-6">
      <div class="small-box bg-success">
        <div class="inner">
          <h4> Alumni Aska ke SMK </h4>
          <p>= {{totalAlumnikeSMK()}}</p>
        </div>
        <div class="icon">
          <i class="fa fas fa-school"></i>
        </div>
        <a href="{{url('/laporan_alumni_ke_smk')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- laporan_alumni_ke_ma -->
    <div class="col-lg-6 col-6">
      <div class="small-box bg-success">
        <div class="inner">
          <h4> Alumni Aska ke MA </h4>
          <p>= {{totalAlumnikeMA()}}</p>
        </div>
        <div class="icon">
          <i class="fa fas fa-school"></i>
        </div>
        <a href="{{url('/laporan_alumni_ke_ma')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- laporan_alumni_ke_mahadaly -->
    <div class="col-lg-12 col-12">
      <div class="small-box bg-success">
        <div class="inner">
          <h4> Alumni Aska ke Mahad Aly </h4>
          <p>= {{totalAlumnikeMAHADALY()}}</p>
        </div>
        <div class="icon">
          <i class="fa fas fa-school"></i>
        </div>
        <a href="{{url('/laporan_alumni_ke_mahadaly')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
</section>

@endsection