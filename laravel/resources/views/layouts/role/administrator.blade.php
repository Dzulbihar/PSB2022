@if(auth()->user()->role == 'Administrator')

<!-- _______________________________________________________________________________ -->

<li class="nav-item">
  <a href="{{url('/home')}}" class="nav-link">
    <i class="nav-icon fas fa-home"></i>
    <p>
      Dashboard
    </p>
  </a>
</li>

<!-- _______________________________________________________________________________ -->

<li class="nav-item">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-id-card-alt"></i>
    <p>
      Pendaftaran Santri
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/daftar')}}" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>
          Pendaftaran
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/daftar/data')}}" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>
          Data Santri Baru Offline
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/daftar/data_online')}}" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>
          Data Santri Baru Online
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/seragam')}}" class="nav-link">
        <i class="nav-icon fas fa-tshirt"></i>
        <p>
          Ukuran Seragam
        </p>
      </a>
    </li>
  </ul>
  <!--<ul class="nav nav-treeview">-->
  <!--  <li class="nav-item" >-->
  <!--    <a href="{{url('/email_online')}}" class="nav-link">-->
  <!--      <i class="nav-icon fas fa-circle"></i>-->
  <!--      <p>-->
  <!--        Email Pendaftar Online-->
  <!--      </p>-->
  <!--    </a>-->
  <!--  </li>-->
  <!--</ul>-->
</li>

<!-- _______________________________________________________________________________ -->

<li class="nav-item">
  <a href="{{url('/siswa')}}" class="nav-link">
   <i class="far fas fa-users nav-icon"></i>
   <p>Data Semua Santri </p>
 </a>
</li>

<!-- ______________________________________________________________________________ -->

<li class="nav-item">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-vihara"></i>
    <p>
      Data Gedung
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/data_kampus_1')}}" class="nav-link">
        <i class="nav-icon fas fa-circle"></i>
        <p>
          Kampus 1
<!--           <i class="right fas fa-angle-left"></i> -->
        </p>
      </a>

    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/data_kampus_2')}}" class="nav-link">
        <i class="nav-icon fas fa-circle"></i>
        <p>
          Kampus 2
<!--           <i class="right fas fa-angle-left"></i> -->
        </p>
      </a>

    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/data_kampus_3')}}" class="nav-link">
        <i class="nav-icon fas fa-circle"></i>
        <p>
          Kampus 3
<!--           <i class="right fas fa-angle-left"></i> -->
        </p>
      </a>

    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/data_kampus_4')}}" class="nav-link">
        <i class="nav-icon fas fa-circle"></i>
        <p>
          Kampus 4
<!--           <i class="right fas fa-angle-left"></i> -->
        </p>
      </a>
<!--       @include('layouts.gedung.kampusempat') -->
    </li>
  </ul>
</li>

<!-- __________________________________________________________________________________________ -->

<li class="nav-item" >
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-school"></i>
    <p>
      Data Kelas
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/data_jenjang_smp1')}}" class="nav-link">
        <i class="nav-icon fas fa-circle"></i>
        <p>
          SMP 1
<!--           <i class="right fas fa-angle-left"></i> -->
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/data_jenjang_smp2')}}" class="nav-link">
        <i class="nav-icon fas fa-circle"></i>
        <p>
          SMP 2
<!--           <i class="right fas fa-angle-left"></i> -->
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/data_jenjang_mts')}}" class="nav-link">
        <i class="nav-icon fas fa-circle"></i>
        <p>
          MTs
<!--           <i class="right fas fa-angle-left"></i> -->
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/data_jenjang_smk')}}" class="nav-link">
        <i class="nav-icon fas fa-circle"></i>
        <p>
          SMK
<!--           <i class="right fas fa-angle-left"></i> -->
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/data_jenjang_ma')}}" class="nav-link">
        <i class="nav-icon fas fa-circle"></i>
        <p>
          MA
<!--           <i class="right fas fa-angle-left"></i> -->
        </p>
      </a>
    </li>
  </ul>
</li>

<!-- _______________________________________________________________________________ -->

<li class="nav-item" >
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-book-reader"></i>
    <p>
      Aktivitas
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/rankingprestasi')}}" class="nav-link">
        <i class="far fa-circle text-success nav-icon"></i>
        <p>
          Data Prestasi
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/rankingpelanggaran')}}" class="nav-link">
        <i class="far fa-circle text-danger nav-icon"></i>
        <p>
          Data Pelanggaran
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/perizinan')}}" target="blank" class="nav-link">
        <i class="far fa-circle text-warning nav-icon"></i>
        <p>
          Data Perizinan
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/total_uang')}}" target="blank" class="nav-link">
        <i class="far fa-circle text-info nav-icon"></i>
        <p>
          Data Penitipan Uang
        </p>
      </a>
    </li>
  </ul>
</li>

<!-- _______________________________________________________________________________ -->

<li class="nav-item" >
  <a href="#" class="nav-link">
    <i class="nav-icon fas fas fa-archive"></i>
    <p>
      Pindah Data
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/pindahkelas')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Pindah Kelas
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/pindahkamar')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Pindah Kamar
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/pindahjalurpendaftaran')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Pindah Jalur
        </p>
      </a>
    </li>
  </ul>
</li>

<!-- _______________________________________________________________________________ -->

<li class="nav-item" >
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-th"></i>
    <p>
      Master
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/jenjang')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Jenjang
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/kelas')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Kelas
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/ruang')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Ruang
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/kampus')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Kampus
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/gedung')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Gedung
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/kamar')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Kamar
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/fasilitas')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Fasilitas
        </p>
      </a>
    </li>
  </ul>

  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/pendidikan')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Pendidikan
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/pekerjaan')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Pekerjaan
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/caption_printdatadiri')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Caption print data
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/nomor_pembayaran')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Nomor pembayaran
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/nomor_operator')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Nomor Operator
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/transfer_bank')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Transfer Bank
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/biaya_pendaftaran')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Biaya pendaftaran
        </p>
      </a>
    </li>
  </ul> 
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/biaya')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Biaya
        </p>
      </a>
    </li>
  </ul>  
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/chatwa')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Live Chat
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/caption_proses_pendaftaran_online')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Caption proses daftar
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/caption_persyaratan_pendaftaran_online')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Caption syarat daftar
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('/waktu_pendaftaran')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Waktu Pendaftaran
        </p>
      </a>
    </li>
  </ul>
</li>


@endif