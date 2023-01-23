@if(auth()->user()->role == 'PSB')

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
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="{{url('/email_online')}}" class="nav-link">
        <i class="nav-icon fas fa-circle"></i>
        <p>
          Email Pendaftar Online
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
    <li class="nav-item" class="{{ request()->is('/jenjang') ? 'active' : ''}}">
      <a href="{{url('/jenjang')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Jenjang
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/kelas') ? 'active' : ''}}">
      <a href="{{url('/kelas')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Kelas
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/ruang') ? 'active' : ''}}">
      <a href="{{url('/ruang')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Ruang
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/kampus') ? 'active' : ''}}">
      <a href="{{url('/kampus')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Kampus
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/gedung') ? 'active' : ''}}">
      <a href="{{url('/gedung')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Gedung
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/kamar') ? 'active' : ''}}">
      <a href="{{url('/kamar')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Kamar
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/jenjang') ? 'active' : ''}}">
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
      <a href="{{url('/nomor_pembayaran')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Nomor Bukti Pembayaran
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
          Nomor Rekening
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
          Biaya Awal Masuk
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
    <li class="nav-item" class="{{ request()->is('/pindahkelas') ? 'active' : ''}}">
      <a href="{{url('/pindahkelas')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Pindah Kelas
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/pindahkamar') ? 'active' : ''}}">
      <a href="{{url('/pindahkamar')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Pindah Kamar
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/pindahkamar') ? 'active' : ''}}">
      <a href="{{url('/pindahjalurpendaftaran')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Pindah Jalur
        </p>
      </a>
    </li>
  </ul>
</li>


@endif