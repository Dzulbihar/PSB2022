<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

// use Illuminate\Support\Facades\DB;
use App\Models\Siswa;
use App\Models\User;

use App\Models\Jenjang;
use App\Models\Ms_Kelas;
use App\Models\Ms_Ruang;
use App\Models\Kampus;
use App\Models\Ms_Gedung;
use App\Models\Ms_Kamar;

use App\Models\Biaya;
use App\Models\Biaya_awal_masuk;
use App\Models\Upload_syarat_daftar_online;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Import;
use App\Imports\SantriImport;

use Carbon\Carbon;
use DB;

use App\Models\Caption_printdatadiri;
use App\Models\Nomor_pembayaran;
use App\Models\Transfer_bank;
use App\Models\Biaya_pendaftaran;
use App\Models\Ukuran_seragam;
use App\Models\Ms_seragam;


class DaftarController extends Controller
{

    public function index(Request $request)
    {
        $jenjang =  DB::select('select
            `jenjang`
            FROM `jenjang` 
            ');
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

        return view('daftar.index',[
            'jenjang' => $jenjang,
            'fasilitas' => $fasilitas,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
            'mst_provinsi' => $mst_provinsi,
        ]);
    }


    public function createdaftar(Request $request)
    {
//input pendaftaran sebagai user dulu
        $user = new \App\Models\User;
        $user->role = 'siswa';
        $user->jenjang = $request->jenjang;
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        //$user->remember_token = str_random(60);
        $user->save();

//insert ke tabel siswa
        $request->request->add(['user_id' => $user->id ]);
        $siswa = \App\Models\Siswa::create($request->all());

//input pendaftaran sebagai biaya_awal_masuk dulu untuk filtering status registrasi
        $biaya_awal_masuk = new \App\Models\Biaya_awal_masuk;
        $biaya_awal_masuk->siswa_id = $siswa->id;
        $biaya_awal_masuk->nama = $request->nama;
        $biaya_awal_masuk->registrasi = 'belum';
        $biaya_awal_masuk->lunas = 'belum';
        $biaya_awal_masuk->waktu = $siswa->waktu;
        $biaya_awal_masuk->save();

        return redirect ('/daftar/data')->with('sukses', 'Data berhasil di tambah');
    }

    public function data()
    {
    	$data_siswa = DB::select('select `id`,`nama`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`nohp`,`status` FROM `siswa` 
            WHERE `status`="0" and `jalurpendaftaran`="offline"
            ');
        // $data_siswa = DB::select('select `id`,`nama`,`jalurpendaftaran`,`jenjang`,`prodi``fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`nohp`,`status` FROM `siswa` 
        //     WHERE `status`="0"
        //     and (`jalurpendaftaran`="offline" or `jalurpendaftaran`="online")
        //     ');
    	$jenjang = \App\Models\Jenjang::all();

    	return view('daftar.data',['data_siswa' => $data_siswa,'jenjang' => $jenjang]);
    }

    public function data_online()
    {
        $data_siswa = DB::select('select `id`,`nama`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`nohp`,`status` FROM `siswa` 
            WHERE `status`="0" and `jalurpendaftaran`="online"
            ');
        $jenjang = \App\Models\Jenjang::all();

        return view('daftar.data_online',['data_siswa' => $data_siswa,'jenjang' => $jenjang]);
    }

    public function dataditerimaSMP1()
    {
    	$data_siswa = DB::select('select `id`,`nama`,`jenjang`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`nohp`,`status` FROM `siswa` 
            WHERE `status`="1" and `jalurpendaftaran`="offline" and `jenjang`="SMP 1"
            ');
    	$jenjang = \App\Models\Jenjang::all();

    	return view('daftar.dataditerimaSMP1',['data_siswa' => $data_siswa,'jenjang' => $jenjang]);
    }

    public function dataditerimaSMP1_online()
    {
        $data_siswa = DB::select('select `id`,`nama`,`jenjang`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`nohp`,`status` FROM `siswa` 
            WHERE `status`="1" and `jalurpendaftaran`="online" and `jenjang`="SMP 1"
            ');
        $jenjang = \App\Models\Jenjang::all();

        return view('daftar.dataditerimaSMP1_online',['data_siswa' => $data_siswa,'jenjang' => $jenjang]);
    }

    public function dataditerimaSMP2()
    {
        $data_siswa = DB::select('select `id`,`nama`,`jenjang`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`nohp`,`status` FROM `siswa` 
            WHERE `status`="1" and `jalurpendaftaran`="offline" and `jenjang`="SMP 2"
            ');
        $jenjang = \App\Models\Jenjang::all();

        return view('daftar.dataditerimaSMP2',['data_siswa' => $data_siswa,'jenjang' => $jenjang]);
    }

    public function dataditerimaSMP2_online()
    {
        $data_siswa = DB::select('select `id`,`nama`,`jenjang`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`nohp`,`status` FROM `siswa` 
            WHERE `status`="1" and `jalurpendaftaran`="online" and `jenjang`="SMP 2"
            ');
        $jenjang = \App\Models\Jenjang::all();

        return view('daftar.dataditerimaSMP2_online',['data_siswa' => $data_siswa,'jenjang' => $jenjang]);
    }

    public function dataditerimaMTs()
    {
        $data_siswa = DB::select('select `id`,`nama`,`jenjang`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`nohp`,`status` FROM `siswa` 
            WHERE `status`="1" and `jalurpendaftaran`="offline" and `jenjang`="MTs"
            ');
        $jenjang = \App\Models\Jenjang::all();

        return view('daftar.dataditerimaMTs',['data_siswa' => $data_siswa,'jenjang' => $jenjang]);
    }

    public function dataditerimaMTs_online()
    {
        $data_siswa = DB::select('select `id`,`nama`,`jenjang`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`nohp`,`status` FROM `siswa` 
            WHERE `status`="1" and `jalurpendaftaran`="online" and `jenjang`="MTs"
            ');
        $jenjang = \App\Models\Jenjang::all();

        return view('daftar.dataditerimaMTs_online',['data_siswa' => $data_siswa,'jenjang' => $jenjang]);
    }

    public function dataditerimaSMK()
    {
        $data_siswa = DB::select('select `id`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`nohp`,`status` FROM `siswa` 
            WHERE `status`="1" and `jalurpendaftaran`="offline" and `jenjang`="SMK"
            ');
        $jenjang = \App\Models\Jenjang::all();

        return view('daftar.dataditerimaSMK',['data_siswa' => $data_siswa,'jenjang' => $jenjang]);
    }

    public function dataditerimaSMK_online()
    {
        $data_siswa = DB::select('select `id`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`nohp`,`status` FROM `siswa` 
            WHERE `status`="1" and `jalurpendaftaran`="online" and `jenjang`="SMK"
            ');
        $jenjang = \App\Models\Jenjang::all();

        return view('daftar.dataditerimaSMK_online',['data_siswa' => $data_siswa,'jenjang' => $jenjang]);
    }

    public function dataditerimaMA()
    {
        $data_siswa = DB::select('select `id`,`nama`,`jenjang`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`nohp`,`status` FROM `siswa` 
            WHERE `status`="1" and `jalurpendaftaran`="offline" and `jenjang`="MA"
            ');
        $jenjang = \App\Models\Jenjang::all();

        return view('daftar.dataditerimaMA',['data_siswa' => $data_siswa,'jenjang' => $jenjang]);
    }

    public function dataditerimaMA_online()
    {
        $data_siswa = DB::select('select `id`,`nama`,`jenjang`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`nohp`,`status` FROM `siswa` 
            WHERE `status`="1" and `jalurpendaftaran`="online" and `jenjang`="MA"
            ');
        $jenjang = \App\Models\Jenjang::all();

        return view('daftar.dataditerimaMA_online',['data_siswa' => $data_siswa,'jenjang' => $jenjang]);
    }

    public function dataditerimaMAHADALY()
    {
        $data_siswa = DB::select('select `id`,`nama`,`jenjang`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`nohp`,`status` FROM `siswa` 
            WHERE `status`="1" and `jalurpendaftaran`="offline" and `jenjang`="Mahad Aly"
            ');
        $jenjang = \App\Models\Jenjang::all();

        return view('daftar.dataditerimaMAHADALY',['data_siswa' => $data_siswa,'jenjang' => $jenjang]);
    }

    public function dataditerimaMAHADALY_online()
    {
        $data_siswa = DB::select('select `id`,`nama`,`jenjang`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`nohp`,`status` FROM `siswa` 
            WHERE `status`="1" and `jalurpendaftaran`="online" and `jenjang`="Mahad Aly"
            ');
        $jenjang = \App\Models\Jenjang::all();

        return view('daftar.dataditerimaMAHADALY_online',['data_siswa' => $data_siswa,'jenjang' => $jenjang]);
    }

    public function status($id)
    {
    //lihat data
    	$siswa = \DB::table('siswa')->where('id',$id)->first();
    //lihat status sekarang
    	$status_sekarang = $siswa->status;
    //kondisi
    	if($status_sekarang == 1){
    		\DB::table('siswa')->where('id',$id)->update([
    			'status'=>0
    		]);
    	}else{
    		\DB::table('siswa')->where('id',$id)->update([
    			'status'=>1
    		]);
    	}
    	// \Session::flash('sukses','Status berhasil di update');
    	return redirect('/daftar/data')->with('sukses', 'Data Status berhasil di update');
    }

    public function edit($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $jenjang =  DB::select('select
            `jenjang`
            FROM `jenjang` 
            ');
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


        return view('daftar.edit', [
            'siswa' => $siswa, 
            'jenjang' => $jenjang,
            'fasilitas' => $fasilitas,
            'mst_provinsi' => $mst_provinsi,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
        ]);
    }

    public function update(Request $request ,$id)
    {       
        $daftar = \App\Models\Siswa::find($id);
        $daftar->update($request->all());

        return redirect ('/daftar/'.$id.'/detail')->with('sukses', 'Data pendaftaran berhasil di update');
    }


    public function editfoto($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('daftar.editfoto', ['siswa' => $siswa]);
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

        return redirect ('/daftar/'.$id.'/detail')->with('sukses', 'Data siswa  berhasil di update');
    }
/////////////////////////////////////////////////////////
    public function detail(Request $user_id ,$id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $user = \App\Models\User::find($id);

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

        $Upload_syarat = \App\Models\Upload_syarat_daftar_online::where('siswa_id',$id)->get();


        return view('daftar.detail', [
            'siswa' => $siswa,
            'user' => $user, 
            'jenjang' => $jenjang, 
            'kelas' => $kelas, 
            'ruang' => $ruang, 
            'kampus' => $kampus, 
            'gedung' => $gedung, 
            'kamar' => $kamar, 
            'nisn' => $nisn, 
            'nik' => $nik, 
            'kk' => $kk, 
            'nokip' => $nokip,
            'Upload_syarat' => $Upload_syarat
        ]);
    }

    public function updatedetail(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/daftar/'.$id.'/detail')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatedetail_biaya(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/daftar/'.$id.'/biayaawalmasuk')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete($id)
    {
        $daftar = \App\Models\Siswa::find($id);
        $daftar->delete($daftar);

        return redirect('/daftar/data')->with('sukses', 'Data pendaftaran berhasil di hapus');
    }

    public function deletedataditerimaSMP1($id)
    {
        $daftar = \App\Models\Siswa::find($id);
        $daftar->delete($daftar);

        return redirect('/daftar/dataditerimaSMP1')->with('sukses', 'Data pendaftaran berhasil di hapus');
    }

    public function deletedataditerimaSMP2($id)
    {
        $daftar = \App\Models\Siswa::find($id);
        $daftar->delete($daftar);

        return redirect('/daftar/dataditerimaSMP2')->with('sukses', 'Data pendaftaran berhasil di hapus');
    }

    public function deletedataditerimaMTs($id)
    {
        $daftar = \App\Models\Siswa::find($id);
        $daftar->delete($daftar);

        return redirect('/daftar/dataditerimaMTs')->with('sukses', 'Data pendaftaran berhasil di hapus');
    }    

    public function deletedataditerimaSMK($id)
    {
        $daftar = \App\Models\Siswa::find($id);
        $daftar->delete($daftar);

        return redirect('/daftar/dataditerimaSMK')->with('sukses', 'Data pendaftaran berhasil di hapus');
    }

    public function deletedataditerimaMA($id)
    {
        $daftar = \App\Models\Siswa::find($id);
        $daftar->delete($daftar);

        return redirect('/daftar/dataditerimaMA')->with('sukses', 'Data pendaftaran berhasil di hapus');
    }

    public function printdatadiri($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $data_siswa = \App\Models\Siswa::where('nama')->get();

        $siswa->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');
        //$siswa->tbt1 = Carbon::now()->isoFormat('D MMMM Y');  
        $captions = \App\Models\Caption_printdatadiri::all();
        $nomors = \App\Models\Nomor_pembayaran::all(); 
        $transfers = \App\Models\Transfer_bank::all();        

        // $tgl = $siswa->tanggallahir->isoFormat('dddd, D MMMM Y');

        return view('daftar.printdatadiri', [
            'siswa' => $siswa, 
            'data_siswa' => $data_siswa,
            'captions' => $captions,
            'nomors' => $nomors,
            'transfers' => $transfers,
            // 'tgl' => $tgl
        ]);
    }

    public function printslipregistrasi($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $data_siswa = \App\Models\Siswa::where('nama')->get();

        $siswa->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');
        $biayas = \App\Models\Biaya_pendaftaran::all(); 

        return view('daftar.printslipregistrasi', [
            'siswa' => $siswa, 
            'data_siswa' => $data_siswa,
            'biayas' => $biayas
        ]);
    }




//////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////
    public function biayaawalmasuk($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $uang = DB::select('
            select `smpreg1`, `smpnonreg1`, `smpreg2`, `smpnonreg2`, 
            `mtsreg1`, `mtsnonreg1`, `mtsreg2`, `mtsnonreg2`,
            `smkreg1`, `smknonreg1`, `smkreg2`, `smknonreg2`,
            `mareg1`, `manonreg1`, `mareg2`, `manonreg2`
            FROM `biaya` 
            WHERE `id`="1"
            ');

        $biaya_awal_masuk = \App\Models\Biaya_awal_masuk::where('siswa_id',$id)->
        // whereIn('registrasi', ["angsuran","sudah registrasi"])->
        get();

        $kampus = \App\Models\Kampus::all(); 
        $gedung = \App\Models\Ms_Gedung::all(); 
        $kamar = \App\Models\Ms_Kamar::all();
        $jenjang = \App\Models\Jenjang::all();
        $kelas = \App\Models\Ms_Kelas::all(); 
        $ruang = \App\Models\Ms_Ruang::all();

        $price = DB::table('biaya_awal_masuk')
                        ->where('id', $siswa->id)
                        ->sum('biaya');

        return view('daftar.biayaawalmasuk', [
            'siswa' => $siswa,
            'uang' => $uang,
            'biaya_awal_masuk' => $biaya_awal_masuk,

            'kampus' => $kampus,
            'gedung' => $gedung,
            'kamar' => $kamar,
            'jenjang' => $jenjang,
            'kelas' => $kelas,
            'ruang' => $ruang,

            'price' => $price
        ]);
    }


    public function addbiaya(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $request->request->add(['siswa_id' => $siswa->id ]);
        $request->request->add(['jalurpendaftaran' => $siswa->jalurpendaftaran ]);
        $request->request->add(['jenjang' => $siswa->jenjang ]);
        $request->request->add(['nama' => $siswa->nama ]);
        $request->request->add(['fasilitas' => $siswa->fasilitas ]);
        $request->request->add(['jeniskelamin' => $siswa->jeniskelamin ]);

        $biaya_awal_masuk = \App\Models\Biaya_awal_masuk::create($request->all());


        return redirect('daftar/'.$idsiswa.'/biayaawalmasuk')->with('sukses', 'Silakan menunggu verifikasi dari admin melalui notifikasi email');
    }


        public function deleteregistrasi($idsiswa,$idbiaya)
    {
        $biaya_awal_masuk = \App\Models\Biaya_awal_masuk::find($idbiaya);
        $biaya_awal_masuk->delete($biaya_awal_masuk);

        return redirect('daftar/'.$idsiswa.'/biayaawalmasuk')->with('sukses', 'Data Data Biaya Awal berhasil dihapus');
    }

    public function printregistrasi($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $data_siswa = \App\Models\Biaya_awal_masuk::where('siswa_id',$id)->
        whereIn('registrasi', ["angsuran","sudah registrasi"])->
        get();

        return view('daftar.printregistrasi', [
            'siswa' => $siswa, 
            'data_siswa' => $data_siswa
        ]);
    }


//////////////////////////////////////////////////////////

    public function chatwa($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $data_siswa = \App\Models\Biaya_awal_masuk::where('siswa_id',$id)->get();
        $smp1 = DB::select('
            select `chatwa`
            FROM `chatwa` 
            WHERE `id`="1"
            ');
        $smp2 = DB::select('
            select `chatwa`
            FROM `chatwa` 
            WHERE `id`="2"
            ');
        $mts = DB::select('
            select `chatwa`
            FROM `chatwa` 
            WHERE `id`="3"
            ');
        $smk = DB::select('
            select `chatwa`
            FROM `chatwa` 
            WHERE `id`="4"
            ');
        $ma = DB::select('
            select `chatwa`
            FROM `chatwa` 
            WHERE `id`="5"
            ');

        return view('daftar.chatwa', [
            'siswa' => $siswa, 
            'data_siswa' => $data_siswa,
            'smp1' => $smp1,
            'smp2' => $smp2,
            'mts' => $mts,
            'smk' => $smk,
            'ma' => $ma
        ]);
    }

    public function kirim_pesan(Request $request)
    {
        if (isset($_POST['submit'])) {
            $chatwa  = $request->chatwa;
            // $tanggal    = date('d F Y', strtotime($request->tanggal));
            $nohp   = $_POST['nohp'];
            
            header("location:https://api.whatsapp.com/send?phone=$nohp&text=$chatwa%20%0D");
        }
        else {
            echo "
                <script>
                    window.location=histoty.go(-1);
                <script>
            ";
        }
    }


    public function email_online(Request $request)
    {
        $users = \App\Models\User::all()->where('jalurpendaftaran', 'Online');

        return view('daftar.email_online',[
            'users' => $users,
        ]);
    }

}
