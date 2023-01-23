<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Siswa;
use App\Models\Caption_proses_pendaftaran_online;
use App\Models\Caption_persyaratan_pendaftaran_online;
use App\Models\Waktu_pendaftaran;
use App\Models\Biaya;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $siswa = auth()->user()->siswa;
        $proses = \App\Models\Caption_proses_pendaftaran_online::all();
        $syarat = \App\Models\Caption_persyaratan_pendaftaran_online::all();
        $waktu = \App\Models\Waktu_pendaftaran::all();
        $biaya = \App\Models\Biaya::all();

        $smp1 = DB::select('
            select `nomor`
            FROM `nomor_operator` 
            WHERE `id`="1"
            ');
        $smp2 = DB::select('
            select `nomor`
            FROM `nomor_operator` 
            WHERE `id`="2"
            ');
        $mts = DB::select('
            select `nomor`
            FROM `nomor_operator` 
            WHERE `id`="3"
            ');
        $smk = DB::select('
            select `nomor`
            FROM `nomor_operator` 
            WHERE `id`="4"
            ');
        $ma = DB::select('
            select `nomor`
            FROM `nomor_operator` 
            WHERE `id`="5"
            ');

        return view('home', [
            'siswa' => $siswa,
            'proses' => $proses,
            'syarat' => $syarat,
            'waktu' => $waktu,
            'biaya' => $biaya,
            'smp1' => $smp1,
            'smp2' => $smp2,
            'mts' => $mts,
            'smk' => $smk,
            'ma' => $ma
        ]);
    }

    public function home_pengurus()
    {
        $siswa = auth()->user()->siswa;
        $proses = \App\Models\Caption_proses_pendaftaran_online::all();
        $syarat = \App\Models\Caption_persyaratan_pendaftaran_online::all();
        $waktu = \App\Models\Waktu_pendaftaran::all();
        $biaya = \App\Models\Biaya::all();

        $smp1 = DB::select('
            select `nomor`
            FROM `nomor_operator` 
            WHERE `id`="1"
            ');
        $smp2 = DB::select('
            select `nomor`
            FROM `nomor_operator` 
            WHERE `id`="2"
            ');
        $mts = DB::select('
            select `nomor`
            FROM `nomor_operator` 
            WHERE `id`="3"
            ');
        $smk = DB::select('
            select `nomor`
            FROM `nomor_operator` 
            WHERE `id`="4"
            ');
        $ma = DB::select('
            select `nomor`
            FROM `nomor_operator` 
            WHERE `id`="5"
            ');

        return view('home_pengurus', [
            'siswa' => $siswa,
            'proses' => $proses,
            'syarat' => $syarat,
            'waktu' => $waktu,
            'biaya' => $biaya,
            'smp1' => $smp1,
            'smp2' => $smp2,
            'mts' => $mts,
            'smk' => $smk,
            'ma' => $ma
        ]);
    }

}
