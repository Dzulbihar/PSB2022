<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

use App\Models\Siswa;

use App\Models\Jenjang;
use App\Models\Kampus;

use App\Models\Ms_Kelas;
use App\Models\Ms_Ruang;
use App\Models\Ms_Gedung;
use App\Models\Ms_Kamar;
use App\Models\Ms_Prodi;


use App\Http\Controllers\Controller;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SantriImport;
use Session;

use App\Models\Perizinan;
use DB;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $data_siswa =  DB::select('select `id`,`nama`,`jenjang`,`prodi`,`kampus`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`nohp`,`status` FROM `siswa` 
            WHERE `jalurpendaftaran`="Santri Lama"
            ');

        $jenjang = \App\Models\Jenjang::all();
        $kampus = \App\Models\Kampus::all(); 

        $fasilitas =  DB::select('select
            `fasilitas`
            FROM `fasilitas` 
            ');
        $pendidikan =  DB::select('select
            `pendidikan`
            FROM `pendidikan` 
            ');
        $pekerjaan =  DB::select('select
            `pekerjaan`
            FROM `pekerjaan` 
            ');

        $gedung =  DB::select('select
            `kab_kode`
            FROM `ms_gedung` 
            ');
        $kelas =  DB::select('select
            `kab_kode`
            FROM `ms_kelas` 
            ');
        $mst_provinsi =  DB::select('select
            `provinsi`
            FROM `mst_provinsi` 
            ');

        return view('siswa.index',[
            'data_siswa' => $data_siswa, 
            'jenjang' => $jenjang, 
            'kampus' => $kampus, 
            'fasilitas' => $fasilitas, 
            'pendidikan' => $pendidikan, 
            'pekerjaan' => $pekerjaan, 
            'gedung' => $gedung,
            'kelas' => $kelas,
            'mst_provinsi' => $mst_provinsi, 
        ]);
    }

    public function getKamar(Request $request){
        $kamar = Ms_Kamar::where("kec_kab",$request->kabID)
        ->pluck('kec_kode');
        return response()->json($kamar);
    }

    public function getRuang(Request $request){
        $ruang = Ms_Ruang::where("kec_kab",$request->kabID)
        ->pluck('kec_kode');
        return response()->json($ruang);
    }

    public function getProdi(Request $request){
        $prodi = Ms_Prodi::where("kec_kab",$request->kabID)
        ->pluck('kec_kode');
        return response()->json($prodi);
    }

    public function create(Request $request)
    {
//input pendaftaran sebagai user dulu
        $user = new \App\Models\User;
        $user->role = 'siswa';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        //$user->remember_token = str_random(60);
        $user->save();
    
//insert ke tabel siswa
        $request->request->add(['user_id' => $user->id ]);
        $siswa = \App\Models\Siswa::create($request->all());

        return redirect ('/siswa')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $jenjang = \App\Models\Jenjang::all();
        $kampus = \App\Models\Kampus::all(); 

        $fasilitas =  DB::select('select
            `fasilitas`
            FROM `fasilitas` 
            ');
        $pendidikan =  DB::select('select
            `pendidikan`
            FROM `pendidikan` 
            ');
        $pekerjaan =  DB::select('select
            `pekerjaan`
            FROM `pekerjaan` 
            ');
        $mst_provinsi =  DB::select('select
            `provinsi`
            FROM `mst_provinsi` 
            ');

        return view('siswa.edit', [
            'siswa' => $siswa, 
            'jenjang' => $jenjang, 
            'kampus' => $kampus, 
            'fasilitas' => $fasilitas,
            'mst_provinsi' => $mst_provinsi,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan
        ]);
    }

    public function update(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/siswa/'.$id.'/detail')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto
        if($request->hasFile('foto'))
        {
            $file_foto = time()."_".$request->file('foto')->getClientOriginalName();
            $request->file('foto')->move('images/',$file_foto);
            $siswa->foto = $file_foto;
            $siswa->save();
        }

        return redirect ('/siswa/'.$id.'/detail')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function editfoto($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('siswa.editfoto', ['siswa' => $siswa]);
    }

    public function detail($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        $jenjang = \App\Models\Jenjang::all();
        $kelas = \App\Models\Ms_Kelas::all(); 
        $ruang = \App\Models\Ms_Ruang::all(); 
        $kampus = \App\Models\Kampus::all(); 
        $gedung = \App\Models\Ms_Gedung::all(); 
        $kamar = \App\Models\Ms_Kamar::all();

        $nisn = \App\Models\Siswa::all();
        $nik = \App\Models\Siswa::all();
        $kk = \App\Models\Siswa::all();
        $nokip = \App\Models\Siswa::all();
        
        return view('siswa.detail', [
            'siswa' => $siswa, 
            'jenjang' => $jenjang, 
            'kelas' => $kelas, 
            'ruang' => $ruang, 
            'kampus' => $kampus, 
            'gedung' => $gedung, 
            'kamar' => $kamar, 
            'nisn' => $nisn, 
            'nik' => $nik, 
            'kk' => $kk, 
            'nokip' => $nokip
        ]);
    }

    public function updatedetail(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('siswa/'.$id.'/detail')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        // mengahpus data perizinan yang berelasi di tabel siswa
        $izin = Perizinan::where('siswa_id',$id);
        $izin->delete();

        return redirect('/siswa')->with('sukses', 'Data siswa  berhasil di hapus');
    }


////////////////////////////////////////////////////////////////////////////
    public function import(Request $request) 
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
 
        // menangkap file excel
        $file = $request->file('file');
 
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
 
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_siswa',$nama_file);
 
        // import data
        Excel::import(new SantriImport, public_path('/file_siswa/'.$nama_file));
 
        // notifikasi dengan session
        Session::flash('sukses','Data Berhasil Diimport!');
 
        // alihkan halaman kembali
        return redirect('/siswa');
    }


////////////////////////////////////////////////////////////////////////////

    public function pindahjenjangsiswa(Request $request)
    {
        $data_siswa = \App\Models\Siswa::all();
        $jenjang = \App\Models\Jenjang::all(); 
        $kelas = \App\Models\Ms_Kelas::all();

        return view('pindah.pindahkelas',[
            'data_siswa' => $data_siswa,
            'jenjang' => $jenjang,
            'kelas' => $kelas,
        ]);
    }

    public function pindahjenjang(Request $request){
        $jenjang    = $request->input('jenjang');
        $siswa_id = $request->input('siswa_id');

        foreach($siswa_id as $key => $s){
            $save['jenjang'] = $jenjang;
            DB::table('siswa')->where('id', $s)->update($save);
        }
    }

    public function pindahkelas(Request $request){
        $kelas    = $request->input('kelas');
        $siswa_id = $request->input('siswa_id');

        foreach($siswa_id as $key => $s){
            $save['kelas'] = $kelas;
            DB::table('siswa')->where('id', $s)->update($save);
        }
    }

    public function pindahruang(Request $request){
        $ruang    = $request->input('ruang');
        $siswa_id = $request->input('siswa_id');

        foreach($siswa_id as $key => $s){
            $save['ruang'] = $ruang;
            DB::table('siswa')->where('id', $s)->update($save);
        }
    }

////////////////////////////////////////////////////////////////////////////

    public function pindahkampussiswa(Request $request)
    {
        $data_siswa = \App\Models\Siswa::all();
        $kampus = \App\Models\Kampus::all(); 
        $gedung = \App\Models\Ms_Gedung::all();

        return view('pindah.pindahkamar',[
            'data_siswa' => $data_siswa,
            'kampus' => $kampus,
            'gedung' => $gedung,
        ]);
    }

    public function pindahkampus(Request $request){
        $kampus    = $request->input('kampus');
        $siswa_id = $request->input('siswa_id');

        foreach($siswa_id as $key => $s){
            $save['kampus'] = $kampus;
            DB::table('siswa')->where('id', $s)->update($save);
        }
    }

    public function pindahgedung(Request $request){
        $gedung    = $request->input('gedung');
        $siswa_id = $request->input('siswa_id');

        foreach($siswa_id as $key => $s){
            $save['gedung'] = $gedung;
            DB::table('siswa')->where('id', $s)->update($save);
        }
    }

    public function pindahkamar(Request $request){
        $kamar    = $request->input('kamar');
        $siswa_id = $request->input('siswa_id');

        foreach($siswa_id as $key => $s){
            $save['kamar'] = $kamar;
            DB::table('siswa')->where('id', $s)->update($save);
        }
    }

////////////////////////////////////////////////////////////////////////////

    public function pindahjalurpendaftaransiswa(Request $request)
    {
        $data_siswa = \App\Models\Siswa::all();

        return view('pindah.pindahjalurpendaftaran',['data_siswa' => $data_siswa]);
    }

    public function pindahjalurpendaftaran(Request $request){
        $jalurpendaftaran    = $request->input('jalurpendaftaran');
        $siswa_id = $request->input('siswa_id');

        foreach($siswa_id as $key => $s){
            $save['jalurpendaftaran'] = $jalurpendaftaran;
            DB::table('siswa')->where('id', $s)->update($save);
        }
    }

}
