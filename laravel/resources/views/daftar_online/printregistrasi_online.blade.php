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

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.min.css')}}">
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
<!--            <img src="{{asset('kopaska/aska.jpg')}}" width="100%"> -->

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
          <h4>  <b> Tanda Terima Pembayaran </b> </h4>
          <hr>
          <table class="table table-striped">
            <body>
              @foreach($biayas as $biaya)
              <tr>
                <td> Nomor Pendaftaran </td>
                <td> : </td>
                <td>
                  {{ ($siswa->jenjang)}}_00{{ ($siswa->id) }}
                </td>
              </tr>                                    

              <tr>
                <td> Sudah terima dari </td>
                <td> : </td>
                <td>
                  {{ ($siswa->nama) }}
                </td>
              </tr>

              <tr>
                <td> Uang sebanyak </td>
                <td> : </td>
                <td>
                  <b> {{($biaya->uang_sebanyak)}} </b>
                </td>
              </tr>

              <tr>
                <td> Untuk membayar </td>
                <td> : </td>
                <td>
                   Pendaftaran Santri Baru
                </td>
              </tr>

              <tr>
                <td> Terbilang </td>
                <td> : </td>
                <td>
                   Rp. {{number_format($biaya->terbilang,0, ',' , '.')}}
                </td>
              </tr>
              @endforeach

            </body>
          </table>

<hr>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-family: Georgia, "Times New Roman", Times, serif}
-->
</style>
</head>

<body>
<p align="right">Semarang, {{ ($siswa->tanggal_masuk) }} <br />
  Penerima,</p>
<p align="right">&nbsp;</p>
<p align="right">_____________</p>
</body>
</html>


<h5 class="text-danger"> <b> BIAYA REGISTRASI YANG SUDAH MASUK TIDAK BISA DITARIK KEMBALI </b> </h5>



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
