@extends('layouts.app')

@if(auth()->user()->role == 'Dewan Ustadz')

    @section('content')

      <head>
        <title> Data Santri Lama - Pondok Pesantren Askhabul Kahfi</title>
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