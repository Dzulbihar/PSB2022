<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Siswa;
use App\Models\Hukuman;
use App\Models\Hadiah;
use App\Models\Sanksi;
use App\Models\Hukuman_siswa;
use App\Models\Hadiah_siswa;

//use Carbon\Carbon;
use Illuminate\Support\Carbon;

class UmarController extends Controller
{

    public function index201(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 1" and`gedung`="Ummar bin Khattab" and `kamar`="201"');

        return view('gedung.kampus1.umar.index201',['data_siswa' => $data_siswa]);
    }

    public function create201(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/umar201')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit201($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus1.umar.edit201', ['siswa' => $siswa]);
    }

    public function editfoto201($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus1.umar.editfoto201', ['siswa' => $siswa]);
    }

    public function update201(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/umar201')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto201(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/umar201')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete201($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/umar201')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail201($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//senang
        $senang = \App\Models\Hadiah::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus1.umar.detail201', ['siswa' => $siswa, 'sanksi' => $sanksi, 'senang' => $senang, 'nakal' => $nakal]);
    }

//////////////////////////////////////////////////////////////////////////
        public function addpelanggaranumar201(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('umar201/'.$idsiswa.'/detail201')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaranumar201($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }

    public function printpelanggaran201($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus1.umar.printpelanggaran201', ['siswa' => $siswa]);
    }

    public function exportpelanggaran201($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus1.umar.exportpelanggaran201', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

//////////////////////////////////////////////////////////////////////////
        public function addprestasiumar201(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hadiah()->attach($request->hadiah, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'kategori' => $request->kategori, 'tingkat' => $request->tingkat, 'catatan' => $request->catatan, 'skor' => $request->skor]);

        return redirect('umar201/'.$idsiswa.'/detail201')->with('sukses', 'Data Prestasi berhasil dimasukkan');
    }

        public function deleteprestasiumar201($idsiswa,$idhadiah)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hadiah()->detach($ihadiah);
        return redirect()->back()->with('sukses', 'Data Prestasi berhasil dihapus');
    }

    public function printprestasi201($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus1.umar.printprestasi201', ['siswa' => $siswa]);
    }

    public function exportprestasi201($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//senang
        $senang = \App\Models\Hadiah::all();

        return view('gedung.kampus1.umar.exportprestasi201', ['siswa' => $siswa, 'senang' => $senang]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



}

