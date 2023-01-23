<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Siswa;
use DB;
use App\Models\Kampus;

class LaporanDataController extends Controller
{

    public function data_kampus_1(Request $request)
    {
        $kampus = \App\Models\Kampus::all(); 
        $data_siswa = \App\Models\Siswa::
        // where('jalurpendaftaran', "Santri Lama")->
        where('kampus', "Kampus 1")->
        get();

        return view('laporan_data.kampus.kampus_1',[
            'data_siswa' => $data_siswa,
            'kampus' => $kampus, 
        ]);
    }

    public function data_kampus_2(Request $request)
    {
        $data_siswa = \App\Models\Siswa::
        where('kampus', "Kampus 2")->
        get();

        return view('laporan_data.kampus.kampus_2',[
            'data_siswa' => $data_siswa, 
        ]);
    }

    public function data_kampus_3(Request $request)
    {
        $data_siswa = \App\Models\Siswa::
        where('kampus', "Kampus 3")->
        get();

        return view('laporan_data.kampus.kampus_3',[
            'data_siswa' => $data_siswa, 
        ]);
    }

    public function data_kampus_4(Request $request)
    {
        $data_siswa = \App\Models\Siswa::
        where('kampus', "Kampus 4")->
        get();

        return view('laporan_data.kampus.kampus_4',[
            'data_siswa' => $data_siswa, 
        ]);
    }

//////////////////////////////////////////////////

    public function data_jenjang_smp1(Request $request)
    {
        $data_siswa = \App\Models\Siswa::
        where('jenjang', "SMP 1")->
        get();

        return view('laporan_data.jenjang.smp1',[
            'data_siswa' => $data_siswa, 
        ]);
    }

    public function data_jenjang_smp2(Request $request)
    {
        $data_siswa = \App\Models\Siswa::
        where('jenjang', "SMP 2")->
        get();

        return view('laporan_data.jenjang.smp2',[
            'data_siswa' => $data_siswa, 
        ]);
    }

    public function data_jenjang_mts(Request $request)
    {
        $data_siswa = \App\Models\Siswa::
        where('jenjang', "MTs")->
        get();

        return view('laporan_data.jenjang.mts',[
            'data_siswa' => $data_siswa, 
        ]);
    }

    public function data_jenjang_smk(Request $request)
    {
        $data_siswa = \App\Models\Siswa::
        where('jenjang', "SMK")->
        get();

        return view('laporan_data.jenjang.smk',[
            'data_siswa' => $data_siswa, 
        ]);
    }

    public function data_jenjang_ma(Request $request)
    {
        $data_siswa = \App\Models\Siswa::
        where('jenjang', "MA")->
        get();

        return view('laporan_data.jenjang.ma',[
            'data_siswa' => $data_siswa, 
        ]);
    }

////////////////////////////////////////////////////

    public function data_lakilaki(Request $request)
    {
        $data_siswa = \App\Models\Siswa::
        where('jeniskelamin', "Laki-laki")->
        get();

        return view('laporan_data.fasilitas_jenkel.lakilaki',[
            'data_siswa' => $data_siswa, 
        ]);
    }    

    public function data_perempuan(Request $request)
    {
        $data_siswa = \App\Models\Siswa::
        where('jeniskelamin', "Perempuan")->
        get();

        return view('laporan_data.fasilitas_jenkel.perempuan',[
            'data_siswa' => $data_siswa, 
        ]);
    } 

    public function data_reguler(Request $request)
    {
        $data_siswa = \App\Models\Siswa::
        where('fasilitas', "Reguler")->
        get();

        return view('laporan_data.fasilitas_jenkel.reguler',[
            'data_siswa' => $data_siswa, 
        ]);
    } 

    public function data_nonreguler(Request $request)
    {
        $data_siswa = \App\Models\Siswa::
        where('fasilitas', "Non Reguler")->
        get();

        return view('laporan_data.fasilitas_jenkel.nonreguler',[
            'data_siswa' => $data_siswa, 
        ]);
    } 

    public function data_reguler_lakilaki(Request $request)
    {
        $data_siswa = \App\Models\Siswa::
        where('fasilitas', "Reguler")->
        where('jeniskelamin', "Laki-laki")->
        get();

        return view('laporan_data.fasilitas_jenkel.reguler_lakilaki',[
            'data_siswa' => $data_siswa, 
        ]);
    } 

    public function data_reguler_perempuan(Request $request)
    {
        $data_siswa = \App\Models\Siswa::
        where('fasilitas', "Reguler")->
        where('jeniskelamin', "Perempuan")->
        get();

        return view('laporan_data.fasilitas_jenkel.reguler_perempuan',[
            'data_siswa' => $data_siswa, 
        ]);
    } 

    public function data_nonreguler_lakilaki(Request $request)
    {
        $data_siswa = \App\Models\Siswa::
        where('fasilitas', "Non Reguler")->
        where('jeniskelamin', "Laki-laki")->
        get();

        return view('laporan_data.fasilitas_jenkel.nonreguler_lakilaki',[
            'data_siswa' => $data_siswa, 
        ]);
    } 

    public function data_nonreguler_perempuan(Request $request)
    {
        $data_siswa = \App\Models\Siswa::
        where('fasilitas', "Non Reguler")->
        where('jeniskelamin', "Perempuan")->
        get();

        return view('laporan_data.fasilitas_jenkel.nonreguler_perempuan',[
            'data_siswa' => $data_siswa, 
        ]);
    } 

}
