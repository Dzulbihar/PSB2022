<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Kotak Grid -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>.</title>
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('adminlte/dist/img/logoaska.png')}}" width="30">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('kp/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('kp/adminlte.min.css')}}">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Kotak Grid -->
  <link rel="stylesheet" href="assets/css/bootstrap.css"> 

  <!-- CSS Tabel Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>


<body>

	<div class="wrapper">
		<!-- Main content -->
		<section class="invoice">

			<!-- Main content -->
			<div class="invoice p-3 mb-3">

				<!-- title row -->
				<div class="row">
					<div class="col-12">

<!-- 						<img src="{{asset('kopaska/aska.jpg')}}" width="100%"> -->

@if ($siswa->jenjang == 'MTs')
            <img src="{{asset('kopaska/registrasi_mts.jpg')}}" width="100%">
@endif 
@if ($siswa->jenjang == 'SMP 1')
            <img src="{{asset('kopaska/registrasi_smp1.png')}}" width="100%">
@endif  
@if ($siswa->jenjang == 'SMP 2')
            <img src="{{asset('kopaska/registrasi_smp2.png')}}" width="100%">
@endif  
@if ($siswa->jenjang == 'SMK')
            <img src="{{asset('kopaska/registrasi_smk.jpg')}}" width="100%">
@endif  
@if ($siswa->jenjang == 'MA')
            <img src="{{asset('kopaska/registrasi_ma.jpg')}}" width="100%">
@endif

					</div>
				</div>
        <br>
        <div class="container-fluid">

@if ($siswa->jenjang == 'MTs')
            <h4> <b> Registrasi Jenjang MTs Askhabul Kahfi, {{ ($siswa->fasilitas) }} </b> </h4>
@endif 
@if ($siswa->jenjang == 'SMP 1')
            <h4> <b> Registrasi Jenjang SMP 1 Askhabul Kahfi, {{ ($siswa->fasilitas) }} </b> </h4>
@endif  
@if ($siswa->jenjang == 'SMP 2')
            <h4> <b> Registrasi Jenjang SMP 2 Askhabul Kahfi, {{ ($siswa->fasilitas) }} </b> </h4>
@endif  
@if ($siswa->jenjang == 'SMK')
            <h4> <b> Registrasi Jenjang SMK Askhabul Kahfi, {{ ($siswa->fasilitas) }} </b> </h4>
@endif  
@if ($siswa->jenjang == 'MA')
            <h4> <b> Registrasi Jenjang MA Askhabul Kahfi, {{ ($siswa->fasilitas) }} </b> </h4>
@endif

          <table class="table table-striped">
            <body>

              <tr>
                <td> Nomor Pendaftaran </td>
                <td> : </td>
                <td>
                  P100{{$siswa->id}}
                </td>
              </tr> 

              <tr>
                <td> Nama Lengkap </td>
                <td> : </td>
                <td>
                  {{ ($siswa->nama) }}
                </td>
              </tr>                                    

              <tr>
                <td> Alamat </td>
                <td> : </td>
                <td>
                  {{ ($siswa->desa) }}, {{ ($siswa->kecamatan) }}, {{ ($siswa->state) }}
                </td>
              </tr>    

            </body>
          </table>

          <div class="panel">
            <div class="panel-body">
              <table width="100%" border="4" cellspacing="2" cellpadding="5">
                <thead>
                  <tr>
                    <th> No </th>
                    <th> Waktu Membayar </th>
                    <th> Sudah Membayar </th>
                    <!-- <th> Total Membayar </th> -->
                    <th> Bukti Pembayaran </th>
                    <th> Status Lunas </th>

                  </tr>
                </thead>
                <tbody>
                <!-- Variabel php untuk nomor-->    
                <?php
                $nomer = 1;
                ?>
                <!-- ambil data di database-->
                  @foreach($data_siswa as $registrasi)
                  <tr>
                    <th>{{ $nomer++}}</th>
                    <td> {{$registrasi->waktu}} </td>
                    <td> Rp. {{ number_format( $registrasi->biaya )}} </td>
                    <!-- <td> {{ $registrasi->lunas }} </td> -->
                    <td>
                      <h4> <img src="{{$registrasi->getUpload()}}" width="20%" height="100"> </h4>
                    </td>
                    <td> {{ $registrasi->lunas }} </td>
                  </tr>
                  @endforeach
                </tbody>

              </table>
            </div>
          </div>


          <div class="row">

            <!-- __________________________________________________________________________ -->
            <div class="col-md-1">
              <div >  </div>
            </div>
            <div class="col-md-3">
              <div >   </div>
            </div>
            <div class="col-md-4">
              <div >  </div>
            </div>
            <div class="col-md-3">
              <div > Semarang,&nbsp;&nbsp; .&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;. </div>
            </div>
            <div class="col-md-1">
              <div >  </div>
            </div>
            <!-- __________________________________________________________________________ -->
            <div class="col-md-1">
              <div >  </div>
            </div>
            <div class="col-md-3">
              <div > Petugas Pendaftaran PSB  </div>
            </div>
            <div class="col-md-4">
              <div >  </div>
            </div>
            <div class="col-md-3">
              <div > Calon Santri </div>
            </div>
            <div class="col-md-1">
              <div >  </div>
            </div>
            <!-- __________________________________________________________________________ -->
            <div class="col-md-1">
              <div class="bg-light text-light"> . </div>
            </div>
            <div class="col-md-3">
              <div class="bg-light text-light"> . </div>
            </div>
            <div class="col-md-4">
              <div class="bg-light text-light"> . </div>
            </div>
            <div class="col-md-3">
              <div class="bg-light text-light"> . </div>
            </div>
            <div class="col-md-1">
              <div class="bg-light text-light"> . </div>
            </div>
            <!-- __________________________________________________________________________ -->
            <div class="col-md-1">
              <div class="bg-light text-light"> . </div>
            </div>
            <div class="col-md-3">
              <div class="bg-light text-light"> . </div>
            </div>
            <div class="col-md-4">
              <div class="bg-light text-light"> . </div>
            </div>
            <div class="col-md-3">
              <div class="bg-light text-light"> . </div>
            </div>
            <div class="col-md-1">
              <div class="bg-light text-light"> . </div>
            </div>
            <!-- __________________________________________________________________________ -->
            <div class="col-md-1">
              <div class="bg-light text-light"> . </div>
            </div>
            <div class="col-md-3">
              <div class="bg-light text-light"> . </div>
            </div>
            <div class="col-md-4">
              <div class="bg-light text-light"> . </div>
            </div>
            <div class="col-md-3">
              <div class="bg-light text-light"> . </div>
            </div>
            <div class="col-md-1">
              <div class="bg-light text-light"> . </div>
            </div>
            <!-- __________________________________________________________________________ -->
            <div class="col-md-1">
              <div >  </div>
            </div>
            <div class="col-md-3">
              <div > _________________________ </div>
            </div>
            <div class="col-md-4">
              <div >  </div>
            </div>
            <div class="col-md-3">
              <div > _________________________ </div>
            </div>
            <div class="col-md-1">
              <div >  </div>
            </div>
            <!-- __________________________________________________________________________ -->
            <div class="col-md-1">
              <div >  </div>
            </div>
            <div class="col-md-3">
              <div > (Ttd / Nama Terang) </div>
            </div>
            <div class="col-md-4">
              <div >  </div>
            </div>
            <div class="col-md-3">
              <div > (Ttd / Nama Terang) </div>
            </div>
            <div class="col-md-1">
              <div >  </div>
            </div>
            <!-- __________________________________________________________________________ -->
<br><br>
<h5 class="text-danger"> <b> BIAYA REGISTRASI YANG SUDAH MASUK TIDAK BISA DITARIK KEMBALI </b> </h5>


          </div>
          <!-- /.row -->




        </div>
        <!-- /.container -->
      </section>
      <!-- /.content -->
    </div>
    <!-- ./wrapper -->


    <script type="text/javascript"> 
      window.addEventListener("load", window.print());
    </script>





    <script src="assets/js/jquery.js"></script> 
    <script src="assets/js/popper.js"></script> 
    <script src="assets/js/bootstrap.js"></script>

  </body>
  </html>
