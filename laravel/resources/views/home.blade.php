@extends('layouts.app')


@if(auth()->user()->role == 'Administrator')

    @section('content')


      <head>
        <title> Home - Pondok Pesantren Askhabul Kahfi</title>
      </head>

      <!-- Total Pendaftaran -->
      <section class="content-header">
        <div class="row">
          <!-- Total Pendaftaran -->
          <div class="col-lg-6 col-12">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>Total Pendaftaran</h3>
                <h4>= {{totalSemuaPendaftaran()}}</h4>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_total')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Pendaftaran Offline -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h4> Pendaftaran Offline </h4>
                <p>= {{totalOffline()}}</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_offline')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Pendaftaran Online -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h4> Pendaftaran Online </h4>
                <p>= {{totalOnline()}}</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_online')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </section>

      <!-- Jenjang -->
      <section class="content-header">
        <div class="row">
          <!-- SMP 1 -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> SMP 1 </h4>
                <p>= {{totalSMP1()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_smp1')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- SMP 2 -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> SMP 2 </h4>
                <p>= {{totalSMP2()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_smp2')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- MTs -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> MTs </h4>
                <p>= {{totalMTs()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_mts')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- SMK -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> SMK </h4>
                <p>= {{totalSMK()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_smk')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- MA -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> MA </h4>
                <p>= {{totalMA()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_ma')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Mahad Aly -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> Mahad Aly </h4>
                <p>= {{totalMahadAly()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_mahadaly')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>

      <!-- Alumni -->
      <section class="content-header">
        <div class="row">
          <!-- Alumni -->
          <div class="col-lg-12 col-12">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> Alumni Aska yang melanjutkan sekolah di Aska </h4>
                <p>= {{totalAlumni()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_alumni')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>

      <!-- Laki-laki -->
      <section class="content-header">
        <div class="row">
          <!-- Laki-laki -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h4> Laki-laki </h4>
                <p>= {{totalLakilaki()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-male"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_lakilaki')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Perempuan -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h4> Perempuan </h4>
                <p>= {{totalPerempuan()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-female"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_perempuan')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Reguler -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h4> Reguler </h4>
                <p>= {{totalReguler()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-landmark"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_reguler')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Non Reguler -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h4> Non Reguler </h4>
                <p>= {{totalNonReguler()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-landmark"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_nonreguler')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>

      <!-- Reguler Laki-laki -->
      <section class="content-header">
        <div class="row">
          <!-- Reguler Laki-laki -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h4> Reguler Laki-laki </h4>
                <p>= {{totalRegulerLakilaki()}}</p>
              </div>
              <div class="icon">
                <i class="fa far fa-id-badge"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_regulerlakilaki')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Reguler Perempuan -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h4> Reguler Perempuan </h4>
                <p>= {{totalRegulerPerempuan()}}</p>
              </div>
              <div class="icon">
                <i class="fa far fa-id-badge"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_regulerperempuan')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Non Reguler Laki-laki -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-white">
              <div class="inner">
                <h4> Non Reguler Laki-laki </h4>
                <p>= {{totalNonRegulerLakilaki()}}</p>
              </div>
              <div class="icon">
                <i class="fa far fa-id-badge"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_nonregulerlakilaki')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Non Reguler Perempuan -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-white">
              <div class="inner">
                <h4> Non Reguler Perempuan </h4>
                <p>= {{totalNonRegulerPerempuan()}}</p>
              </div>
              <div class="icon">
                <i class="fa far fa-id-badge"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_nonregulerperempuan')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>

      <!-- Laporan Administrasi harian petugas PSB -->
      <section class="content-header">
        <div class="row">
          <!-- Laporan Administrasi harian petugas PSB -->
          <div class="col-lg-6 col-12">
            <div class="small-box bg-dark">
              <div class="inner">
                <h4> Laporan Administrasi harian petugas PSB </h4>
                <!-- <p>= {{totalKampus4()}}</p> -->
                <br><br>
              </div>
              <div class="icon">
                <i class="fa fas fa-money-check-alt"></i>
              </div>
              <a href="{{url('/laporan_administrasi_harian')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Total sudah registrasi -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
              <div class="inner">
                <h4> Total sudah registrasi </h4>
                <p>= {{totalSudahRegistrasi()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-money-bill"></i>
              </div>
              <a href="{{url('/laporan_administrasi_sudah_registrasi')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Total sudah lunas -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
              <div class="inner">
                <h4> Total sudah lunas </h4>
                <p>= {{totalLunas()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-money-bill-alt"></i>
              </div>
              <a href="{{url('/laporan_administrasi_sudah_lunas')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>

      <!-- Main Laporan Perbulan  -->
      <section class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"> Laporan Perbulan Pendaftaran </h3>
                </div>
                <div class="card-body">
                  <ul class="pagination pagination-month justify-content-center">
                    <li class="page-item"><a class="page-link" >«</a></li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_januari')}}">
                        <p class="page-month">Jan</p>
                        <p class="page-year">{{totalJanuari()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_februari')}}">
                        <p class="page-month">Feb</p>
                        <p class="page-year">{{totalFebruari()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_maret')}}">
                        <p class="page-month">Mar</p>
                        <p class="page-year">{{totalMaret()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_april')}}">
                        <p class="page-month">Apr</p>
                        <p class="page-year">{{totalApril()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_mei')}}">
                        <p class="page-month">May</p>
                        <p class="page-year">{{totalMei()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_juni')}}">
                        <p class="page-month">Jun</p>
                        <p class="page-year">{{totalJuni()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_juli')}}">
                        <p class="page-month">Jul</p>
                        <p class="page-year">{{totalJuli()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_agustus')}}">
                        <p class="page-month">Aug</p>
                        <p class="page-year">{{totalAgustus()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_september')}}">
                        <p class="page-month">Sep</p>
                        <p class="page-year">{{totalSeptember()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_oktober')}}">
                        <p class="page-month">Oct</p>
                        <p class="page-year">{{totalOktober()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_november')}}">
                        <p class="page-month">Nov</p>
                        <p class="page-year">{{totalNovember()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_desember')}}">
                        <p class="page-month">Dec</p>
                        <p class="page-year">{{totalDesember()}}</p>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" >»</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
          <!-- END TYPOGRAPHY -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

      <!-- Main Laporan Perbulan Offline  -->
      <section class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"> Laporan Perbulan Pendaftaran Offline </h3>
                </div>
                <div class="card-body">
                  <ul class="pagination pagination-month justify-content-center">
                    <li class="page-item"><a class="page-link" >«</a></li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_januari_offline')}}">
                        <p class="page-month">Jan</p>
                        <p class="page-year">{{totalJanuariOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_februari_offline')}}">
                        <p class="page-month">Feb</p>
                        <p class="page-year">{{totalFebruariOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_maret_offline')}}">
                        <p class="page-month">Mar</p>
                        <p class="page-year">{{totalMaretOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_april_offline')}}">
                        <p class="page-month">Apr</p>
                        <p class="page-year">{{totalAprilOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_mei_offline')}}">
                        <p class="page-month">May</p>
                        <p class="page-year">{{totalMeiOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_juni_offline')}}">
                        <p class="page-month">Jun</p>
                        <p class="page-year">{{totalJuniOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_juli_offline')}}">
                        <p class="page-month">Jul</p>
                        <p class="page-year">{{totalJuliOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_agustus_offline')}}">
                        <p class="page-month">Aug</p>
                        <p class="page-year">{{totalAgustusOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_september_offline')}}">
                        <p class="page-month">Sep</p>
                        <p class="page-year">{{totalSeptemberOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_oktober_offline')}}">
                        <p class="page-month">Oct</p>
                        <p class="page-year">{{totalOktoberOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_november_offline')}}">
                        <p class="page-month">Nov</p>
                        <p class="page-year">{{totalNovemberOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_desember_offline')}}">
                        <p class="page-month">Dec</p>
                        <p class="page-year">{{totalDesemberOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" >»</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
          <!-- END TYPOGRAPHY -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

      <!-- Main Laporan Perbulan Online  -->
      <section class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"> Laporan Perbulan Pendaftaran Online </h3>
                </div>
                <div class="card-body">
                  <ul class="pagination pagination-month justify-content-center">
                    <li class="page-item"><a class="page-link" >«</a></li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_januari_online')}}">
                        <p class="page-month">Jan</p>
                        <p class="page-year">{{totalJanuariOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_februari_online')}}">
                        <p class="page-month">Feb</p>
                        <p class="page-year">{{totalFebruariOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_maret_online')}}">
                        <p class="page-month">Mar</p>
                        <p class="page-year">{{totalMaretOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_april_online')}}">
                        <p class="page-month">Apr</p>
                        <p class="page-year">{{totalAprilOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_mei_online')}}">
                        <p class="page-month">May</p>
                        <p class="page-year">{{totalMeiOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_juni_online')}}">
                        <p class="page-month">Jun</p>
                        <p class="page-year">{{totalJuniOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_juli_online')}}">
                        <p class="page-month">Jul</p>
                        <p class="page-year">{{totalJuliOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_agustus_online')}}">
                        <p class="page-month">Aug</p>
                        <p class="page-year">{{totalAgustusOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_september_online')}}">
                        <p class="page-month">Sep</p>
                        <p class="page-year">{{totalSeptemberOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_oktober_online')}}">
                        <p class="page-month">Oct</p>
                        <p class="page-year">{{totalOktoberOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_november_online')}}">
                        <p class="page-month">Nov</p>
                        <p class="page-year">{{totalNovemberOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_desember_online')}}">
                        <p class="page-month">Dec</p>
                        <p class="page-year">{{totalDesemberOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" >»</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
          <!-- END TYPOGRAPHY -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->


      <!-- Ponpes Askhabul Kahfi -->
      <section class="content-header">
        <div class="container-fluid">

          <!-- Santri Ponpes Askhabul Kahfi -->
          <div class="row">
            <!-- Santri Ponpes Askhabul Kahfi -->
            <div class="col-lg-6 col-12">
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3>Santri Ponpes Askhabul Kahfi</h3>
                  <h4>= {{totalSemuaSantri()}}</h4>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Santri Lama -->
            <div class="col-lg-3 col-12">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>Santri Lama</h3>
                  <h4>= {{totalSantrilama()}}</h4>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Santri Baru -->
            <div class="col-lg-3 col-12">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>Santri Baru</h3>
                  <h4>= {{totalSemuaPendaftaran()}}</h4>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <!-- ./col -->

          <!-- Kampus 1 -->
          <div class="row">
            <!-- Kampus 1 -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3> Kampus 1 </h3>
                  <p>= {{totalKampus1()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-vihara"></i>
                </div>
                <a href="{{url('/data_kampus_1')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Kampus 2 -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3> Kampus 2</h3>
                  <p>= {{totalKampus2()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-vihara"></i>
                </div>
                <a href="{{url('/data_kampus_2')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Kampus 3 -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3> Kampus 3</h3>
                  <p>= {{totalKampus3()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-vihara"></i>
                </div>
                <a href="{{url('/data_kampus_3')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Kampus 4 -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3> Kampus 4</h3>
                  <p>= {{totalKampus4()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-vihara"></i>
                </div>
                <a href="{{url('/data_kampus_4')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->

          <!-- Jenjang -->
          <div class="row">
            <!-- SMP 1 -->
            <div class="col-lg-2 col-4">
              <div class="small-box bg-success">
                <div class="inner">
                  <h4> SMP 1 </h4>
                  <p>= {{totalSMP1()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-school"></i>
                </div>
                <a href="{{url('/laporan_smp1')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- SMP 2 -->
            <div class="col-lg-2 col-4">
              <div class="small-box bg-success">
                <div class="inner">
                  <h4> SMP 2 </h4>
                  <p>= {{totalSMP2()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-school"></i>
                </div>
                <a href="{{url('/laporan_smp2')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- MTs -->
            <div class="col-lg-2 col-4">
              <div class="small-box bg-success">
                <div class="inner">
                  <h4> MTs </h4>
                  <p>= {{totalMTs()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-school"></i>
                </div>
                <a href="{{url('/laporan_mts')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- SMK -->
            <div class="col-lg-2 col-4">
              <div class="small-box bg-success">
                <div class="inner">
                  <h4> SMK </h4>
                  <p>= {{totalSMK()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-school"></i>
                </div>
                <a href="{{url('/laporan_smk')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- MA -->
            <div class="col-lg-2 col-4">
              <div class="small-box bg-success">
                <div class="inner">
                  <h4> MA </h4>
                  <p>= {{totalMA()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-school"></i>
                </div>
                <a href="{{url('/laporan_ma')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Mahad Aly -->
            <div class="col-lg-2 col-4">
              <div class="small-box bg-success">
                <div class="inner">
                  <h4> Mahad Aly </h4>
                  <p>= {{totalMahadAly()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-school"></i>
                </div>
                <a href="{{url('/laporan_mahadaly')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /.row -->

          <!-- Laki-laki -->
          <div class="row">
            <!-- Laki-laki -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-danger">
                <div class="inner">
                  <h4> Laki-laki </h4>
                  <p>= {{totalsemuaLakilaki()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-male"></i>
                </div>
                <a href="{{url('/data_lakilaki')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Perempuan -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-danger">
                <div class="inner">
                  <h4> Perempuan</h4>
                  <p>= {{totalsemuaPerempuan()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-female"></i>
                </div>
                <a href="{{url('/data_perempuan')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Reguler -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-secondary">
                <div class="inner">
                  <h4> Reguler </h4>
                  <p>= {{totalsemuaReguler()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-landmark"></i>
                </div>
                <a href="{{url('/data_reguler')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Non Reguler -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-secondary">
                <div class="inner">
                  <h4> Non Reguler </h4>
                  <p>= {{totalsemuaNonReguler()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-landmark"></i>
                </div>
                <a href="{{url('/data_nonreguler')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->

          <!-- Reguler Laki-laki -->
          <div class="row">
            <!-- Reguler Laki-laki -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h4> Reguler Laki-laki </h4>
                  <p>= {{totalsemuaRegulerLakilaki()}}</p>
                </div>
                <div class="icon">
                  <i class="fa far fa-id-badge"></i>
                </div>
                <a href="{{url('/data_reguler_lakilaki')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Reguler Perempuan -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h4> Reguler Perempuan</h4>
                  <p>= {{totalsemuaRegulerPerempuan()}}</p>
                </div>
                <div class="icon">
                  <i class="fa far fa-id-badge"></i>
                </div>
                <a href="{{url('/data_reguler_perempuan')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Non Reguler Laki-laki -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-white">
                <div class="inner">
                  <h4> Non Reguler Laki-laki </h4>
                  <p>= {{totalsemuaNonRegulerLakilaki()}}</p>
                </div>
                <div class="icon">
                  <i class="fa far fa-id-badge"></i>
                </div>
                <a href="{{url('/data_nonreguler_lakilaki')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Non Reguler Perempuan -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-white">
                <div class="inner">
                  <h4> Non Reguler Perempuan </h4>
                  <p>= {{totalsemuaNonRegulerPerempuan()}}</p>
                </div>
                <div class="icon">
                  <i class="fa far fa-id-badge"></i>
                </div>
                <a href="{{url('/data_nonreguler_perempuan')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->

        </div>
      </section>

    @endsection

@endif



<!-- _____________________________________________________________________________ -->



@if(auth()->user()->role == 'PSB')

    @section('content')

      <head>
        <title> Home - Pondok Pesantren Askhabul Kahfi</title>
      </head>

      <!-- Total Pendaftaran -->
      <section class="content-header">
        <div class="row">
          <!-- Total Pendaftaran -->
          <div class="col-lg-6 col-12">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>Total Pendaftaran</h3>
                <h4>= {{totalSemuaPendaftaran()}}</h4>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_total')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Pendaftaran Offline -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h4> Pendaftaran Offline </h4>
                <p>= {{totalOffline()}}</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_offline')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Pendaftaran Online -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h4> Pendaftaran Online </h4>
                <p>= {{totalOnline()}}</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_online')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </section>

      <!-- Jenjang -->
      <section class="content-header">
        <div class="row">
          <!-- SMP 1 -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> SMP 1 </h4>
                <p>= {{totalSMP1()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_smp1')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- SMP 2 -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> SMP 2 </h4>
                <p>= {{totalSMP2()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_smp2')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- MTs -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> MTs </h4>
                <p>= {{totalMTs()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_mts')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- SMK -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> SMK </h4>
                <p>= {{totalSMK()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_smk')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- MA -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> MA </h4>
                <p>= {{totalMA()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_ma')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Mahad Aly -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> Mahad Aly </h4>
                <p>= {{totalMahadAly()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_mahadaly')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>

      <!-- Alumni -->
      <section class="content-header">
        <div class="row">
          <!-- Alumni -->
          <div class="col-lg-12 col-12">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> Alumni Aska yang melanjutkan sekolah di Aska </h4>
                <p>= {{totalAlumni()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_alumni')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>

      <!-- Laki-laki -->
      <section class="content-header">
        <div class="row">
          <!-- Laki-laki -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h4> Laki-laki </h4>
                <p>= {{totalLakilaki()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-male"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_lakilaki')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Perempuan -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h4> Perempuan </h4>
                <p>= {{totalPerempuan()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-female"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_perempuan')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Reguler -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h4> Reguler </h4>
                <p>= {{totalReguler()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-landmark"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_reguler')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Non Reguler -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h4> Non Reguler </h4>
                <p>= {{totalNonReguler()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-landmark"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_nonreguler')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>

      <!-- Reguler Laki-laki -->
      <section class="content-header">
        <div class="row">
          <!-- Reguler Laki-laki -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h4> Reguler Laki-laki </h4>
                <p>= {{totalRegulerLakilaki()}}</p>
              </div>
              <div class="icon">
                <i class="fa far fa-id-badge"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_regulerlakilaki')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Reguler Perempuan -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h4> Reguler Perempuan </h4>
                <p>= {{totalRegulerPerempuan()}}</p>
              </div>
              <div class="icon">
                <i class="fa far fa-id-badge"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_regulerperempuan')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Non Reguler Laki-laki -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-white">
              <div class="inner">
                <h4> Non Reguler Laki-laki </h4>
                <p>= {{totalNonRegulerLakilaki()}}</p>
              </div>
              <div class="icon">
                <i class="fa far fa-id-badge"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_nonregulerlakilaki')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Non Reguler Perempuan -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-white">
              <div class="inner">
                <h4> Non Reguler Perempuan </h4>
                <p>= {{totalNonRegulerPerempuan()}}</p>
              </div>
              <div class="icon">
                <i class="fa far fa-id-badge"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_nonregulerperempuan')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>

      <!-- Laporan Administrasi harian petugas PSB -->
      <section class="content-header">
        <div class="row">
          <!-- Laporan Administrasi harian petugas PSB -->
          <div class="col-lg-6 col-12">
            <div class="small-box bg-dark">
              <div class="inner">
                <h4> Laporan Administrasi harian petugas PSB </h4>
                <!-- <p>= {{totalKampus4()}}</p> -->
                <br><br>
              </div>
              <div class="icon">
                <i class="fa fas fa-money-check-alt"></i>
              </div>
              <a href="{{url('/laporan_administrasi_harian')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Total sudah registrasi -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
              <div class="inner">
                <h4> Total sudah registrasi </h4>
                <p>= {{totalSudahRegistrasi()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-money-bill"></i>
              </div>
              <a href="{{url('/laporan_administrasi_sudah_registrasi')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Total sudah lunas -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
              <div class="inner">
                <h4> Total sudah lunas </h4>
                <p>= {{totalLunas()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-money-bill-alt"></i>
              </div>
              <a href="{{url('/laporan_administrasi_sudah_lunas')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>

      <!-- Main Laporan Perbulan  -->
      <section class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"> Laporan Perbulan Pendaftaran </h3>
                </div>
                <div class="card-body">
                  <ul class="pagination pagination-month justify-content-center">
                    <li class="page-item"><a class="page-link" >«</a></li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_januari')}}">
                        <p class="page-month">Jan</p>
                        <p class="page-year">{{totalJanuari()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_februari')}}">
                        <p class="page-month">Feb</p>
                        <p class="page-year">{{totalFebruari()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_maret')}}">
                        <p class="page-month">Mar</p>
                        <p class="page-year">{{totalMaret()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_april')}}">
                        <p class="page-month">Apr</p>
                        <p class="page-year">{{totalApril()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_mei')}}">
                        <p class="page-month">May</p>
                        <p class="page-year">{{totalMei()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_juni')}}">
                        <p class="page-month">Jun</p>
                        <p class="page-year">{{totalJuni()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_juli')}}">
                        <p class="page-month">Jul</p>
                        <p class="page-year">{{totalJuli()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_agustus')}}">
                        <p class="page-month">Aug</p>
                        <p class="page-year">{{totalAgustus()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_september')}}">
                        <p class="page-month">Sep</p>
                        <p class="page-year">{{totalSeptember()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_oktober')}}">
                        <p class="page-month">Oct</p>
                        <p class="page-year">{{totalOktober()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_november')}}">
                        <p class="page-month">Nov</p>
                        <p class="page-year">{{totalNovember()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_desember')}}">
                        <p class="page-month">Dec</p>
                        <p class="page-year">{{totalDesember()}}</p>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" >»</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
          <!-- END TYPOGRAPHY -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

      <!-- Main Laporan Perbulan Offline  -->
      <section class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"> Laporan Perbulan Pendaftaran Offline </h3>
                </div>
                <div class="card-body">
                  <ul class="pagination pagination-month justify-content-center">
                    <li class="page-item"><a class="page-link" >«</a></li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_januari_offline')}}">
                        <p class="page-month">Jan</p>
                        <p class="page-year">{{totalJanuariOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_februari_offline')}}">
                        <p class="page-month">Feb</p>
                        <p class="page-year">{{totalFebruariOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_maret_offline')}}">
                        <p class="page-month">Mar</p>
                        <p class="page-year">{{totalMaretOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_april_offline')}}">
                        <p class="page-month">Apr</p>
                        <p class="page-year">{{totalAprilOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_mei_offline')}}">
                        <p class="page-month">May</p>
                        <p class="page-year">{{totalMeiOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_juni_offline')}}">
                        <p class="page-month">Jun</p>
                        <p class="page-year">{{totalJuniOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_juli_offline')}}">
                        <p class="page-month">Jul</p>
                        <p class="page-year">{{totalJuliOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_agustus_offline')}}">
                        <p class="page-month">Aug</p>
                        <p class="page-year">{{totalAgustusOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_september_offline')}}">
                        <p class="page-month">Sep</p>
                        <p class="page-year">{{totalSeptemberOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_oktober_offline')}}">
                        <p class="page-month">Oct</p>
                        <p class="page-year">{{totalOktoberOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_november_offline')}}">
                        <p class="page-month">Nov</p>
                        <p class="page-year">{{totalNovemberOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_desember_offline')}}">
                        <p class="page-month">Dec</p>
                        <p class="page-year">{{totalDesemberOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" >»</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
          <!-- END TYPOGRAPHY -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

      <!-- Main Laporan Perbulan Online  -->
      <section class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"> Laporan Perbulan Pendaftaran Online </h3>
                </div>
                <div class="card-body">
                  <ul class="pagination pagination-month justify-content-center">
                    <li class="page-item"><a class="page-link" >«</a></li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_januari_online')}}">
                        <p class="page-month">Jan</p>
                        <p class="page-year">{{totalJanuariOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_februari_online')}}">
                        <p class="page-month">Feb</p>
                        <p class="page-year">{{totalFebruariOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_maret_online')}}">
                        <p class="page-month">Mar</p>
                        <p class="page-year">{{totalMaretOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_april_online')}}">
                        <p class="page-month">Apr</p>
                        <p class="page-year">{{totalAprilOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_mei_online')}}">
                        <p class="page-month">May</p>
                        <p class="page-year">{{totalMeiOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_juni_online')}}">
                        <p class="page-month">Jun</p>
                        <p class="page-year">{{totalJuniOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_juli_online')}}">
                        <p class="page-month">Jul</p>
                        <p class="page-year">{{totalJuliOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_agustus_online')}}">
                        <p class="page-month">Aug</p>
                        <p class="page-year">{{totalAgustusOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_september_online')}}">
                        <p class="page-month">Sep</p>
                        <p class="page-year">{{totalSeptemberOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_oktober_online')}}">
                        <p class="page-month">Oct</p>
                        <p class="page-year">{{totalOktoberOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_november_online')}}">
                        <p class="page-month">Nov</p>
                        <p class="page-year">{{totalNovemberOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_desember_online')}}">
                        <p class="page-month">Dec</p>
                        <p class="page-year">{{totalDesemberOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" >»</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
          <!-- END TYPOGRAPHY -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->


    @endsection

@endif



<!-- _____________________________________________________________________________ -->



@if(auth()->user()->role == 'Dewan Ustadz')

    @section('content')

      <head>
        <title> Home - Pondok Pesantren Askhabul Kahfi</title>
      </head>

      <!-- Total Pendaftaran -->
      <section class="content-header">
        <div class="row">
          <!-- Total Pendaftaran -->
          <div class="col-lg-6 col-12">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>Total Pendaftaran</h3>
                <h4>= {{totalSemuaPendaftaran()}}</h4>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_total')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Pendaftaran Offline -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h4> Pendaftaran Offline </h4>
                <p>= {{totalOffline()}}</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_offline')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Pendaftaran Online -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h4> Pendaftaran Online </h4>
                <p>= {{totalOnline()}}</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_online')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </section>

      <!-- Jenjang -->
      <section class="content-header">
        <div class="row">
          <!-- SMP 1 -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> SMP 1 </h4>
                <p>= {{totalSMP1()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_smp1')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- SMP 2 -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> SMP 2 </h4>
                <p>= {{totalSMP2()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_smp2')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- MTs -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> MTs </h4>
                <p>= {{totalMTs()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_mts')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- SMK -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> SMK </h4>
                <p>= {{totalSMK()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_smk')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- MA -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> MA </h4>
                <p>= {{totalMA()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_ma')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Mahad Aly -->
          <div class="col-lg-2 col-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> Mahad Aly </h4>
                <p>= {{totalMahadAly()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_mahadaly')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>

      <!-- Alumni -->
      <section class="content-header">
        <div class="row">
          <!-- Alumni -->
          <div class="col-lg-12 col-12">
            <div class="small-box bg-success">
              <div class="inner">
                <h4> Alumni Aska yang melanjutkan sekolah di Aska </h4>
                <p>= {{totalAlumni()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-school"></i>
              </div>
              <a href="{{url('/laporan_alumni')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>

      <!-- Laki-laki -->
      <section class="content-header">
        <div class="row">
          <!-- Laki-laki -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h4> Laki-laki </h4>
                <p>= {{totalLakilaki()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-male"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_lakilaki')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Perempuan -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h4> Perempuan </h4>
                <p>= {{totalPerempuan()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-female"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_perempuan')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Reguler -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h4> Reguler </h4>
                <p>= {{totalReguler()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-landmark"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_reguler')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Non Reguler -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h4> Non Reguler </h4>
                <p>= {{totalNonReguler()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-landmark"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_nonreguler')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>

      <!-- Reguler Laki-laki -->
      <section class="content-header">
        <div class="row">
          <!-- Reguler Laki-laki -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h4> Reguler Laki-laki </h4>
                <p>= {{totalRegulerLakilaki()}}</p>
              </div>
              <div class="icon">
                <i class="fa far fa-id-badge"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_regulerlakilaki')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Reguler Perempuan -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h4> Reguler Perempuan </h4>
                <p>= {{totalRegulerPerempuan()}}</p>
              </div>
              <div class="icon">
                <i class="fa far fa-id-badge"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_regulerperempuan')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Non Reguler Laki-laki -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-white">
              <div class="inner">
                <h4> Non Reguler Laki-laki </h4>
                <p>= {{totalNonRegulerLakilaki()}}</p>
              </div>
              <div class="icon">
                <i class="fa far fa-id-badge"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_nonregulerlakilaki')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Non Reguler Perempuan -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-white">
              <div class="inner">
                <h4> Non Reguler Perempuan </h4>
                <p>= {{totalNonRegulerPerempuan()}}</p>
              </div>
              <div class="icon">
                <i class="fa far fa-id-badge"></i>
              </div>
              <a href="{{url('/laporan_pendaftaran_nonregulerperempuan')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>

      <!-- Laporan Administrasi harian petugas PSB -->
      <section class="content-header">
        <div class="row">
          <!-- Laporan Administrasi harian petugas PSB -->
          <div class="col-lg-6 col-12">
            <div class="small-box bg-dark">
              <div class="inner">
                <h4> Laporan Administrasi harian petugas PSB </h4>
                <!-- <p>= {{totalKampus4()}}</p> -->
                <br><br>
              </div>
              <div class="icon">
                <i class="fa fas fa-money-check-alt"></i>
              </div>
              <a href="{{url('/laporan_administrasi_harian')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Total sudah registrasi -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
              <div class="inner">
                <h4> Total sudah registrasi </h4>
                <p>= {{totalSudahRegistrasi()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-money-bill"></i>
              </div>
              <a href="{{url('/laporan_administrasi_sudah_registrasi')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Total sudah lunas -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
              <div class="inner">
                <h4> Total sudah lunas </h4>
                <p>= {{totalLunas()}}</p>
              </div>
              <div class="icon">
                <i class="fa fas fa-money-bill-alt"></i>
              </div>
              <a href="{{url('/laporan_administrasi_sudah_lunas')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>

      <!-- Main Laporan Perbulan  -->
      <section class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"> Laporan Perbulan Pendaftaran </h3>
                </div>
                <div class="card-body">
                  <ul class="pagination pagination-month justify-content-center">
                    <li class="page-item"><a class="page-link" >«</a></li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_januari')}}">
                        <p class="page-month">Jan</p>
                        <p class="page-year">{{totalJanuari()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_februari')}}">
                        <p class="page-month">Feb</p>
                        <p class="page-year">{{totalFebruari()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_maret')}}">
                        <p class="page-month">Mar</p>
                        <p class="page-year">{{totalMaret()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_april')}}">
                        <p class="page-month">Apr</p>
                        <p class="page-year">{{totalApril()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_mei')}}">
                        <p class="page-month">May</p>
                        <p class="page-year">{{totalMei()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_juni')}}">
                        <p class="page-month">Jun</p>
                        <p class="page-year">{{totalJuni()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_juli')}}">
                        <p class="page-month">Jul</p>
                        <p class="page-year">{{totalJuli()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_agustus')}}">
                        <p class="page-month">Aug</p>
                        <p class="page-year">{{totalAgustus()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_september')}}">
                        <p class="page-month">Sep</p>
                        <p class="page-year">{{totalSeptember()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_oktober')}}">
                        <p class="page-month">Oct</p>
                        <p class="page-year">{{totalOktober()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_november')}}">
                        <p class="page-month">Nov</p>
                        <p class="page-year">{{totalNovember()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_desember')}}">
                        <p class="page-month">Dec</p>
                        <p class="page-year">{{totalDesember()}}</p>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" >»</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
          <!-- END TYPOGRAPHY -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

      <!-- Main Laporan Perbulan Offline  -->
      <section class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"> Laporan Perbulan Pendaftaran Offline </h3>
                </div>
                <div class="card-body">
                  <ul class="pagination pagination-month justify-content-center">
                    <li class="page-item"><a class="page-link" >«</a></li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_januari_offline')}}">
                        <p class="page-month">Jan</p>
                        <p class="page-year">{{totalJanuariOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_februari_offline')}}">
                        <p class="page-month">Feb</p>
                        <p class="page-year">{{totalFebruariOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_maret_offline')}}">
                        <p class="page-month">Mar</p>
                        <p class="page-year">{{totalMaretOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_april_offline')}}">
                        <p class="page-month">Apr</p>
                        <p class="page-year">{{totalAprilOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_mei_offline')}}">
                        <p class="page-month">May</p>
                        <p class="page-year">{{totalMeiOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_juni_offline')}}">
                        <p class="page-month">Jun</p>
                        <p class="page-year">{{totalJuniOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_juli_offline')}}">
                        <p class="page-month">Jul</p>
                        <p class="page-year">{{totalJuliOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_agustus_offline')}}">
                        <p class="page-month">Aug</p>
                        <p class="page-year">{{totalAgustusOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_september_offline')}}">
                        <p class="page-month">Sep</p>
                        <p class="page-year">{{totalSeptemberOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_oktober_offline')}}">
                        <p class="page-month">Oct</p>
                        <p class="page-year">{{totalOktoberOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_november_offline')}}">
                        <p class="page-month">Nov</p>
                        <p class="page-year">{{totalNovemberOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_desember_offline')}}">
                        <p class="page-month">Dec</p>
                        <p class="page-year">{{totalDesemberOffline()}}</p>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" >»</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
          <!-- END TYPOGRAPHY -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

      <!-- Main Laporan Perbulan Online  -->
      <section class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"> Laporan Perbulan Pendaftaran Online </h3>
                </div>
                <div class="card-body">
                  <ul class="pagination pagination-month justify-content-center">
                    <li class="page-item"><a class="page-link" >«</a></li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_januari_online')}}">
                        <p class="page-month">Jan</p>
                        <p class="page-year">{{totalJanuariOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_februari_online')}}">
                        <p class="page-month">Feb</p>
                        <p class="page-year">{{totalFebruariOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_maret_online')}}">
                        <p class="page-month">Mar</p>
                        <p class="page-year">{{totalMaretOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_april_online')}}">
                        <p class="page-month">Apr</p>
                        <p class="page-year">{{totalAprilOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_mei_online')}}">
                        <p class="page-month">May</p>
                        <p class="page-year">{{totalMeiOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_juni_online')}}">
                        <p class="page-month">Jun</p>
                        <p class="page-year">{{totalJuniOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_juli_online')}}">
                        <p class="page-month">Jul</p>
                        <p class="page-year">{{totalJuliOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_agustus_online')}}">
                        <p class="page-month">Aug</p>
                        <p class="page-year">{{totalAgustusOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_september_online')}}">
                        <p class="page-month">Sep</p>
                        <p class="page-year">{{totalSeptemberOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_oktober_online')}}">
                        <p class="page-month">Oct</p>
                        <p class="page-year">{{totalOktoberOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_november_online')}}">
                        <p class="page-month">Nov</p>
                        <p class="page-year">{{totalNovemberOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="{{url('/laporan_pendaftaran_desember_online')}}">
                        <p class="page-month">Dec</p>
                        <p class="page-year">{{totalDesemberOnline()}}</p>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" >»</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
          <!-- END TYPOGRAPHY -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

    @endsection

@endif



<!-- _____________________________________________________________________________ -->



@if(auth()->user()->role == 'Admin Kampus')

    @section('content')

      <head>
        <title> Home - Pondok Pesantren Askhabul Kahfi</title>
      </head>

      <!-- Ponpes Askhabul Kahfi -->
      <section class="content-header">
        <div class="container-fluid">

          <!-- Santri Ponpes Askhabul Kahfi -->
          <div class="row">
            <!-- Santri Ponpes Askhabul Kahfi -->
            <div class="col-lg-6 col-12">
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3>Santri Ponpes Askhabul Kahfi</h3>
                  <h4>= {{totalSemuaSantri()}}</h4>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Santri Lama -->
            <div class="col-lg-3 col-12">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>Santri Lama</h3>
                  <h4>= {{totalSantrilama()}}</h4>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Santri Baru -->
            <div class="col-lg-3 col-12">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>Santri Baru</h3>
                  <h4>= {{totalSemuaPendaftaran()}}</h4>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <!-- ./col -->

          <!-- Kampus 1 -->
          <div class="row">
            <!-- Kampus 1 -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3> Kampus 1 </h3>
                  <p>= {{totalKampus1()}}</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{url('/data_kampus_1')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Kampus 2 -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3> Kampus 2</h3>
                  <p>= {{totalKampus2()}}</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{url('/data_kampus_2')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Kampus 3 -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3> Kampus 3</h3>
                  <p>= {{totalKampus3()}}</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{url('/data_kampus_3')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Kampus 4 -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3> Kampus 4</h3>
                  <p>= {{totalKampus4()}}</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{url('/data_kampus_4')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->

          <!-- Jenjang -->
          <div class="row">
            <!-- SMP 1 -->
            <div class="col-lg-2 col-4">
              <div class="small-box bg-success">
                <div class="inner">
                  <h4> SMP 1 </h4>
                  <p>= {{totalSMP1()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-school"></i>
                </div>
                <a href="{{url('/laporan_smp1')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- SMP 2 -->
            <div class="col-lg-2 col-4">
              <div class="small-box bg-success">
                <div class="inner">
                  <h4> SMP 2 </h4>
                  <p>= {{totalSMP2()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-school"></i>
                </div>
                <a href="{{url('/laporan_smp2')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- MTs -->
            <div class="col-lg-2 col-4">
              <div class="small-box bg-success">
                <div class="inner">
                  <h4> MTs </h4>
                  <p>= {{totalMTs()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-school"></i>
                </div>
                <a href="{{url('/laporan_mts')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- SMK -->
            <div class="col-lg-2 col-4">
              <div class="small-box bg-success">
                <div class="inner">
                  <h4> SMK </h4>
                  <p>= {{totalSMK()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-school"></i>
                </div>
                <a href="{{url('/laporan_smk')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- MA -->
            <div class="col-lg-2 col-4">
              <div class="small-box bg-success">
                <div class="inner">
                  <h4> MA </h4>
                  <p>= {{totalMA()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-school"></i>
                </div>
                <a href="{{url('/laporan_ma')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Mahad Aly -->
            <div class="col-lg-2 col-4">
              <div class="small-box bg-success">
                <div class="inner">
                  <h4> Mahad Aly </h4>
                  <p>= {{totalMahadAly()}}</p>
                </div>
                <div class="icon">
                  <i class="fa fas fa-school"></i>
                </div>
                <a href="{{url('/laporan_mahadaly')}}" class="small-box-footer"> Lihat selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /.row -->

          <!-- Laki-laki -->
          <div class="row">
            <!-- Laki-laki -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-danger">
                <div class="inner">
                  <h4> Laki-laki </h4>
                  <p>= {{totalsemuaLakilaki()}}</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/data_lakilaki')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Perempuan -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-danger">
                <div class="inner">
                  <h4> Perempuan</h4>
                  <p>= {{totalsemuaPerempuan()}}</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/data_perempuan')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Reguler -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-secondary">
                <div class="inner">
                  <h4> Reguler </h4>
                  <p>= {{totalsemuaReguler()}}</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/data_reguler')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Non Reguler -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-secondary">
                <div class="inner">
                  <h4> Non Reguler </h4>
                  <p>= {{totalsemuaNonReguler()}}</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/data_nonreguler')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->

          <!-- Reguler Laki-laki -->
          <div class="row">
            <!-- Reguler Laki-laki -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h4> Reguler Laki-laki </h4>
                  <p>= {{totalsemuaRegulerLakilaki()}}</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/data_reguler_lakilaki')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Reguler Perempuan -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h4> Reguler Perempuan</h4>
                  <p>= {{totalsemuaRegulerPerempuan()}}</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/data_reguler_perempuan')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Non Reguler Laki-laki -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-white">
                <div class="inner">
                  <h4> Non Reguler Laki-laki </h4>
                  <p>= {{totalsemuaNonRegulerLakilaki()}}</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/data_nonreguler_lakilaki')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- Non Reguler Perempuan -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-white">
                <div class="inner">
                  <h4> Non Reguler Perempuan </h4>
                  <p>= {{totalsemuaNonRegulerPerempuan()}}</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/data_nonreguler_perempuan')}}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->

        </div>
      </section>

    @endsection

@endif



<!-- _____________________________________________________________________________ -->



@if(auth()->user()->role == 'siswa')

    @section('content')

      <head>
        <title> Home - Pondok Pesantren Askhabul Kahfi</title>
      </head>

    <!-- Profile -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-12">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4> <b>Selamat Datang Calon Pemimpin Masa Depan</b> </h4>
                <h4> Di Pondok pesantren Askhabul Kahfi </h4>
              </div>
              <div class="icon">
                <i class="fa fas fa-user-tie"></i>
              </div>
              <a href="
              @if(auth()->user()->role == 'siswa')
              {{url('profil_pendaftaran_online')}}
              @else
              {{url('profilsayaadmin')}}
              @endif " class="small-box-footer
              "> 
              Klik disini untuk melihat profile 
              <i class="fas fa-arrow-circle-right"></i>
            </a>

          </div>
        </div>
      </div>
      <!-- ./col -->
    </section>
    <!-- /.content -->

    <!-- Informasi -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <b>Informasi</b>
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link " href="#waktu" data-toggle="tab">Waktu Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#proses" data-toggle="tab">Proses Pendaftaran Online</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#syarat" data-toggle="tab">Persyaratan Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#biaya" data-toggle="tab">Biaya awal masuk</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#operator" data-toggle="tab"> Kontak Operator Sekolah</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane" id="waktu" style="position: relative; height: 400px;">
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table m-0">
                          <tr>
                            <td colspan="2" valign="top" class="style1">
                              @foreach($waktu as $caption)
                              <div align="left"> 
                                {{ $caption->waktu_pendaftaran}}
                              </div>
                              @endforeach 
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="chart tab-pane active" id="proses" style="position: relative; height: 400px;">
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table m-0">
                          <tr>
                            <td colspan="2" valign="top" class="style1">
                              @foreach($proses as $caption)
                              <div align="left"> 
                                {{ $caption->caption}}
                              </div>
                              @endforeach 
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="chart tab-pane" id="syarat" style="position: relative; height: 400px;">
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table m-0">
                          <tr>
                            <td colspan="2" valign="top" class="style1">
                              @foreach($syarat as $caption)
                              <div align="left"> 
                                {{ $caption->caption}}
                              </div>
                              @endforeach 
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="chart tab-pane" id="biaya" style="position: relative; height: 400px;">
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table m-0">
                          <tr>
                            <td colspan="2" valign="top" class="style1">
                              @foreach($biaya as $caption)
                              <div align="left"> 
                                <b>Biaya Awal Masuk Gelombang 1</b><br>
                              </div>
                              <div align="left"> 
                                SMP Reguler = {{ $caption->smpreg1}}
                              </div>
                              <div align="left"> 
                                SMP Non Regule = {{ $caption->smpnonreg1}}
                              </div>
                              <div align="left"> 
                                MTs Reguler = {{ $caption->mtsreg1}}
                              </div>
                              <div align="left"> 
                                MTs Non Reguler = {{ $caption->mtsnonreg1}}
                              </div>
                              <div align="left"> 
                                SMK Reguler = {{ $caption->smkreg1}}
                              </div>
                              <div align="left"> 
                                SMK Non Reguler = {{ $caption->smknonreg1}}
                              </div>
                              <div align="left"> 
                                MA Reguler = {{ $caption->mareg1}}
                              </div>
                              <div align="left"> 
                                MA Non Reguler = {{ $caption->manonreg1}}
                              </div>
                              @endforeach 
                            </td>
                            <td colspan="2" valign="top" class="style1">
                              @foreach($biaya as $caption)
                              <div align="left"> 
                                <b>Biaya Awal Masuk Gelombang 2</b><br>
                              </div>
                              <div align="left"> 
                                SMP Reguler = {{ $caption->smpreg2}}
                              </div>
                              <div align="left"> 
                                SMP Non Regule = {{ $caption->smpnonreg2}}
                              </div>
                              <div align="left"> 
                                MTs Reguler = {{ $caption->mtsreg2}}
                              </div>
                              <div align="left"> 
                                MTs Non Reguler = {{ $caption->mtsnonreg2}}
                              </div>
                              <div align="left"> 
                                SMK Reguler = {{ $caption->smkreg2}}
                              </div>
                              <div align="left"> 
                                SMK Non Reguler = {{ $caption->smknonreg2}}
                              </div>
                              <div align="left"> 
                                MA Reguler = {{ $caption->mareg2}}
                              </div>
                              <div align="left"> 
                                MA Non Reguler = {{ $caption->manonreg2}}
                              </div>
                              @endforeach 
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="chart tab-pane" id="operator" style="position: relative; height: 400px;">
                    <div class="card-body p-0">
                      <div class="table-responsive">

                        @if ($siswa->jenjang == 'SMP 1')
                                              <div class="row">
                                                <div class="col-md-12">
                                                  <div class="card card-info">
                                                      <table class="table m-0">
                                                        <tr>
                                                          <td colspan="2" valign="top" class="style1">
                                                            @foreach($smp1 as $caption)
                                                            <div align="left"> 
                                                              Nomor Whats'App Operator = {{ $caption->nomor}}
                                                              <p>klik disini untuk menghubungi operator SMP 1</p>
                                                            </div>
                                                            @endforeach 
                                                          </td>
                                                        </tr>
                                                      </table>
                                                    <form action="{{url('daftar')}}/kirim_pesan" method="POST" enctype="multipart/form-data" >
                                                      {{csrf_field()}}
                                                      <input type="hidden" name="nohp" value="@foreach($smp1 as $caption){{ $caption->nomor}}@endforeach">
                                                      <div class="card-footer">
                                                        <button type="submit" name="submit" class="btn btn-primary btn-sm"> Live Chat </button>
                                                      </div>
                                                    </form>
                                                  </div>
                                                </div>
                                              </div>
                        @endif 

                        @if ($siswa->jenjang == 'SMP 2')
                                              <div class="row">
                                                <div class="col-md-12">
                                                  <div class="card card-info">
                                                      <table class="table m-0">
                                                        <tr>
                                                          <td colspan="2" valign="top" class="style1">
                                                            @foreach($smp2 as $caption)
                                                            <div align="left"> 
                                                              Nomor Whats'App Operator = {{ $caption->nomor}}
                                                              <p>klik disini untuk menghubungi operator SMP 2</p>
                                                            </div>
                                                            @endforeach 
                                                          </td>
                                                        </tr>
                                                      </table>
                                                    <form action="{{url('daftar')}}/kirim_pesan" method="POST" enctype="multipart/form-data" >
                                                      {{csrf_field()}}
                                                      <input type="hidden" name="nohp" value="@foreach($smp2 as $caption){{ $caption->nomor}}@endforeach">
                                                      <div class="card-footer">
                                                        <button type="submit" name="submit" class="btn btn-primary btn-sm"> Live Chat </button>
                                                      </div>
                                                    </form>
                                                  </div>
                                                </div>
                                              </div>
                        @endif 

                        @if ($siswa->jenjang == 'MTs')
                                              <div class="row">
                                                <div class="col-md-12">
                                                  <div class="card card-info">
                                                      <table class="table m-0">
                                                        <tr>
                                                          <td colspan="2" valign="top" class="style1">
                                                            @foreach($mts as $caption)
                                                            <div align="left"> 
                                                              Nomor Whats'App Operator = {{ $caption->nomor}}
                                                              <p>klik disini untuk menghubungi operator MTs</p>
                                                            </div>
                                                            @endforeach 
                                                          </td>
                                                        </tr>
                                                      </table>
                                                    <form action="{{url('daftar')}}/kirim_pesan" method="POST" enctype="multipart/form-data" >
                                                      {{csrf_field()}}
                                                      <input type="hidden" name="nohp" value="@foreach($mts as $caption){{ $caption->nomor}}@endforeach">
                                                      <div class="card-footer">
                                                        <button type="submit" name="submit" class="btn btn-primary btn-sm"> Live Chat </button>
                                                      </div>
                                                    </form>
                                                  </div>
                                                </div>
                                              </div>
                        @endif 

                        @if ($siswa->jenjang == 'SMK')
                                              <div class="row">
                                                <div class="col-md-12">
                                                  <div class="card card-info">
                                                      <table class="table m-0">
                                                        <tr>
                                                          <td colspan="2" valign="top" class="style1">
                                                            @foreach($smk as $caption)
                                                            <div align="left"> 
                                                              Nomor Whats'App Operator = {{ $caption->nomor}}
                                                              <p>klik disini untuk menghubungi operator SMK</p>
                                                            </div>
                                                            @endforeach 
                                                          </td>
                                                        </tr>
                                                      </table>
                                                    <form action="{{url('daftar')}}/kirim_pesan" method="POST" enctype="multipart/form-data" >
                                                      {{csrf_field()}}
                                                      <input type="hidden" name="nohp" value="@foreach($smk as $caption){{ $caption->nomor}}@endforeach">
                                                      <div class="card-footer">
                                                        <button type="submit" name="submit" class="btn btn-primary btn-sm"> Live Chat </button>
                                                      </div>
                                                    </form>
                                                  </div>
                                                </div>
                                              </div>
                        @endif 

                        @if ($siswa->jenjang == 'MA')
                                              <div class="row">
                                                <div class="col-md-12">
                                                  <div class="card card-info">
                                                      <table class="table m-0">
                                                        <tr>
                                                          <td colspan="2" valign="top" class="style1">
                                                            @foreach($ma as $caption)
                                                            <div align="left"> 
                                                              Nomor Whats'App Operator = {{ $caption->nomor}}
                                                              <p>klik disini untuk menghubungi operator MA</p>
                                                            </div>
                                                            @endforeach 
                                                          </td>
                                                        </tr>
                                                      </table>
                                                    <form action="{{url('daftar')}}/kirim_pesan" method="POST" enctype="multipart/form-data" >
                                                      {{csrf_field()}}
                                                      <input type="hidden" name="nohp" value="@foreach($ma as $caption){{ $caption->nomor}}@endforeach">
                                                      <div class="card-footer">
                                                        <button type="submit" name="submit" class="btn btn-primary btn-sm"> Live Chat </button>
                                                      </div>
                                                    </form>
                                                  </div>
                                                </div>
                                              </div>
                        @endif 

                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    @endsection

@endif
