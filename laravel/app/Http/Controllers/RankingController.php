<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Siswa;
use App\Models\Jenjang;
use App\Models\Kampus;
use App\Models\Fasilitas;

use App\Models\Prestasi;
use App\Models\Pelanggaran;
use App\Models\Penitipan_uang;

class RankingController extends Controller
{

    public function rankingpelanggaran()
    {
        return view('ranking.rankingpelanggaran');
    }

    public function rankingpelanggarankampus1()
    {
        $data_siswa = \App\Models\Siswa::
        where('kampus', "Kampus 1")->
        get();

        $jenjang = \App\Models\Jenjang::all();
        $fasilitas = \App\Models\Fasilitas::all();

        $pelanggaran = \App\Models\Pelanggaran::
        where('kampus', "Kampus 1")->
        get();

        return view('ranking.rankingpelanggarankampus1',[
            'data_siswa' => $data_siswa,
            'jenjang' => $jenjang,
            'fasilitas' => $fasilitas,
            'pelanggaran' => $pelanggaran, 
        ]);
    }

    public function rankingpelanggarankampus2()
    {
        $data_siswa = \App\Models\Siswa::
        where('kampus', "Kampus 2")->
        get();

        $jenjang = \App\Models\Jenjang::all();
        $fasilitas = \App\Models\Fasilitas::all();

        $pelanggaran = \App\Models\Pelanggaran::
        where('kampus', "Kampus 2")->
        get();

        return view('ranking.rankingpelanggarankampus2',[
            'data_siswa' => $data_siswa,
            'jenjang' => $jenjang,
            'fasilitas' => $fasilitas,
            'pelanggaran' => $pelanggaran, 
        ]);
    }

    public function rankingpelanggarankampus3()
    {
        $data_siswa = \App\Models\Siswa::
        where('kampus', "Kampus 3")->
        get();

        $jenjang = \App\Models\Jenjang::all();
        $fasilitas = \App\Models\Fasilitas::all();

        $pelanggaran = \App\Models\Pelanggaran::
        where('kampus', "Kampus 3")->
        get();

        return view('ranking.rankingpelanggarankampus3',[
            'data_siswa' => $data_siswa,
            'jenjang' => $jenjang,
            'fasilitas' => $fasilitas,
            'pelanggaran' => $pelanggaran, 
        ]);
    }

    public function rankingpelanggarankampus4()
    {
        $data_siswa = \App\Models\Siswa::
        where('kampus', "Kampus 4")->
        get();

        $jenjang = \App\Models\Jenjang::all();
        $fasilitas = \App\Models\Fasilitas::all();

        $pelanggaran = \App\Models\Pelanggaran::
        where('kampus', "Kampus 4")->
        get();

        return view('ranking.rankingpelanggarankampus4',[
            'data_siswa' => $data_siswa,
            'jenjang' => $jenjang,
            'fasilitas' => $fasilitas,
            'pelanggaran' => $pelanggaran, 
        ]);
    }    

///////////////////////////////////////////////////////////////

    public function rankingprestasi()
    {
        return view('ranking.rankingprestasi');
    }

    public function rankingprestasikampus1()
    {
        $data_siswa = \App\Models\Siswa::
        where('kampus', "Kampus 1")->
        get();

        $jenjang = \App\Models\Jenjang::all();
        $fasilitas = \App\Models\Fasilitas::all();

        $prestasi = \App\Models\Prestasi::
        where('kampus', "Kampus 1")->
        get();

        return view('ranking.rankingprestasikampus1',[
            'data_siswa' => $data_siswa,
            'jenjang' => $jenjang,
            'fasilitas' => $fasilitas,
            'prestasi' => $prestasi, 
        ]);
    }

    public function rankingprestasikampus2()
    {
        $data_siswa = \App\Models\Siswa::
        where('kampus', "Kampus 2")->
        get();

        $jenjang = \App\Models\Jenjang::all();
        $fasilitas = \App\Models\Fasilitas::all();

        $prestasi = \App\Models\Prestasi::
        where('kampus', "Kampus 2")->
        get();

        return view('ranking.rankingprestasikampus2',[
            'data_siswa' => $data_siswa,
            'jenjang' => $jenjang,
            'fasilitas' => $fasilitas,
            'prestasi' => $prestasi, 
        ]);
    }

    public function rankingprestasikampus3()
    {
        $data_siswa = \App\Models\Siswa::
        where('kampus', "Kampus 3")->
        get();

        $jenjang = \App\Models\Jenjang::all();
        $fasilitas = \App\Models\Fasilitas::all();

        $prestasi = \App\Models\Prestasi::
        where('kampus', "Kampus 3")->
        get();

        return view('ranking.rankingprestasikampus3',[
            'data_siswa' => $data_siswa,
            'jenjang' => $jenjang,
            'fasilitas' => $fasilitas,
            'prestasi' => $prestasi, 
        ]);
    }

    public function rankingprestasikampus4()
    {
        $data_siswa = \App\Models\Siswa::
        where('kampus', "Kampus 4")->
        get();

        $jenjang = \App\Models\Jenjang::all();
        $fasilitas = \App\Models\Fasilitas::all();

        $prestasi = \App\Models\Prestasi::
        where('kampus', "Kampus 4")->
        get();

        return view('ranking.rankingprestasikampus4',[
            'data_siswa' => $data_siswa,
            'jenjang' => $jenjang,
            'fasilitas' => $fasilitas,
            'prestasi' => $prestasi, 
        ]);
    }



///////////////////////////////////////////////////////////////

    public function total_uang()
    {
        return view('ranking.total_uang');
    }

    public function total_uangkampus1()
    {
        $data_siswa = \App\Models\Siswa::
        where('kampus', "Kampus 1")->
        get();

        $jenjang = \App\Models\Jenjang::all();
        $fasilitas = \App\Models\Fasilitas::all();

        $penitipan_uang = \App\Models\Penitipan_uang::
        where('kampus', "Kampus 1")->
        get();

        return view('ranking.total_uangkampus1',[
            'data_siswa' => $data_siswa,
            'jenjang' => $jenjang,
            'fasilitas' => $fasilitas,
            'penitipan_uang' => $penitipan_uang, 
        ]);
    }

    public function total_uangkampus2()
    {
        $data_siswa = \App\Models\Siswa::
        where('kampus', "Kampus 2")->
        get();

        $jenjang = \App\Models\Jenjang::all();
        $fasilitas = \App\Models\Fasilitas::all();

        $penitipan_uang = \App\Models\Penitipan_uang::
        where('kampus', "Kampus 2")->
        get();

        return view('ranking.total_uangkampus2',[
            'data_siswa' => $data_siswa,
            'jenjang' => $jenjang,
            'fasilitas' => $fasilitas,
            'penitipan_uang' => $penitipan_uang, 
        ]);
    }

    public function total_uangkampus3()
    {
        $data_siswa = \App\Models\Siswa::
        where('kampus', "Kampus 3")->
        get();

        $jenjang = \App\Models\Jenjang::all();
        $fasilitas = \App\Models\Fasilitas::all();

        $penitipan_uang = \App\Models\Penitipan_uang::
        where('kampus', "Kampus 3")->
        get();

        return view('ranking.total_uangkampus3',[
            'data_siswa' => $data_siswa,
            'jenjang' => $jenjang,
            'fasilitas' => $fasilitas,
            'penitipan_uang' => $penitipan_uang, 
        ]);
    }

    public function total_uangkampus4()
    {
        $data_siswa = \App\Models\Siswa::
        where('kampus', "Kampus 4")->
        get();

        $jenjang = \App\Models\Jenjang::all();
        $fasilitas = \App\Models\Fasilitas::all();

        $penitipan_uang = \App\Models\Penitipan_uang::
        where('kampus', "Kampus 4")->
        get();

        return view('ranking.total_uangkampus4',[
            'data_siswa' => $data_siswa,
            'jenjang' => $jenjang,
            'fasilitas' => $fasilitas,
            'penitipan_uang' => $penitipan_uang, 
        ]);
    }

}
