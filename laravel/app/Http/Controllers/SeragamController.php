<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Siswa;
use App\Models\Ukuran_seragam;
use App\Models\Jenjang;
use App\Models\Seragam;

class SeragamController extends Controller
{

    public function seragam()
    {
        $ukuran_seragam = \App\Models\Ukuran_seragam::all();
        $siswa = DB::select('
            select `nama`
            FROM `siswa` 
            WHERE NOT `jalurpendaftaran`="Santri Lama"
            ');
        $jenjang = \App\Models\Jenjang::all();
        $seragam = \App\Models\Seragam::all();

        return view('daftar.ukuran_seragam', [
            'ukuran_seragam' => $ukuran_seragam, 
            'siswa' => $siswa,
            'jenjang' => $jenjang, 
            'seragam' => $seragam
        ]);
    }

    public function simpanseragam(Request $request)
    {       
        $ukuran_seragam = \App\Models\Ukuran_seragam::create($request->all());

        return redirect ('/seragam')->with('sukses', 'Data Ukuran Seragam berhasil di simpan');
    }

    public function editseragam($id)
    {
        $ukuran_seragam = \App\Models\Ukuran_seragam::find($id);
        $siswa = DB::select('
            select `nama`
            FROM `siswa` 
            WHERE NOT `jalurpendaftaran`="Santri Lama"
            ');
        $jenjang = \App\Models\Jenjang::all();
        $seragam = \App\Models\Seragam::all();

        return view('daftar.ukuran_seragam_edit', [
            'ukuran_seragam' => $ukuran_seragam, 
            'siswa' => $siswa,
            'jenjang' => $jenjang, 
            'seragam' => $seragam
        ]);
    }

    public function updateseragam(Request $request ,$id)
    {       
        $ukuran_seragam = \App\Models\Ukuran_seragam::find($id);
        $ukuran_seragam->update($request->all());

        return redirect ('/seragam')->with('sukses', 'Data Ukuran Seragam berhasil di update');
    }

    public function deleteseragam($id)
    {
        $ukuran_seragam = \App\Models\Ukuran_seragam::find($id);
        $ukuran_seragam->delete($ukuran_seragam);

        return redirect('/seragam')->with('sukses', 'Data Ukuran Seragam berhasil di hapus');
    }

///////////////////////////////////////////////////////////////////////////////////////

    public function laporan_ukuran_seragam_s_smp1()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="SMP 1" and `seragam`="S"
            ');

        return view('laporan.seragam.smp1.laporan_ukuran_seragam_s_smp1', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_m_smp1()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="SMP 1" and `seragam`="M"
            ');

        return view('laporan.seragam.smp1.laporan_ukuran_seragam_m_smp1', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_l_smp1()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="SMP 1" and `seragam`="L"
            ');

        return view('laporan.seragam.smp1.laporan_ukuran_seragam_l_smp1', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_xl_smp1()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="SMP 1" and `seragam`="XL"
            ');

        return view('laporan.seragam.smp1.laporan_ukuran_seragam_xl_smp1', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_xxl_smp1()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="SMP 1" and `seragam`="XXL"
            ');

        return view('laporan.seragam.smp1.laporan_ukuran_seragam_xxl_smp1', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_xxxl_smp1()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="SMP 1" and `seragam`="XXXL"
            ');

        return view('laporan.seragam.smp1.laporan_ukuran_seragam_xxxl_smp1', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

///////////////////////////////////////////////////////////////////////////////////////

    public function laporan_ukuran_seragam_s_smp2()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="SMP 2" and `seragam`="S"
            ');

        return view('laporan.seragam.smp2.laporan_ukuran_seragam_s_smp2', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_m_smp2()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="SMP 2" and `seragam`="M"
            ');

        return view('laporan.seragam.smp2.laporan_ukuran_seragam_m_smp2', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_l_smp2()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="SMP 2" and `seragam`="L"
            ');

        return view('laporan.seragam.smp2.laporan_ukuran_seragam_l_smp2', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_xl_smp2()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="SMP 2" and `seragam`="XL"
            ');

        return view('laporan.seragam.smp2.laporan_ukuran_seragam_xl_smp2', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_xxl_smp2()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="SMP 2" and `seragam`="XXL"
            ');

        return view('laporan.seragam.smp2.laporan_ukuran_seragam_xxl_smp2', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_xxxl_smp2()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="SMP 2" and `seragam`="XXXL"
            ');

        return view('laporan.seragam.smp2.laporan_ukuran_seragam_xxxl_smp2', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

///////////////////////////////////////////////////////////////////////////////////////

    public function laporan_ukuran_seragam_s_mts()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="MTs" and `seragam`="S"
            ');

        return view('laporan.seragam.mts.laporan_ukuran_seragam_s_mts', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_m_mts()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="MTs" and `seragam`="M"
            ');

        return view('laporan.seragam.mts.laporan_ukuran_seragam_m_mts', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_l_mts()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="MTs" and `seragam`="L"
            ');

        return view('laporan.seragam.mts.laporan_ukuran_seragam_l_mts', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_xl_mts()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="MTs" and `seragam`="XL"
            ');

        return view('laporan.seragam.mts.laporan_ukuran_seragam_xl_mts', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_xxl_mts()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="MTs" and `seragam`="XXL"
            ');

        return view('laporan.seragam.mts.laporan_ukuran_seragam_xxl_mts', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_xxxl_mts()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="MTs" and `seragam`="XXXL"
            ');

        return view('laporan.seragam.mts.laporan_ukuran_seragam_xxxl_mts', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

///////////////////////////////////////////////////////////////////////////////////////

    public function laporan_ukuran_seragam_s_smk()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="SMK" and `seragam`="S"
            ');

        return view('laporan.seragam.smk.laporan_ukuran_seragam_s_smk', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_m_smk()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="SMK" and `seragam`="M"
            ');

        return view('laporan.seragam.smk.laporan_ukuran_seragam_m_smk', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_l_smk()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="SMK" and `seragam`="L"
            ');

        return view('laporan.seragam.smk.laporan_ukuran_seragam_l_smk', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_xl_smk()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="SMK" and `seragam`="XL"
            ');

        return view('laporan.seragam.smk.laporan_ukuran_seragam_xl_smk', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_xxl_smk()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="SMK" and `seragam`="XXL"
            ');

        return view('laporan.seragam.smk.laporan_ukuran_seragam_xxl_smk', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_xxxl_smk()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="SMK" and `seragam`="XXXL"
            ');

        return view('laporan.seragam.smk.laporan_ukuran_seragam_xxxl_smk', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

///////////////////////////////////////////////////////////////////////////////////////

    public function laporan_ukuran_seragam_s_ma()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="MA" and `seragam`="S"
            ');

        return view('laporan.seragam.ma.laporan_ukuran_seragam_s_ma', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_m_ma()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="MA" and `seragam`="M"
            ');

        return view('laporan.seragam.ma.laporan_ukuran_seragam_m_ma', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_l_ma()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="MA" and `seragam`="L"
            ');

        return view('laporan.seragam.ma.laporan_ukuran_seragam_l_ma', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_xl_ma()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="MA" and `seragam`="XL"
            ');

        return view('laporan.seragam.ma.laporan_ukuran_seragam_xl_ma', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_xxl_ma()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="MA" and `seragam`="XXL"
            ');

        return view('laporan.seragam.ma.laporan_ukuran_seragam_xxl_ma', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }

    public function laporan_ukuran_seragam_xxxl_ma()
    {
        $ukuran_seragam = DB::select('
            select `seragam`,`jenjang`,`nama`,`jeniskelamin`
            FROM `ukuran_seragam` 
            WHERE `jenjang`="MA" and `seragam`="XXXL"
            ');

        return view('laporan.seragam.ma.laporan_ukuran_seragam_xxxl_ma', [
            'ukuran_seragam' => $ukuran_seragam
        ]);
    }






}
