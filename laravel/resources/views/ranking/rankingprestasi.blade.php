@extends('layouts.app')

@section('content')

<head>
  <title> Ranking Prestasi - Pondok Pesantren Askhabul Kahfi</title>
</head>


<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Prestasi</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
          <li class="breadcrumb-item active">Data Prestasi</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="row">

      <div class="col-md-3">
        <div class="card card-widget widget-user">
          <div class="widget-user-header text-white"
          style="background: url('{{asset('adminlte/dist/img/kampus1.jpg')}}') center center;">
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="col-sm-12 border-right">
              <div class="description-block">
                <td>
                  <h1>Kampus 1</h1>
                </td>
                <td>
                  <button type="button" class="btn btn-block btn-outline-primary btn-sm"><a href="{{url('/rankingprestasikampus1')}}">Lihat Selengkapnya</a></button>
                </td>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-3">
      <div class="card card-widget widget-user">
        <div class="widget-user-header text-white"
        style="background: url('{{asset('adminlte/dist/img/kampusdua.jpg')}}') center center;">
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-sm-12 border-right">
            <div class="description-block">
              <td>
                <h1>Kampus 2</h1>
              </td>
              <td>
                <button type="button" class="btn btn-block btn-outline-primary btn-sm"><a href="{{url('/rankingprestasikampus2')}}">Lihat Selengkapnya</a></button>
              </td>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card card-widget widget-user">
      <div class="widget-user-header text-white"
      style="background: url('{{asset('adminlte/dist/img/kampus3.jpg')}}') center center;">
    </div>
    <div class="card-footer">
      <div class="row">
        <div class="col-sm-12 border-right">
          <div class="description-block">
            <td>
              <h1>Kampus 3</h1>
            </td>
            <td>
              <button type="button" class="btn btn-block btn-outline-primary btn-sm"><a href="{{url('/rankingprestasikampus3')}}">Lihat Selengkapnya</a></button>
            </td>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-3">
  <div class="card card-widget widget-user">
    <div class="widget-user-header text-white"
    style="background: url('{{asset('adminlte/dist/img/kampus4.jpg')}}') center center;">
  </div>
  <div class="card-footer">
    <div class="row">
      <div class="col-sm-12 border-right">
        <div class="description-block">
          <td>
            <h1>Kampus 4</h1>
          </td>
          <td>
            <button type="button" class="btn btn-block btn-outline-primary btn-sm"><a href="{{url('/rankingprestasikampus4')}}">Lihat Selengkapnya</a></button>
          </td>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

</div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
  <i class="fas fa-chevron-up"></i>
</a>
</div>
<!-- /.content-wrapper -->

@endsection