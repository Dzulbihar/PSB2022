@if(auth()->user()->role == 'Dewan Ustadz')

<!-- _______________________________________________________________________________ -->

<li class="nav-item">
	<a href="{{url('/home')}}" class="nav-link">
		<i class="nav-icon fas fa-home"></i>
		<p>Laporan Pendaftaran</p>
	</a>
</li>

<li class="nav-item">
	<a href="{{url('/seragam')}}" class="nav-link">
		<i class="nav-icon fas fa-tshirt"></i>
		<p>Ukuran Seragam</p>
	</a>
</li>

<li class="nav-item">
	<a href="{{url('/home_pengurus')}}" class="nav-link">
		<i class="far fas fa-users nav-icon"></i>
		<p>Laporan Data Santri</p>
	</a>
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
			<a href="{{url('/total_uang')}}" class="nav-link">
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