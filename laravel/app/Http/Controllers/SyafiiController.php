<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Hukuman;
use App\Models\Siswa;
use App\Models\Sanksi;
use App\Models\Hukuman_siswa;

//use Carbon\Carbon;
use Illuminate\Support\Carbon;

class SyafiiController extends Controller
{

    public function index101(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="101"');

        return view('gedung.kampus2.syafii.index101',['data_siswa' => $data_siswa]);
    }

    public function create101(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii101')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit101($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit101', ['siswa' => $siswa]);
    }

    public function editfoto101($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto101', ['siswa' => $siswa]);
    }

    public function update101(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii101')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto101(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii101')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete101($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii101')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail101($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail101', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }

        public function addpelanggaransyafii101(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii101/'.$idsiswa.'/detail101')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii101($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export101($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export101', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print101($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print101', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index102(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="102"');

        return view('gedung.kampus2.syafii.index102',['data_siswa' => $data_siswa]);
    }

    public function create102(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii102')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit102($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit102', ['siswa' => $siswa]);
    }

    public function editfoto102($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto102', ['siswa' => $siswa]);
    }

    public function update102(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii102')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto102(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii102')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete102($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii102')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail102($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail102', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }

        public function addpelanggaransyafii102(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii102/'.$idsiswa.'/detail102')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii102($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export102($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export102', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print102($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print102', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index103(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="103"');

        return view('gedung.kampus2.syafii.index103',['data_siswa' => $data_siswa]);
    }

    public function create103(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii103')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit103($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit103', ['siswa' => $siswa]);
    }

    public function editfoto103($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto103', ['siswa' => $siswa]);
    }

    public function update103(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii103')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto103(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii103')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete103($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii103')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail103($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail103', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }

        public function addpelanggaransyafii103(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii103/'.$idsiswa.'/detail103')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii103($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export103($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export103', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print103($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print103', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index104(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="104"');

        return view('gedung.kampus2.syafii.index104',['data_siswa' => $data_siswa]);
    }

    public function create104(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii104')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit104($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit104', ['siswa' => $siswa]);
    }

    public function editfoto104($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto104', ['siswa' => $siswa]);
    }

    public function update104(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii104')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto104(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii104')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete104($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii104')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail104($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail104', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }

        public function addpelanggaransyafii104(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii104/'.$idsiswa.'/detail104')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii104($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export104($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export104', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print104($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print104', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index105(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="105"');

        return view('gedung.kampus2.syafii.index105',['data_siswa' => $data_siswa]);
    }

    public function create105(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii105')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit105($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit105', ['siswa' => $siswa]);
    }

    public function editfoto105($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto105', ['siswa' => $siswa]);
    }

    public function update105(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii105')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto105(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii105')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete105($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii105')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail105($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail105', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }

        public function addpelanggaransyafii105(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii105/'.$idsiswa.'/detail105')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii105($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export105($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export105', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print105($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print105', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index106(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="106"');

        return view('gedung.kampus2.syafii.index106',['data_siswa' => $data_siswa]);
    }

    public function create106(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii106')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit106($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit106', ['siswa' => $siswa]);
    }

    public function editfoto106($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto106', ['siswa' => $siswa]);
    }

    public function update106(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii106')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto106(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii106')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete106($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii106')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail106($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail106', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }

        public function addpelanggaransyafii106(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii106/'.$idsiswa.'/detail106')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii106($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export106($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export106', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print106($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print106', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index201(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="201"');

        return view('gedung.kampus2.syafii.index201',['data_siswa' => $data_siswa]);
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

        return redirect ('/syafii201')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit201($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit201', ['siswa' => $siswa]);
    }

    public function editfoto201($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto201', ['siswa' => $siswa]);
    }

    public function update201(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii201')->with('sukses', 'Data siswa  berhasil di update');
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

        return redirect ('/syafii201')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete201($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii201')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail201($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail201', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }

        public function addpelanggaransyafii201(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii201/'.$idsiswa.'/detail201')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii201($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export201($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export201', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print201($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print201', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index202(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="202"');

        return view('gedung.kampus2.syafii.index202',['data_siswa' => $data_siswa]);
    }

    public function create202(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii202')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit202($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit202', ['siswa' => $siswa]);
    }

    public function editfoto202($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto202', ['siswa' => $siswa]);
    }

    public function update202(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii202')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto202(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii202')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete202($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii202')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail202($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail202', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }

        public function addpelanggaransyafii202(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii202/'.$idsiswa.'/detail202')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii202($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export202($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export202', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print202($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print202', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index203(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="203"');

        return view('gedung.kampus2.syafii.index203',['data_siswa' => $data_siswa]);
    }

    public function create203(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii203')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit203($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit203', ['siswa' => $siswa]);
    }

    public function editfoto203($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto203', ['siswa' => $siswa]);
    }

    public function update203(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii203')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto203(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii203')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete203($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii203')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail203($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail203', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }

        public function addpelanggaransyafii203(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii203/'.$idsiswa.'/detail203')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii203($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export203($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export203', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print203($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print203', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index204(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="204"');

        return view('gedung.kampus2.syafii.index204',['data_siswa' => $data_siswa]);
    }

    public function create204(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii204')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit204($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit204', ['siswa' => $siswa]);
    }

    public function editfoto204($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto204', ['siswa' => $siswa]);
    }

    public function update204(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii204')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto204(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii204')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete204($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii204')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail204($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail204', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }

        public function addpelanggaransyafii204(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii204/'.$idsiswa.'/detail204')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii204($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export204($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export204', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print204($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print204', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index205(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="205"');

        return view('gedung.kampus2.syafii.index205',['data_siswa' => $data_siswa]);
    }

    public function create205(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii205')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit205($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit205', ['siswa' => $siswa]);
    }

    public function editfoto205($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto205', ['siswa' => $siswa]);
    }

    public function update205(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii205')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto205(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii205')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete205($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii205')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail205($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail205', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }

        public function addpelanggaransyafii205(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii205/'.$idsiswa.'/detail205')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii205($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export205($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export205', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print205($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print205', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index206(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="206"');

        return view('gedung.kampus2.syafii.index206',['data_siswa' => $data_siswa]);
    }

    public function create206(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii206')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit206($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit206', ['siswa' => $siswa]);
    }

    public function editfoto206($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto206', ['siswa' => $siswa]);
    }

    public function update206(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii206')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto206(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii206')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete206($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii206')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail206($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail206', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }

        public function addpelanggaransyafii206(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii206/'.$idsiswa.'/detail206')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii206($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export206($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export206', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print206($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print206', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index301(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="301"');

        return view('gedung.kampus2.syafii.index301',['data_siswa' => $data_siswa]);
    }

    public function create301(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii301')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit301($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit301', ['siswa' => $siswa]);
    }

    public function editfoto301($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto301', ['siswa' => $siswa]);
    }

    public function update301(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii301')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto301(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii301')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete301($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii301')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail301($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail301', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }

        public function addpelanggaransyafii301(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii301/'.$idsiswa.'/detail301')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii301($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export301($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export301', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print301($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print301', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index302(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="302"');

        return view('gedung.kampus2.syafii.index302',['data_siswa' => $data_siswa]);
    }

    public function create302(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii302')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit302($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit302', ['siswa' => $siswa]);
    }

    public function editfoto302($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto302', ['siswa' => $siswa]);
    }

    public function update302(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii302')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto302(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii302')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete302($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii302')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail302($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail302', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }


        public function addpelanggaransyafii302(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii302/'.$idsiswa.'/detail302')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii302($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export302($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export302', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print302($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print302', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index303(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="303"');

        return view('gedung.kampus2.syafii.index303',['data_siswa' => $data_siswa]);
    }

    public function create303(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii303')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit303($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit303', ['siswa' => $siswa]);
    }

    public function editfoto303($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto303', ['siswa' => $siswa]);
    }

    public function update303(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii303')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto303(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii303')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete303($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii303')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail303($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail303', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }


        public function addpelanggaransyafii303(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii303/'.$idsiswa.'/detail303')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii303($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export303($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export303', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print303($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print303', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index304(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="304"');

        return view('gedung.kampus2.syafii.index304',['data_siswa' => $data_siswa]);
    }

    public function create304(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii304')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit304($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit304', ['siswa' => $siswa]);
    }

    public function editfoto304($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto304', ['siswa' => $siswa]);
    }

    public function update304(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii304')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto304(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii304')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete304($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii304')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail304($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail304', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }

        public function addpelanggaransyafii304(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii304/'.$idsiswa.'/detail304')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii304($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export304($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export304', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print304($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print304', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index305(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="305"');

        return view('gedung.kampus2.syafii.index305',['data_siswa' => $data_siswa]);
    }

    public function create305(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii305')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit305($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit305', ['siswa' => $siswa]);
    }

    public function editfoto305($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto305', ['siswa' => $siswa]);
    }

    public function update305(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii305')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto305(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii305')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete305($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii305')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail305($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail305', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }


        public function addpelanggaransyafii305(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii305/'.$idsiswa.'/detail305')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii305($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export305($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export305', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print305($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print305', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index306(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="306"');

        return view('gedung.kampus2.syafii.index306',['data_siswa' => $data_siswa]);
    }

    public function create306(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii306')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit306($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit306', ['siswa' => $siswa]);
    }

    public function editfoto306($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto306', ['siswa' => $siswa]);
    }

    public function update306(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii306')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto306(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii306')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete306($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii306')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail306($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail306', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }


        public function addpelanggaransyafii306(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii306/'.$idsiswa.'/detail306')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii306($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export306($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export306', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print306($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print306', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index401(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="401"');

        return view('gedung.kampus2.syafii.index401',['data_siswa' => $data_siswa]);
    }

    public function create401(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii401')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit401($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit401', ['siswa' => $siswa]);
    }

    public function editfoto401($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto401', ['siswa' => $siswa]);
    }

    public function update401(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii401')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto401(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii401')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete401($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii401')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail401($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail401', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }


        public function addpelanggaransyafii401(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii401/'.$idsiswa.'/detail401')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii401($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export401($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export401', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print401($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print401', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index402(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="402"');

        return view('gedung.kampus2.syafii.index402',['data_siswa' => $data_siswa]);
    }

    public function create402(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii402')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit402($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit402', ['siswa' => $siswa]);
    }

    public function editfoto402($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto402', ['siswa' => $siswa]);
    }

    public function update402(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii402')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto402(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii402')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete402($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii402')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail402($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail402', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }

        public function addpelanggaransyafii402(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii402/'.$idsiswa.'/detail402')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii402($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export402($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export402', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print402($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print402', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index403(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="403"');

        return view('gedung.kampus2.syafii.index403',['data_siswa' => $data_siswa]);
    }

    public function create403(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii403')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit403($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit403', ['siswa' => $siswa]);
    }

    public function editfoto403($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto403', ['siswa' => $siswa]);
    }

    public function update403(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii403')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto403(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii403')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete403($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii403')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail403($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail403', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }

        public function addpelanggaransyafii403(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii403/'.$idsiswa.'/detail403')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii403($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export403($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export403', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print403($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print403', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index404(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="404"');

        return view('gedung.kampus2.syafii.index404',['data_siswa' => $data_siswa]);
    }

    public function create404(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii404')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit404($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit404', ['siswa' => $siswa]);
    }

    public function editfoto404($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto404', ['siswa' => $siswa]);
    }

    public function update404(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii404')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto404(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii404')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete404($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii404')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail404($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail404', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }

        public function addpelanggaransyafii404(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii404/'.$idsiswa.'/detail404')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii404($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export404($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export404', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print404($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print404', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index405(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="405"');

        return view('gedung.kampus2.syafii.index405',['data_siswa' => $data_siswa]);
    }

    public function create405(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii405')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit405($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit405', ['siswa' => $siswa]);
    }

    public function editfoto405($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto405', ['siswa' => $siswa]);
    }

    public function update405(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii405')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto405(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii405')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete405($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii405')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail405($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail405', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }

        public function addpelanggaransyafii405(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii405/'.$idsiswa.'/detail405')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii405($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export405($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export405', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print405($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print405', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index406(Request $request)
    {
        //$data_siswa = \App\Models\Siswa::all();

        $data_siswa = DB::select('select `id`,`nama`,`kampus`,`gedung`,`kamar`,`jenjang`,`kelas`,`ruang`,`alamat`,`wali`,`nohp`,`foto` FROM `siswa` WHERE `kampus`="Kampus 2" and`gedung`="Imam Syafii" and `kamar`="406"');

        return view('gedung.kampus2.syafii.index406',['data_siswa' => $data_siswa]);
    }

    public function create406(Request $request)
    {
        $siswa = \App\Models\Siswa::create($request->all());
//tambah foto
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii406')->with('sukses', 'Data siswa  berhasil di tambah');
    }

    public function edit406($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.edit406', ['siswa' => $siswa]);
    }

    public function editfoto406($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.editfoto406', ['siswa' => $siswa]);
    }

    public function update406(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/syafii406')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function updatefoto406(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto      
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $siswa->foto = $request->file('foto')->getClientOriginalName();
            $siswa->save();
        }

        return redirect ('/syafii406')->with('sukses', 'Data siswa  berhasil di update');
    }

    public function delete406($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete($siswa);

        return redirect('/syafii406')->with('sukses', 'Data siswa  berhasil di hapus');
    }

    public function detail406($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();
//tambah bentuk hukuman
        $nakal = \App\Models\Sanksi::all(); 
        
        return view('gedung.kampus2.syafii.detail406', ['siswa' => $siswa, 'sanksi' => $sanksi, 'nakal' => $nakal]);
    }

        public function addpelanggaransyafii406(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);

        $siswa->hukuman()->attach($request->hukuman, ['nama' => $request->nama, 'tanggal' => $request->tanggal, 'bentuk' => $request->bentuk, 'hukum' => $request->hukum, 'catatan' => $request->catatan, 'kategori' => $request->kategori, 'skor' => $request->skor]);

        return redirect('syafii406/'.$idsiswa.'/detail406')->with('sukses', 'Data Pelanggaran berhasil dimasukkan');
    }

        public function deletepelanggaransyafii406($idsiswa,$idhukuman)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->hukuman()->detach($idhukuman);
        return redirect()->back()->with('sukses', 'Data Pelanggaran berhasil dihapus');
    }


    public function export406($id)
    {
        $siswa = \App\Models\Siswa::find($id);
//sanksi
        $sanksi = \App\Models\Hukuman::all();

        return view('gedung.kampus2.syafii.export406', ['siswa' => $siswa, 'sanksi' => $sanksi]);
    }

    public function print406($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('gedung.kampus2.syafii.print406', ['siswa' => $siswa]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


}
