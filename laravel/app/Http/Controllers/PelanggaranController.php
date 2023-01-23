<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pelanggaran;

class PelanggaranController extends Controller
{

    public function pelanggaran($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $pelanggaran = \App\Models\Pelanggaran::where('siswa_id',$id)->get();

        return view('pelanggaran.index', [
            'siswa' => $siswa,
            'pelanggaran' => $pelanggaran
        ]);
    }


    public function addpelanggaran(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $request->request->add(['siswa_id' => $siswa->id ]);
        $request->request->add(['nama' => $siswa->nama ]);
        $request->request->add(['jenjang' => $siswa->jenjang ]);
        $request->request->add(['kampus' => $siswa->kampus ]);
        $request->request->add(['fasilitas' => $siswa->fasilitas ]);
        $request->request->add(['jeniskelamin' => $siswa->jeniskelamin ]);

        $pelanggaran = \App\Models\Pelanggaran::create($request->all());


        return redirect('siswa/'.$idsiswa.'/pelanggaran')->with('sukses', 'Data berhasil ditambah');
    }

    public function editpelanggaran($idsiswa, $idpelanggaran)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $pelanggaran = \App\Models\Pelanggaran::find($idpelanggaran);


        return view('pelanggaran.edit', [
          'siswa' => $siswa,
          'pelanggaran' => $pelanggaran
        ]);
    }

    public function updatepelanggaran(Request $request, $idsiswa, $idpelanggaran)
    {       
        $siswa = \App\Models\Siswa::find($idsiswa);
        $pelanggaran = \App\Models\Pelanggaran::find($idpelanggaran);
        $pelanggaran->update($request->all());

        return redirect ('siswa/'.$idsiswa.'/pelanggaran')->with('sukses', 'Data pelanggaran sopir berhasil diupdate');
    }

    public function deletepelanggaran($idsiswa,$idpelanggaran)
    {
        $pelanggaran = \App\Models\Pelanggaran::find($idpelanggaran);
        $pelanggaran->delete($pelanggaran);

        return redirect('siswa/'.$idsiswa.'/pelanggaran')->with('sukses', 'Data berhasil dihapus');
    }

    public function printpelanggaran($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $pelanggaran = \App\Models\Pelanggaran::where('siswa_id',$id)->get();

        return view('pelanggaran.printpelanggaran', [
            'siswa' => $siswa, 
            'pelanggaran' => $pelanggaran
        ]);
    }

}
