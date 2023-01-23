<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenjang;
use App\Models\Kampus;

use App\Models\Ms_Kelas;
use App\Models\Ms_Ruang;
use App\Models\Ms_Gedung;
use App\Models\Ms_Kamar;

use DB;
use App\Models\Fasilitas;
use App\Models\Pendidikan;
use App\Models\Pekerjaan;
use App\Models\Caption_printdatadiri;
use App\Models\Nomor_pembayaran;
use App\Models\Nomor_operator;
use App\Models\Transfer_Bank;
use App\Models\Biaya_pendaftaran;
use App\Models\Biaya;
use App\Models\Chatwa;
use App\Models\Caption_proses_pendaftaran_online;
use App\Models\Caption_persyaratan_pendaftaran_online;
use App\Models\Waktu_pendaftaran;

class TambahController extends Controller
{
////////////jenjang//////////////////////////////////
    public function indexjenjang()
    {
    	$data_jenjang = \App\Models\Jenjang::all();

    	return view('tambah.jenjang.index',['data_jenjang' => $data_jenjang]);
    }

    public function createjenjang(Request $request)
    {
        \App\Models\Jenjang::create($request->all());

        return redirect ('/jenjang')->with('sukses', 'Data berhasil di tambah');
    }

    public function editjenjang($id)
    {
        $jenjang = \App\Models\Jenjang::find($id);

        return view('tambah.jenjang.edit', ['jenjang' => $jenjang]);
    }

    public function updatejenjang(Request $request ,$id)
    {       
        $jenjang = \App\Models\Jenjang::find($id);
        $jenjang->update($request->all());

        return redirect ('/jenjang')->with('sukses', 'Data berhasil di update');
    }

    public function deletejenjang($id)
    {
        $jenjang = \App\Models\Jenjang::find($id);
        $jenjang->delete($jenjang);

        return redirect('/jenjang')->with('sukses', 'Data berhasil di hapus');
    }

////////////kelas///////////////////////////////////////

    public function indexkelas()
    {
        $data_kelas = \App\Models\Ms_Kelas::all();

        return view('tambah.kelas.index',['data_kelas' => $data_kelas]);
    }

    public function createkelas(Request $request)
    {
        \App\Models\Ms_Kelas::create($request->all());

        return redirect ('/kelas')->with('sukses', 'Data berhasil di tambah');
    }

    public function editkelas($id)
    {
        $kelas = \App\Models\Ms_Kelas::find($id);

        return view('tambah.kelas.edit', ['kelas' => $kelas]);
    }

    public function updatekelas(Request $request ,$id)
    {       
        $kelas = \App\Models\Ms_Kelas::find($id);
        $kelas->update($request->all());

        return redirect ('/kelas')->with('sukses', 'Data berhasil di update');
    }

    public function deletekelas($id)
    {
        $kelas = \App\Models\Ms_Kelas::find($id);
        $kelas->delete($kelas);

        return redirect('/kelas')->with('sukses', 'Data berhasil di hapus');
    }

///////////ruang/////////////////////////////////////////

    public function indexruang()
    {
        $data_ruang = \App\Models\Ms_Ruang::all();
        $data_kelas = \App\Models\Ms_Kelas::all();

        return view('tambah.ruang.index',[
            'data_ruang' => $data_ruang,
            'data_kelas' => $data_kelas
        ]);
    }

    public function createruang(Request $request)
    {
        \App\Models\Ms_Ruang::create($request->all());

        return redirect ('/ruang')->with('sukses', 'Data berhasil di tambah');
    }

    public function editruang($id)
    {
        $ruang = \App\Models\Ms_Ruang::find($id);
        $kelas = \App\Models\Ms_Kelas::all();

        return view('tambah.ruang.edit', [
            'ruang' => $ruang,
            'kelas' => $kelas
        ]);
    }

    public function updateruang(Request $request ,$id)
    {       
        $ruang = \App\Models\Ms_Ruang::find($id);
        $ruang->update($request->all());

        return redirect ('/ruang')->with('sukses', 'Data berhasil di update');
    }

    public function deleteruang($id)
    {
        $ruang = \App\Models\Ms_Ruang::find($id);
        $ruang->delete($ruang);

        return redirect('/ruang')->with('sukses', 'Data berhasil di hapus');
    }

///////////kampus////////////////////////////////////////

    public function indexkampus()
    {
        $data_kampus = \App\Models\Kampus::all();

        return view('tambah.kampus.index',['data_kampus' => $data_kampus]);
    }

    public function createkampus(Request $request)
    {
        \App\Models\Kampus::create($request->all());

        return redirect ('/kampus')->with('sukses', 'Data berhasil di tambah');
    }

    public function editkampus($id)
    {
        $kampus = \App\Models\Kampus::find($id);

        return view('tambah.kampus.edit', ['kampus' => $kampus]);
    }

    public function updatekampus(Request $request ,$id)
    {       
        $kampus = \App\Models\Kampus::find($id);
        $kampus->update($request->all());

        return redirect ('/kampus')->with('sukses', 'Data berhasil di update');
    }

    public function deletekampus($id)
    {
        $kampus = \App\Models\Kampus::find($id);
        $kampus->delete($kampus);

        return redirect('/kampus')->with('sukses', 'Data berhasil di hapus');
    }

////////////gedung///////////////////////////////////////

    public function indexgedung()
    {
        $data_gedung = \App\Models\Ms_Gedung::all();

        return view('tambah.gedung.index',['data_gedung' => $data_gedung]);
    }

    public function creategedung(Request $request)
    {
        \App\Models\Ms_Gedung::create($request->all());

        return redirect ('/gedung')->with('sukses', 'Data berhasil di tambah');
    }

    public function editgedung($id)
    {
        $gedung = \App\Models\Ms_Gedung::find($id);

        return view('tambah.gedung.edit', ['gedung' => $gedung]);
    }

    public function updategedung(Request $request ,$id)
    {       
        $gedung = \App\Models\Ms_Gedung::find($id);
        $gedung->update($request->all());

        return redirect ('/gedung')->with('sukses', 'Data berhasil di update');
    }

    public function deletegedung($id)
    {
        $gedung = \App\Models\Ms_Gedung::find($id);
        $gedung->delete($gedung);

        return redirect('/gedung')->with('sukses', 'Data berhasil di hapus');
    }

/////////////kamar/////////////////////////////////////

    public function indexkamar()
    {
        $data_kamar = \App\Models\Ms_Kamar::all();
        $data_gedung = \App\Models\Ms_Gedung::all();

        return view('tambah.kamar.index',[
            'data_kamar' => $data_kamar, 
            'data_gedung' => $data_gedung
        ]);
    }

    public function createkamar(Request $request)
    {
        \App\Models\Ms_Kamar::create($request->all());

        return redirect ('/kamar')->with('sukses', 'Data berhasil di tambah');
    }

    public function editkamar($id)
    {
        $kamar = \App\Models\Ms_Kamar::find($id);
        $gedung = \App\Models\Ms_Gedung::all();

        return view('tambah.kamar.edit', [
            'kamar' => $kamar,
            'gedung' => $gedung
        ]);
    }

    public function updatekamar(Request $request ,$id)
    {       
        $kamar = \App\Models\Ms_Kamar::find($id);
        $kamar->update($request->all());

        return redirect ('/kamar')->with('sukses', 'Data berhasil di update');
    }

    public function deletekamar($id)
    {
        $kamar = \App\Models\Ms_Kamar::find($id);
        $kamar->delete($kamar);

        return redirect('/kamar')->with('sukses', 'Data berhasil di hapus');
    }

/////////////fasilitas//////////////////////////////////////

    public function indexfasilitas()
    {
        $data_fasilitas = \App\Models\Fasilitas::all();

        return view('tambah.fasilitas.index',['data_fasilitas' => $data_fasilitas]);
    }

    public function createfasilitas(Request $request)
    {
        \App\Models\Fasilitas::create($request->all());

        return redirect ('/fasilitas')->with('sukses', 'Data berhasil di tambah');
    }

    public function editfasilitas($id)
    {
        $fasilitas = \App\Models\Fasilitas::find($id);

        return view('tambah.fasilitas.edit', ['fasilitas' => $fasilitas]);
    }

    public function updatefasilitas(Request $request ,$id)
    {       
        $fasilitas = \App\Models\Fasilitas::find($id);
        $fasilitas->update($request->all());

        return redirect ('/fasilitas')->with('sukses', 'Data berhasil di update');
    }

    public function deletefasilitas($id)
    {
        $fasilitas = \App\Models\Fasilitas::find($id);
        $fasilitas->delete($fasilitas);

        return redirect('/fasilitas')->with('sukses', 'Data berhasil di hapus');
    }

///////////////pendidikan/////////////////////////////////

    public function indexpendidikan()
    {
        $data_pendidikan = \App\Models\Pendidikan::all();

        return view('tambah.pendidikan.index',['data_pendidikan' => $data_pendidikan]);
    }

    public function creatependidikan(Request $request)
    {
        \App\Models\Pendidikan::create($request->all());

        return redirect ('/pendidikan')->with('sukses', 'Data berhasil di tambah');
    }

    public function editpendidikan($id)
    {
        $pendidikan = \App\Models\Pendidikan::find($id);

        return view('tambah.pendidikan.edit', ['pendidikan' => $pendidikan]);
    }

    public function updatependidikan(Request $request ,$id)
    {       
        $pendidikan = \App\Models\Pendidikan::find($id);
        $pendidikan->update($request->all());

        return redirect ('/pendidikan')->with('sukses', 'Data berhasil di update');
    }

    public function deletependidikan($id)
    {
        $pendidikan = \App\Models\Pendidikan::find($id);
        $pendidikan->delete($pendidikan);

        return redirect('/pendidikan')->with('sukses', 'Data berhasil di hapus');
    }

/////////////pekerjaan////////////////////////////////

    public function indexpekerjaan()
    {
        $data_pekerjaan = \App\Models\Pekerjaan::all();

        return view('tambah.pekerjaan.index',['data_pekerjaan' => $data_pekerjaan]);
    }

    public function createpekerjaan(Request $request)
    {
        \App\Models\Pekerjaan::create($request->all());

        return redirect ('/pekerjaan')->with('sukses', 'Data berhasil di tambah');
    }

    public function editpekerjaan($id)
    {
        $pekerjaan = \App\Models\Pekerjaan::find($id);

        return view('tambah.pekerjaan.edit', ['pekerjaan' => $pekerjaan]);
    }

    public function updatepekerjaan(Request $request ,$id)
    {       
        $pekerjaan = \App\Models\Pekerjaan::find($id);
        $pekerjaan->update($request->all());

        return redirect ('/pekerjaan')->with('sukses', 'Data berhasil di update');
    }

    public function deletepekerjaan($id)
    {
        $pekerjaan = \App\Models\Pekerjaan::find($id);
        $pekerjaan->delete($pekerjaan);

        return redirect('/pekerjaan')->with('sukses', 'Data berhasil di hapus');
    }

////////////caption_printdatadiri/////////////////////////////

    public function indexcaption_printdatadiri()
    {
        $data_caption_printdatadiri = \App\Models\Caption_printdatadiri::all();

        return view('tambah.caption_printdatadiri.index',['data_caption_printdatadiri' => $data_caption_printdatadiri]);
    }

    public function createcaption_printdatadiri(Request $request)
    {
        \App\Models\Caption_printdatadiri::create($request->all());

        return redirect ('/caption_printdatadiri')->with('sukses', 'Data berhasil di tambah');
    }

    public function editcaption_printdatadiri($id)
    {
        $caption_printdatadiri = \App\Models\Caption_printdatadiri::find($id);

        return view('tambah.caption_printdatadiri.edit', ['caption_printdatadiri' => $caption_printdatadiri]);
    }

    public function updatecaption_printdatadiri(Request $request ,$id)
    {       
        $caption_printdatadiri = \App\Models\Caption_printdatadiri::find($id);
        $caption_printdatadiri->update($request->all());

        return redirect ('/caption_printdatadiri')->with('sukses', 'Data berhasil di update');
    }

    public function deletecaption_printdatadiri($id)
    {
        $caption_printdatadiri = \App\Models\Caption_printdatadiri::find($id);
        $caption_printdatadiri->delete($caption_printdatadiri);

        return redirect('/caption_printdatadiri')->with('sukses', 'Data berhasil di hapus');
    }

/////////////nomor_pembayaran////////////////////////////////

    public function indexnomor_pembayaran()
    {
        $data_nomor_pembayaran = \App\Models\Nomor_pembayaran::all();

        return view('tambah.nomor_pembayaran.index',['data_nomor_pembayaran' => $data_nomor_pembayaran]);
    }

    public function createnomor_pembayaran(Request $request)
    {
        \App\Models\Nomor_pembayaran::create($request->all());

        return redirect ('/nomor_pembayaran')->with('sukses', 'Data berhasil di tambah');
    }

    public function editnomor_pembayaran($id)
    {
        $nomor_pembayaran = \App\Models\Nomor_pembayaran::find($id);

        return view('tambah.nomor_pembayaran.edit', ['nomor_pembayaran' => $nomor_pembayaran]);
    }

    public function updatenomor_pembayaran(Request $request ,$id)
    {       
        $nomor_pembayaran = \App\Models\Nomor_pembayaran::find($id);
        $nomor_pembayaran->update($request->all());

        return redirect ('/nomor_pembayaran')->with('sukses', 'Data berhasil di update');
    }

    public function deletenomor_pembayaran($id)
    {
        $nomor_pembayaran = \App\Models\Nomor_pembayaran::find($id);
        $nomor_pembayaran->delete($nomor_pembayaran);

        return redirect('/nomor_pembayaran')->with('sukses', 'Data berhasil di hapus');
    }

/////////////nomor_operator////////////////////////////////

    public function indexnomor_operator()
    {
        $data_nomor_operator = \App\Models\Nomor_operator::all();

        return view('tambah.nomor_operator.index',['data_nomor_operator' => $data_nomor_operator]);
    }

    public function createnomor_operator(Request $request)
    {
        \App\Models\Nomor_operator::create($request->all());

        return redirect ('/nomor_operator')->with('sukses', 'Data berhasil di tambah');
    }

    public function editnomor_operator($id)
    {
        $nomor_operator = \App\Models\Nomor_operator::find($id);

        return view('tambah.nomor_operator.edit', ['nomor_operator' => $nomor_operator]);
    }

    public function updatenomor_operator(Request $request ,$id)
    {       
        $nomor_operator = \App\Models\Nomor_operator::find($id);
        $nomor_operator->update($request->all());

        return redirect ('/nomor_operator')->with('sukses', 'Data berhasil di update');
    }

    public function deletenomor_operator($id)
    {
        $nomor_operator = \App\Models\Nomor_operator::find($id);
        $nomor_operator->delete($nomor_operator);

        return redirect('/nomor_operator')->with('sukses', 'Data berhasil di hapus');
    }

///////////////transfer_bank////////////////////////////

    public function indextransfer_bank()
    {
        $data_transfer_bank = \App\Models\Transfer_bank::all();

        return view('tambah.transfer_bank.index',['data_transfer_bank' => $data_transfer_bank]);
    }

    public function createtransfer_bank(Request $request)
    {
        \App\Models\Transfer_bank::create($request->all());

        return redirect ('/transfer_bank')->with('sukses', 'Data berhasil di tambah');
    }

    public function edittransfer_bank($id)
    {
        $transfer_bank = \App\Models\Transfer_bank::find($id);

        return view('tambah.transfer_bank.edit', ['transfer_bank' => $transfer_bank]);
    }

    public function updatetransfer_bank(Request $request ,$id)
    {       
        $transfer_bank = \App\Models\Transfer_bank::find($id);
        $transfer_bank->update($request->all());

        return redirect ('/transfer_bank')->with('sukses', 'Data berhasil di update');
    }

    public function deletetransfer_bank($id)
    {
        $transfer_bank = \App\Models\Transfer_bank::find($id);
        $transfer_bank->delete($transfer_bank);

        return redirect('/transfer_bank')->with('sukses', 'Data berhasil di hapus');
    }

/////////////////biaya_pendaftaran///////////////////////////

    public function indexbiaya_pendaftaran()
    {
        $data_biaya_pendaftaran = \App\Models\Biaya_pendaftaran::all();

        return view('tambah.biaya_pendaftaran.index',['data_biaya_pendaftaran' => $data_biaya_pendaftaran]);
    }

    public function createbiaya_pendaftaran(Request $request)
    {
        \App\Models\Biaya_pendaftaran::create($request->all());

        return redirect ('/biaya_pendaftaran')->with('sukses', 'Data berhasil di tambah');
    }

    public function editbiaya_pendaftaran($id)
    {
        $biaya_pendaftaran = \App\Models\Biaya_pendaftaran::find($id);

        return view('tambah.biaya_pendaftaran.edit', ['biaya_pendaftaran' => $biaya_pendaftaran]);
    }

    public function updatebiaya_pendaftaran(Request $request ,$id)
    {       
        $biaya_pendaftaran = \App\Models\Biaya_pendaftaran::find($id);
        $biaya_pendaftaran->update($request->all());

        return redirect ('/biaya_pendaftaran')->with('sukses', 'Data biaya_pendaftaran berhasil di update');
    }

    public function deletebiaya_pendaftaran($id)
    {
        $biaya_pendaftaran = \App\Models\Biaya_pendaftaran::find($id);
        $biaya_pendaftaran->delete($biaya_pendaftaran);

        return redirect('/biaya_pendaftaran')->with('sukses', 'Data biaya_pendaftaran berhasil di hapus');
    }

/////////////////biaya///////////////////////////

    public function indexbiaya()
    {
        $data_biaya = \App\Models\Biaya::all();

        return view('tambah.biaya.index',['data_biaya' => $data_biaya]);
    }

    public function createbiaya(Request $request)
    {
        \App\Models\Biaya::create($request->all());

        return redirect ('/biaya')->with('sukses', 'Data berhasil di tambah');
    }

    public function editbiaya($id)
    {
        $biaya = \App\Models\Biaya::find($id);

        return view('tambah.biaya.edit', ['biaya' => $biaya]);
    }

    public function updatebiaya(Request $request ,$id)
    {       
        $biaya = \App\Models\Biaya::find($id);
        $biaya->update($request->all());

        return redirect ('/biaya')->with('sukses', 'Data biaya berhasil di update');
    }

    public function deletebiaya($id)
    {
        $biaya = \App\Models\Biaya::find($id);
        $biaya->delete($biaya);

        return redirect('/biaya')->with('sukses', 'Data biaya berhasil di hapus');
    }

/////////////////chatwa///////////////////////////

    public function indexchatwa()
    {
        $data_chatwa = \App\Models\Chatwa::all();

        return view('tambah.chatwa.index',['data_chatwa' => $data_chatwa]);
    }

    public function editchatwa($id)
    {
        $chatwa = \App\Models\Chatwa::find($id);

        return view('tambah.chatwa.edit', ['chatwa' => $chatwa]);
    }

    public function updatechatwa(Request $request ,$id)
    {       
        $chatwa = \App\Models\Chatwa::find($id);
        $chatwa->update($request->all());

        return redirect ('/chatwa')->with('sukses', 'Data Live Chat berhasil di update');
    }

/////////////////caption_proses_pendaftaran_online///////////////////////////

    public function indexcaption_proses_pendaftaran_online()
    {
        $data_caption_proses_pendaftaran_online = \App\Models\Caption_proses_pendaftaran_online::all();

        return view('tambah.caption_proses_pendaftaran_online.index',['data_caption_proses_pendaftaran_online' => $data_caption_proses_pendaftaran_online]);
    }

    public function createcaption_proses_pendaftaran_online(Request $request)
    {
        \App\Models\Caption_proses_pendaftaran_online::create($request->all());

        return redirect ('/caption_proses_pendaftaran_online')->with('sukses', 'Data berhasil di tambah');
    }

    public function editcaption_proses_pendaftaran_online($id)
    {
        $caption_proses_pendaftaran_online = \App\Models\Caption_proses_pendaftaran_online::find($id);

        return view('tambah.caption_proses_pendaftaran_online.edit', ['caption_proses_pendaftaran_online' => $caption_proses_pendaftaran_online]);
    }

    public function updatecaption_proses_pendaftaran_online(Request $request ,$id)
    {       
        $caption_proses_pendaftaran_online = \App\Models\Caption_proses_pendaftaran_online::find($id);
        $caption_proses_pendaftaran_online->update($request->all());

        return redirect ('/caption_proses_pendaftaran_online')->with('sukses', 'Data berhasil di update');
    }

    public function deletecaption_proses_pendaftaran_online($id)
    {
        $caption_proses_pendaftaran_online = \App\Models\Caption_proses_pendaftaran_online::find($id);
        $caption_proses_pendaftaran_online->delete($caption_proses_pendaftaran_online);

        return redirect('/caption_proses_pendaftaran_online')->with('sukses', 'Data berhasil di hapus');
    }

/////////////////caption_persyaratan_pendaftaran_online///////////////////////////

    public function indexcaption_persyaratan_pendaftaran_online()
    {
        $data_caption_persyaratan_pendaftaran_online = \App\Models\Caption_persyaratan_pendaftaran_online::all();

        return view('tambah.caption_persyaratan_pendaftaran_online.index',['data_caption_persyaratan_pendaftaran_online' => $data_caption_persyaratan_pendaftaran_online]);
    }

    public function createcaption_persyaratan_pendaftaran_online(Request $request)
    {
        \App\Models\Caption_persyaratan_pendaftaran_online::create($request->all());

        return redirect ('/caption_persyaratan_pendaftaran_online')->with('sukses', 'Data berhasil di tambah');
    }

    public function editcaption_persyaratan_pendaftaran_online($id)
    {
        $caption_persyaratan_pendaftaran_online = \App\Models\Caption_persyaratan_pendaftaran_online::find($id);

        return view('tambah.caption_persyaratan_pendaftaran_online.edit', ['caption_persyaratan_pendaftaran_online' => $caption_persyaratan_pendaftaran_online]);
    }

    public function updatecaption_persyaratan_pendaftaran_online(Request $request ,$id)
    {       
        $caption_persyaratan_pendaftaran_online = \App\Models\Caption_persyaratan_pendaftaran_online::find($id);
        $caption_persyaratan_pendaftaran_online->update($request->all());

        return redirect ('/caption_persyaratan_pendaftaran_online')->with('sukses', 'Data berhasil di update');
    }

    public function deletecaption_persyaratan_pendaftaran_online($id)
    {
        $caption_persyaratan_pendaftaran_online = \App\Models\Caption_persyaratan_pendaftaran_online::find($id);
        $caption_persyaratan_pendaftaran_online->delete($caption_persyaratan_pendaftaran_online);

        return redirect('/caption_persyaratan_pendaftaran_online')->with('sukses', 'Data berhasil di hapus');
    }

///////////////waktu_pendaftaran////////////////////////////

    public function indexwaktu_pendaftaran()
    {
        $data_waktu_pendaftaran = \App\Models\Waktu_pendaftaran::all();

        return view('tambah.waktu_pendaftaran.index',['data_waktu_pendaftaran' => $data_waktu_pendaftaran]);
    }

    public function createwaktu_pendaftaran(Request $request)
    {
        \App\Models\Waktu_pendaftaran::create($request->all());

        return redirect ('/waktu_pendaftaran')->with('sukses', 'Data berhasil di tambah');
    }

    public function editwaktu_pendaftaran($id)
    {
        $waktu_pendaftaran = \App\Models\Waktu_pendaftaran::find($id);

        return view('tambah.waktu_pendaftaran.edit', ['waktu_pendaftaran' => $waktu_pendaftaran]);
    }

    public function updatewaktu_pendaftaran(Request $request ,$id)
    {       
        $waktu_pendaftaran = \App\Models\Waktu_pendaftaran::find($id);
        $waktu_pendaftaran->update($request->all());

        return redirect ('/waktu_pendaftaran')->with('sukses', 'Data berhasil di update');
    }

    public function deletewaktu_pendaftaran($id)
    {
        $waktu_pendaftaran = \App\Models\Waktu_pendaftaran::find($id);
        $waktu_pendaftaran->delete($waktu_pendaftaran);

        return redirect('/waktu_pendaftaran')->with('sukses', 'Data berhasil di hapus');
    }


}
