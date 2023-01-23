@if(auth()->user()->role == 'siswa')

<!-- _______________________________________________________________________________ -->

<li class="nav-item">
  <a href="{{url('/home')}}" class="nav-link">
    <i class="nav-icon fas fa-home"></i>
    <p>
      Informasi Pendaftaran
    </p>
  </a>
</li>

<li class="nav-item">
  <a href="{{url('/profil_pendaftaran_online')}}" class="nav-link">
    <i class="nav-icon fas fa-user-tie"></i>
    <p>
      Profile Pendaftaran
    </p>
  </a>
</li>

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
      <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('prestasi')}}" class="nav-link">
        <i class="far fa-circle text-success nav-icon"></i>
        <p>
          Data Prestasi
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('pelanggaran')}}" class="nav-link">
        <i class="far fa-circle text-danger nav-icon"></i>
        <p>
          Data Pelanggaran
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('perizinan')}}" target="blank" class="nav-link">
        <i class="far fa-circle text-warning nav-icon"></i>
        <p>
          Data Perizinan
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ url('siswa') }}/{{$siswa->id}}/{{('penitipan_uang')}}" target="blank" class="nav-link">
        <i class="far fa-circle text-info nav-icon"></i>
        <p>
          Data Penitipan Uang
        </p>
      </a>
    </li>
  </ul>
</li>

<!-- _______________________________________________________________________________ -->

@endif