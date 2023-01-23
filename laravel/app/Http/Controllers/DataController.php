<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Kampus;
use App\Models\Siswa;

class DataController extends Controller
{

    public function search(Request $request)
    {
        $keyword = $request->search;

        // $data_siswa = Siswa::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        $data_siswa =  DB::select('select `id`,`nama`,`jenjang`,`kampus`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`nohp`,`status` FROM `siswa` 
            WHERE `jalurpendaftaran`="Santri Lama"
            ');

        $jenjang = \App\Models\Jenjang::all();
        $kampus = \App\Models\Kampus::all(); 

        $fasilitas =  DB::select('select
            `fasilitas`
            FROM `fasilitas` 
            ');
        $ms_provinsi =  DB::select('select
            `kab_kode`
            FROM `ms_provinsi` 
            ');
        $pendidikan =  DB::select('select
            `pendidikan`
            FROM `pendidikan` 
            ');
        $pekerjaan =  DB::select('select
            `pekerjaan`
            FROM `pekerjaan` 
            ');

        $gedung =  DB::select('select
            `kab_kode`
            FROM `ms_gedung` 
            ');
        $kelas =  DB::select('select
            `kab_kode`
            FROM `ms_kelas` 
            ');


              
            return view('siswa.index',[
                'data_siswa' => $data_siswa, 
                'jenjang' => $jenjang, 
                'kampus' => $kampus, 
                'fasilitas' => $fasilitas, 
                'ms_provinsi' => $ms_provinsi, 
                'pendidikan' => $pendidikan, 
                'pekerjaan' => $pekerjaan, 
                'gedung' => $gedung,
                'kelas' => $kelas, 
            ]);


    }

public function getCountries()
    {
        $countries = DB::table('countries')->pluck("name","id");
        return view('dropdown',compact('countries'));
    }

public function getStates($id) 
{        
        $states = DB::table("states")->where("countries_id",$id)->pluck("name","id");
        return json_encode($states);
}

public function getCountriesdua()
    {
        $countries = DB::table('countries')->pluck("name","id");
        return view('dropdowndua',compact('countries'));
    }

}
