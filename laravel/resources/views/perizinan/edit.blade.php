@extends('layouts.app')

@section('content')
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
                            <h2> <a href="{{url('/perizinan')}}">Perizinan Santri</a>&raquo; <a href="{{url('/perizinan')}}/{{ $data->id }}">Detail</a>  &raquo;   Edit</h2>
                        </div>
                    <div class="card-body ">
                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form action="{{url('/perizinan')}}/{{ $data->id }}" method="post">
                                        @method('put')
                                        @csrf
                                        <div class="card-body">
                                            <div class="col-lg-12">
                                                <label for="siswa_id">Nama Santri*</label>
                                                <select class="form-control select2bs4" style="width: 100%;" id="siswa_id" name="siswa_id">
                                                  <option>-- Pilih Santri --</option>
                                                  @foreach ($siswa as $item )
                                                    <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                  @endforeach
                                                </select>
                                                @error('siswa_id')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                              </div>
                                              <div class="col-lg-12 mt-3">
                                                <label for="keperluan">Keperluan*</label>
                                                <select name="keperluan" id="keperluan" class="form-control">
                                                  <option value="{{ $data->keperluan }}" >{{ $data->keperluan }}</option> 
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
                                                  @enderror"  cols="30" rows="3">{{ $data->catatan }}</textarea>
                                                  @error('catatan')
                                                  <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                  </span>
                                                  @enderror
                                              </div>
                                              <div class="col-lg-12 mt-3">
                                                <label for="tgl_kembali">Tanggal Kembali</label>
                                                <input type="date" id="tgl_kembali" name="tgl_kembali" value="{{ old('tgl_kembali',$data->tgl_kembali) }}" class="form-control @error('tgl_kembali')
                                                  is-invalid
                                                @enderror" >
                                                @error('tgl_kembali')
                                                <span class="invalid-feedback" role="alert">
                                                  {{ $message }}
                                                </span>
                                                @enderror
                                              </div>
                                              <div class="col-md-12">
                                                <br>
                                                    <button type="submit" class="btn btn-primary">
                                                        Simpan
                                                    </button>
                                                </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                           
                        </div>
            </div>
        </div>
    </div>
    </section>
    <!-- /.content -->




@endsection
