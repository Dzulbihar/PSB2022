@extends('layouts.app')

@section('content')


<head>
  <title> Perizinan - Pondok Pesantren Askhabul Kahfi</title>
</head>


    <!-- Main content -->
<section class="content">
    <div class="container-fluid">
<!-- Notifikasi ------------------------------------------------- -->
        @if(session('sukses'))
        <div class="alert alert-success mt-3" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
            <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-header">
                            <h2>Perizinan Santri</h2>
                        </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary btn-sm float-left " data-toggle="modal" data-target="#kamar">
                            Tambah Data
                        </button>
                        <a  href="{{url('/perizinan')}}" class="btn btn-secondary btn-sm float-left ml-2">
                            All
                        </a>
                        <a  href="{{url('/allMasaizin')}}" class="btn btn-warning btn-sm float-left ml-2">
                            Masa Izin
                        </a>
                        <a  href="{{url('/allKembali')}}" class="btn btn-success btn-sm float-left ml-2">
                            Sudah Kembali
                        </a>
                        <br>
                        <br>
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>Keperluan</th>
                                  <th>Tanggal Izin</th>
                                  <th>Tanggal Kembali</th>
                                  <th>Status</th>
                                  <th>Aksi</th>
                                </tr>
                            </thead>
                            @foreach ($data as $item)
                            <tbody>
                             <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $item->siswa->nama }}</td>
                              <td>{{ $item->keperluan }}</td>
                              <td>{{ date('d F Y', strtotime($item->created_at)) }}</td>
                              <td>{{ date('d F Y', strtotime($item->tgl_kembali)) }}</td>

                              <td align="center">
                                @if ($item->status == 0)
                                    <span class="badge badge-danger text-white">Not Verify</span>
                                @elseif ($item->status == 1)
                                    <span class="badge badge-warning " >Verify - 
                                      @if ( date(('Y-m-d')) > $item->tgl_kembali) 
                                        <span class="text-danger">Terlambat</span>
                                      @else
                                        Masa Izin
                                      @endif
                                    </span>
                                @else
                                    <span class="badge badge-success">Sudah Kembali</span>
                                @endif
                              </td>

                              <td align="center">

                                <a href="{{url('/perizinan')}}/{{ $item->id }}" class="btn btn-secondary btn-sm">
                                  View
                                </a>

                                {{-- filtering status  --}}
                                  @if ($item->status == 0)
                                      <a href="{{url('/perizinan')}}/{{ $item->id }}/{{('print_request')}}" target="blank" class="btn btn-success btn-sm">
                                        Surat Pengantar
                                      </a>
                                      <form method="POST" action="{{url('/perizinan')}}/{{ $item->id }}/{{('verify')}}">
                                        @csrf
                                        <button type="submit"  class="btn btn-warning btn-sm">
                                          Verify
                                        </button>
                                      </form>
                                  @elseif ($item->status == 1)
                                      <a href="{{url('/perizinan')}}/{{ $item->id }}/{{('surat_izin')}}" target="blank" class="btn btn-warning btn-sm">
                                        Surat Izin
                                      </a>
                                      <form action="{{url('/perizinan')}}/{{ $item->id }}/{{('kembali')}}" method="post">
                                        @csrf
                                        <button class="btn btn-success btn-sm">
                                          Kembali
                                        </button>
                                      </form>
                                  @endif
                                {{-- end filtering --}}

                                <form action="{{url('/perizinan')}}/{{ $item->id }}" method="post">
                                  @method('delete')
                                  @csrf
                                  <button type="submit" class="btn btn-danger btn-sm border-0" onclick=" return confirm('Apakah yakin ingin menghapus data ini ?')">
                                    Delete
                                  </button>
                                </form>
                                
                              </td>
                             </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!-- Modal ------------------------------------------------- -->
  <div class="modal fade" id="kamar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Tambah Data </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form action="{{ url('/perizinan') }}" method="POST" >
            @csrf
              <div class="form-group row">                        
                <div class="col-lg-12">
                  <label for="siswa_id">Nama Santri*</label>
                  <select class="form-control select2bs4" style="width: 100%;" id="siswa_id" name="siswa_id">
                    <option>-- Pilih Santri --</option>
                    @foreach ($siswa as $item )
                      @if (old('siswa_id'))
                      <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                      @else
                      <option value="{{ $item->id }}">{{ $item->nama }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
                <div class="col-lg-12 mt-3">
                  <label for="keperluan">Keperluan*</label>
                  <select name="keperluan" id="keperluan" class="form-control">
                    <option>-- Pilih Keperluan --</option>
                    @if (old('keperluan') == 'Pulang ')
                    <option value="Pulang" selected>Pulang</option>
                    @elseif (old('keperluan') == 'Keluar' )
                    <option value="Keluar" selected>Keluar</option>
                    @else
                    <option value="Pulang" >Pulang</option>
                    <option value="Keluar" >Keluar</option>
                    @endif
                  </select>
                  @error('keperluan')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
                  @enderror
                </div>
                <div class="col-lg-12 mt-3">
                    <label for="catatan">Catatan</label>
                    <textarea name="catatan" id="catatan" name="catatan" class="form-control @error('catatan')
                      is-invalid
                    @enderror"  cols="30" rows="3">-</textarea>
                    @error('catatan')
                    <span class="invalid-feedback" role="alert">
                      {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="col-lg-12 mt-3">
                  <label for="tgl_kembali">Tanggal Kembali</label>
                  <input type="date" id="tgl_kembali" name="tgl_kembali" class="form-control @error('tgl_kembali')
                    is-invalid
                  @enderror" >
                  @error('tgl_kembali')
                  <span class="invalid-feedback" role="alert">
                    {{ $message }}
                  </span>
                  @enderror
                </div>
              </div>
          <div class="form-group">
          </div>

<!-- __________________________________________________________________________________ -->
    <!-- Tombol -->    
          <div class="form-group row">                    
              <div class="col-md-12">
                <br>
                              <button type="submit" class="btn btn-primary btn-sm">
                                Simpan
                              </button>
                              <button type="button" class="btn btn-secondary btn-sm float-right" data-dismiss="modal">Close</button>
                        </div>

                </form>  
              </div>

<!-- EndFormulir __________________________________________________________________________________________ -->
      </div>
   </div>
</div>
<!-- EndModal ------------------------------------------------- -->



    </section>
    <!-- /.content -->




@endsection






