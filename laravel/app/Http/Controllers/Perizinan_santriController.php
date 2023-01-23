<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Perizinan;

class Perizinan_santriController extends Controller
{

    public function perizinan($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $perizinan = \App\Models\Perizinan::where('siswa_id',$id)->get();

        return view('perizinan.login_santri.index', [
            'siswa' => $siswa,
            'perizinan' => $perizinan
        ]);
    }

}
