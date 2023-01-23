@extends('layouts.app')

@section('content')

<head>
  <title> Ukuran Seragam - Pondok Pesantren Askhabul Kahfi</title>
</head>

<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1> Ukuran Seragam  </h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
					<li class="breadcrumb-item active">Seragam</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>


@if(auth()->user()->role == 'PSB' || auth()->user()->role == 'Administrator')

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
						<h3 class="card-title">Ukuran Seragam </h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">

						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Jenjang</th>
									<th>Jenis Kelamin</th>
									<th>Ukuran Seragam</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<!-- Variabel php untuk nomor-->    <?php
								$nomer = 1;
								?>
								<!-- ambil data di database-->
								@foreach($ukuran_seragam as $ukuran_seragam)
								<tr>
									<th>{{ $nomer++}}</th>
									<td>{{ $ukuran_seragam->nama}} </td>
									<td>{{ $ukuran_seragam->jenjang}} </td>
									<td>{{ $ukuran_seragam->jeniskelamin}} </td>
									<td>{{ $ukuran_seragam->seragam}} </td>
									<td>
										<a href="{{ url('seragam') }}/{{$ukuran_seragam->id}}/{{('editseragam')}}" class="btn btn-warning btn-sm">Edit</a>
										<a href="{{ url('seragam') }}/{{$ukuran_seragam->id}}/{{('deleteseragam')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus ?')">Delete</a>
									</td>
								</tr>
								@endforeach  
							</tbody>
						</table>

						<!-- Button trigger modal -->
						<div>
							<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
								Tambah
							</button>
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

@endif


<!-- SMP 1 -->
<section class="content-header">
    <div class="row">
        <!-- S -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h4> S (SMP 1) </h4>
                    <p>= {{totalSeragamSMP_s()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_s_smp1')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- M -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h4> M (SMP 1) </h4>
                    <p>= {{totalSeragamSMP_M()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_m_smp1')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- L -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h4> L (SMP 1) </h4>
                    <p>= {{totalSeragamSMP_L()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_l_smp1')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- XL -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h4> XL (SMP 1) </h4>
                    <p>= {{totalSeragamSMP_XL()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_xl_smp1')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- XXL -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h4> XXL (SMP 1) </h4>
                    <p>= {{totalSeragamSMP_XXL()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_xxl_smp1')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- XXXL -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h4> XXXL (SMP 1) </h4>
                    <p>= {{totalSeragamSMP_XXXL()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_xxxl_smp1')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>

<!-- SMP 2 -->
<section class="content-header">
    <div class="row">
        <!-- S -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h4> S (SMP 2) </h4>
                    <p>= {{totalSeragamSMP2_S()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_s_smp2')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- M -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h4> M (SMP 2) </h4>
                    <p>= {{totalSeragamSMP2_M()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_m_smp2')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- L -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h4> L (SMP 2) </h4>
                    <p>= {{totalSeragamSMP2_L()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_l_smp2')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- XL -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h4> XL (SMP 2) </h4>
                    <p>= {{totalSeragamSMP2_XL()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_xl_smp2')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- XXL -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h4> XXL (SMP 2) </h4>
                    <p>= {{totalSeragamSMP2_XXL()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_xxl_smp2')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- XXXL -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h4> XXXL (SMP 2) </h4>
                    <p>= {{totalSeragamSMP2_XXXL()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_xxxl_smp2')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>

<!-- MTs -->
<section class="content-header">
    <div class="row">
        <!-- S -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h4> S (MTs) </h4>
                    <p>= {{totalSeragamMTs_S()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_s_mts')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- M -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h4> M (MTs) </h4>
                    <p>= {{totalSeragamMTs_M()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_m_mts')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- L -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h4> L (MTs) </h4>
                    <p>= {{totalSeragamMTs_L()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_l_mts')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- XL -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h4> XL (MTs) </h4>
                    <p>= {{totalSeragamMTs_XL()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_xl_mts')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- XXL -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h4> XXL (MTs) </h4>
                    <p>= {{totalSeragamMTs_XXL()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_xxl_mts')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- XXXL -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h4> XXXL (MTs) </h4>
                    <p>= {{totalSeragamMTs_XXXL()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_xxxl_mts')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>

<!-- SMK -->
<section class="content-header">
    <div class="row">
        <!-- S -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h4> S (SMK) </h4>
                    <p>= {{totalSeragamSMK_S()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_s_smk')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- M -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h4> M (SMK) </h4>
                    <p>= {{totalSeragamSMK_M()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_m_smk')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- L -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h4> L (SMK) </h4>
                    <p>= {{totalSeragamSMK_L()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_l_smk')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- XL -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h4> XL (SMK) </h4>
                    <p>= {{totalSeragamSMK_XL()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_xl_smk')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- XXL -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h4> XXL (SMK) </h4>
                    <p>= {{totalSeragamSMK_XXL()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_xxl_smk')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- XXXL -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h4> XXXL (SMK) </h4>
                    <p>= {{totalSeragamSMK_XXXL()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_xxxl_smk')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>

<!-- MA -->
<section class="content-header">
    <div class="row">
        <!-- S -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h4> S (MA) </h4>
                    <p>= {{totalSeragamMA_S()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_s_ma')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- M -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h4> M (MA) </h4>
                    <p>= {{totalSeragamMA_M()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_m_ma')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- L -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h4> L (MA) </h4>
                    <p>= {{totalSeragamMA_L()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_l_ma')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- XL -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h4> XL (MA) </h4>
                    <p>= {{totalSeragamMA_XL()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_xl_ma')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- XXL -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h4> XXL (MA) </h4>
                    <p>= {{totalSeragamMA_XXL()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_xxl_ma')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- XXXL -->
        <div class="col-lg-2 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h4> XXXL (MA) </h4>
                    <p>= {{totalSeragamMA_XXXL()}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{url('/laporan_ukuran_seragam_xxxl_ma')}}" class="small-box-footer"> Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>          

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">
            Tambah Data Ukuran Seragam
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">

   <form action="{{url('seragam/simpanseragam')}}" method="POST" enctype="multipart/form-data" >
      {{csrf_field()}}
      <!-- __________________________________________________________________________________ -->

      <!-- nama -->
      <div class="form-group row">
         <div class="col-md-12">
            <label> Nama </label>
            <select id="nama" name="nama" class="form-control select2bs4" style="width: 100%;" value="{{ old('nama') }}">
               <option> -- Pilih -- </option>
               @foreach($siswa as $ka)
               <option value="{{$ka->nama}}">{{$ka->nama}}</option>
               @endforeach
           </select>
       </div>
   </div>

   <!-- jenjang -->
   <div class="form-group row">
     <div class="col-md-12">
        <label> Jenjang </label>
        <select id="jenjang" name="jenjang" class="form-control" class="form-control" value="{{ old('jenjang') }}">
           @foreach($jenjang as $ka)
           <option value="{{$ka->jenjang}}">{{$ka->jenjang}}</option>
           @endforeach
       </select>
   </div>
</div>

<!-- jeniskelamin -->
<div class="form-group row">
 <div class="col-md-12">
    <label> Jenis Kelamin </label>
    <select name="jeniskelamin" id="jeniskelamin" class="form-control" class="form-control" value="{{ old('jeniskelamin') }}">
       <option selected>-- Pilih --</option>
       <option> Laki-laki </option>
       <option> Perempuan </option>
   </select>
</div>
</div>

<!-- seragam -->
<div class="form-group row">
 <div class="col-md-12">
    <label> Ukuran Seragam </label>
    <select id="seragam" name="seragam" class="form-control" class="form-control" value="{{ old('seragam') }}">
       @foreach($seragam as $ka)
       <option value="{{$ka->seragam}}">{{$ka->seragam}}</option>
       @endforeach
   </select>
</div>
</div>

<!-- __________________________________________________________________________________ -->
<!-- Tombol -->    
<div class="form-group row">                    
 <div class="col-md-12">
    <br>
    <button type="submit" class="btn btn-primary btn-sm">
       Simpan
   </button>
   <button type="button" class="btn btn-secondary float-right btn-sm" data-dismiss="modal">Close</button>
</div>
</form>  
</div>
<!-- EndFormulir __________________________________________________________________________________________ -->
</div>

</div>
</div>
</div>




@endsection
