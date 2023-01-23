<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Siswa;
use App\Models\Prestasi;

class PrestasiController extends Controller
{

    public function prestasi($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $prestasi = \App\Models\Prestasi::where('siswa_id',$id)->get();

        return view('prestasi.index', [
            'siswa' => $siswa,
            'prestasi' => $prestasi
        ]);
    }


    public function addprestasi(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $request->request->add(['siswa_id' => $siswa->id ]);
        $request->request->add(['nama' => $siswa->nama ]);
        $request->request->add(['jenjang' => $siswa->jenjang ]);
        $request->request->add(['kampus' => $siswa->kampus ]);
        $request->request->add(['fasilitas' => $siswa->fasilitas ]);
        $request->request->add(['jeniskelamin' => $siswa->jeniskelamin ]);

        $prestasi = \App\Models\Prestasi::create($request->all());


        return redirect('siswa/'.$idsiswa.'/prestasi')->with('sukses', 'Data berhasil ditambah');
    }

    public function editprestasi($idsiswa, $idprestasi)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $prestasi = \App\Models\Prestasi::find($idprestasi);

        return view('prestasi.edit', [
          'siswa' => $siswa,
          'prestasi' => $prestasi
        ]);
    }

    public function updateprestasi(Request $request, $idsiswa, $idprestasi)
    {       
        $siswa = \App\Models\Siswa::find($idsiswa);
        $prestasi = \App\Models\Prestasi::find($idprestasi);
        $prestasi->update($request->all());

        return redirect ('siswa/'.$idsiswa.'/prestasi')->with('sukses', 'Data pelanggaran sopir berhasil diupdate');
    }

    public function deleteprestasi($idsiswa,$idprestasi)
    {
        $prestasi = \App\Models\Prestasi::find($idprestasi);
        $prestasi->delete($prestasi);

        return redirect('siswa/'.$idsiswa.'/prestasi')->with('sukses', 'Data berhasil dihapus');
    }

    public function printprestasi($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $prestasi = \App\Models\Prestasi::where('siswa_id',$id)->get();

        return view('prestasi.printprestasi', [
            'siswa' => $siswa, 
            'prestasi' => $prestasi
        ]);
    }

}
