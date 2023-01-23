<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Penitipan_uang;

class Penitipan_uangController extends Controller
{
    public function penitipan_uang($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $penitipan_uang = \App\Models\Penitipan_uang::where('siswa_id',$id)->get();

        return view('penitipan_uang.index', [
            'siswa' => $siswa,
            'penitipan_uang' => $penitipan_uang
        ]);
    }


    public function addpenitipan_uang(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $request->request->add(['siswa_id' => $siswa->id ]);
        $request->request->add(['nama' => $siswa->nama ]);
        $request->request->add(['jenjang' => $siswa->jenjang ]);
        $request->request->add(['kampus' => $siswa->kampus ]);
        $request->request->add(['fasilitas' => $siswa->fasilitas ]);
        $request->request->add(['jeniskelamin' => $siswa->jeniskelamin ]);

        $penitipan_uang = \App\Models\Penitipan_uang::create($request->all());


        return redirect('siswa/'.$idsiswa.'/penitipan_uang')->with('sukses', 'Data berhasil ditambah');
    }

    public function editpenitipan_uang($idsiswa, $idpenitipan_uang)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $penitipan_uang = \App\Models\Penitipan_uang::find($idpenitipan_uang);

        return view('penitipan_uang.edit', [
          'siswa' => $siswa,
          'penitipan_uang' => $penitipan_uang
        ]);
    }

    public function updatepenitipan_uang(Request $request, $idsiswa, $idpenitipan_uang)
    {       
        $siswa = \App\Models\Siswa::find($idsiswa);
        $penitipan_uang = \App\Models\Penitipan_uang::find($idpenitipan_uang);
        $penitipan_uang->update($request->all());

        return redirect ('siswa/'.$idsiswa.'/penitipan_uang')->with('sukses', 'Data pelanggaran sopir berhasil diupdate');
    }

    public function deletepenitipan_uang($idsiswa,$idpenitipan_uang)
    {
        $penitipan_uang = \App\Models\Penitipan_uang::find($idpenitipan_uang);
        $penitipan_uang->delete($penitipan_uang);

        return redirect('siswa/'.$idsiswa.'/penitipan_uang')->with('sukses', 'Data berhasil dihapus');
    }

    public function printpenitipan_uang($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $penitipan_uang = \App\Models\Penitipan_uang::where('siswa_id',$id)->get();

        return view('penitipan_uang.printpenitipan_uang', [
            'siswa' => $siswa, 
            'penitipan_uang' => $penitipan_uang
        ]);
    }

}
