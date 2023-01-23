<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Siswa;
use App\Models\Perizinan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use GrahamCampbell\ResultType\Result;

class PerizinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Perizinan::with(['siswa'])->get();
        return view('perizinan.index',[
            'siswa' => Siswa::where('jalurpendaftaran','Santri Lama')->get(),
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'siswa_id' => 'required',
            'keperluan' => 'required',
            // 'catatan'=>'required',
            'tgl_kembali' => 'required'
        ]);

        $data['status'] = 0;
        $data['catatan'] = $request->catatan;
        Perizinan::create($data);

        return redirect('/perizinan')->with('sukses', 'Data Perizinan berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function show(Perizinan $perizinan)
    {
        return view('perizinan.show',[
            'data' => $perizinan
        ]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perizinan $perizinan)
    {
        $data = Perizinan::with(['siswa'])->get();
        return view('perizinan.edit',[
            'siswa' => Siswa::where('jalurpendaftaran','Santri Lama')->get(),
            'data' => $perizinan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perizinan $perizinan)
    {
        //
        $data = $request->validate([
            'siswa_id' => 'required',
            'keperluan' => 'required',
            // 'catatan'=>'required',
            'tgl_kembali' => 'required'
        ]);
        $data['status'] = 0;
        $data['catatan'] = $request->catatan;

        $perizinan->update($data);
        return redirect('/perizinan')->with('sukses', 'Data Perizinan ('. $request->nama .') berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perizinan $perizinan)
    {
        $perizinan->delete();
        return redirect('/perizinan')->with('sukses', 'Data Perizinan berhasil dihapus');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function verify(Perizinan $perizinan){
        $perizinan->update(['status' => 1]);

        return redirect('/perizinan')->with('sukses', 'Data Perizinan berhasil diverifikasi');
    }

    public function kembali(Perizinan $perizinan){
        $perizinan->update(['status' => 2]);

        return redirect('/perizinan')->with('sukses', 'Santri Sudah Kembali');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function printRequest(Perizinan $perizinan){        
        $pdf = PDF::loadView('perizinan.print.request', ['data'=> $perizinan])->setPaper('a6', 'patroit');

        return $pdf->stream();
    }

    public function printIzin(Perizinan $perizinan){
        $pdf = PDF::loadView('perizinan.print.izin', ['data'=> $perizinan])->setPaper('a6', 'patroit');

        return $pdf->stream();
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function allMasaIzin(){
        $data = Perizinan::with(['siswa'])->where('status',1)->get();

        return view('perizinan.index',[
            'siswa' => Siswa::where('jalurpendaftaran','Santri Lama')->get(),
            'data' => $data
        ]);
    }

    public function allKembali(){
        $data = Perizinan::with(['siswa'])->where('status',2)->get();
        
        return view('perizinan.index',[
            'siswa' => Siswa::where('jalurpendaftaran','Santri Lama')->get(),
            'data' => $data
        ]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

}
