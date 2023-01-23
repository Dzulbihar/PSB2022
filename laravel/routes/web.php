<?php

namespace App\Http\Controllers;

use App\Models\Perizinan;
use App\Models\Jenjang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::group(['middleware' => ['auth','checkRole:Administrator
// ']],function(){

//Route search

Route::get('/jenjang/{{$jenjang->jenjang}}', function () {
    return view('coba');
});


Route::get('/search', [DataController::class, 'search'])->name('search');


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/select', function () {
    return view('select');
});

Route::get('/webcam', function () {
    return view('webcam');
});

Auth::routes();

// Route::get('/webcam', [WebcamController::class, 'takeSnapshot']);	

/////////////////////////////////////////////////////////////////////////////////
Route::get('/getKamar', [SiswaController::class, 'getKamar']);
Route::get('/getRuang', [SiswaController::class, 'getRuang']);

Route::get('/getProdi', [SiswaController::class, 'getProdi']);
// Route::get('/getdropdown', [DaftarOnlineController::class, 'getdropdown']);	

Route::get('/getMsKabupaten', [DaftarOnlineController::class, 'getMsKabupaten']);
Route::get('/getMsKecamatan', [DaftarOnlineController::class, 'getMsKecamatan']);
//////////////////////////////////////////////////////////////////////////
///////////////// == DAFTAR ONLINE == ///////////////////////////////////////////////
Route::get('/daftar_online', [DaftarOnlineController::class, 'daftar_online']);
Route::post('/data_online', [DaftarOnlineController::class, 'data_online']);
Route::get('/profil_pendaftaran_online', [DaftarOnlineController::class, 'profil_pendaftaran_online']);
Route::get('/daftar_online/{id}/edit', [DaftarOnlineController::class, 'edit']);
Route::post('/daftar_online/{id}/update', [DaftarOnlineController::class, 'update']);
Route::post('/daftar_online/{id}/updatedetail', [DaftarOnlineController::class, 'updatedetail']);
Route::get('/daftar_online/{id}/editfoto', [DaftarOnlineController::class, 'editfoto']);
Route::post('/daftar_online/{id}/updatefoto', [DaftarOnlineController::class, 'updatefoto']);
/////////////// biaya awal masuk ///////////////////////////////////
Route::get('/daftar_online/{id}/biayaawalmasuk', [DaftarOnlineController::class, 'biayaawalmasuk']);
Route::post('/daftar_online/{id}/addbiaya', [DaftarOnlineController::class, 'addbiaya']);
Route::get('/daftar_online/{id}/{idregistrasi}/deleteregistrasi', [DaftarOnlineController::class, 'deleteregistrasi']);
Route::get('/daftar_online/{id}/printregistrasi', [DaftarOnlineController::class, 'printregistrasi']);
/////////////// registrasi online ///////////////////////////////////

Route::get('/daftar_online/{id}/registrasi_online', [DaftarOnlineController::class, 'registrasi_online']);
Route::post('/daftar_online/{id}/registrasi_online_update', [DaftarOnlineController::class, 'registrasi_online_update']);

Route::get('/daftar_online/{id}/syarat_daftar', [DaftarOnlineController::class, 'syarat_daftar']);
Route::post('/daftar_online/{id}/syarat_daftar_update', [DaftarOnlineController::class, 'syarat_daftar_update']);
Route::get('/daftar_online/{idsiswa}/{idsyarat}/deletesyarat', [DaftarOnlineController::class, 'deletesyarat']);

Route::post('/daftar_online/{id}/addregistrasi_online', [DaftarOnlineController::class, 'addregistrasi_online']);



Route::get('/daftar_online/{id}/printregistrasi_online', [DaftarOnlineController::class, 'printregistrasi_online']);
/////
Route::post('/daftar_online/kirim_pesan', [DaftarOnlineController::class, 'kirim_pesan']);
//////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////
//////////////// == DAFTAR OFFLINE == /////////////////////////////////////
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home_pengurus', [HomeController::class, 'home_pengurus']);

Route::get('/daftar', [DaftarController::class, 'index']);
Route::post('/daftar/createdaftar', [DaftarController::class, 'createdaftar']);
Route::get('/daftar/data', [DaftarController::class, 'data']);
Route::get('/daftar/dataditerimaSMP1', [DaftarController::class, 'dataditerimaSMP1']);
Route::get('/daftar/dataditerimaSMP2', [DaftarController::class, 'dataditerimaSMP2']);
Route::get('/daftar/dataditerimaMTs', [DaftarController::class, 'dataditerimaMTs']);
Route::get('/daftar/dataditerimaSMK', [DaftarController::class, 'dataditerimaSMK']);
Route::get('/daftar/dataditerimaMA', [DaftarController::class, 'dataditerimaMA']);
Route::get('/daftar/dataditerimaMAHADALY', [DaftarController::class, 'dataditerimaMAHADALY']);
Route::get('/daftar/data_online', [DaftarController::class, 'data_online']);
Route::get('/daftar/dataditerimaSMP1_online', [DaftarController::class, 'dataditerimaSMP1_online']);
Route::get('/daftar/dataditerimaSMP2_online', [DaftarController::class, 'dataditerimaSMP2_online']);
Route::get('/daftar/dataditerimaMTs_online', [DaftarController::class, 'dataditerimaMTs_online']);
Route::get('/daftar/dataditerimaSMK_online', [DaftarController::class, 'dataditerimaSMK_online']);
Route::get('/daftar/dataditerimaMA_online', [DaftarController::class, 'dataditerimaMA_online']);
Route::get('/daftar/dataditerimaMAHADALY_online', [DaftarController::class, 'dataditerimaMAHADALY_online']);
Route::get('/daftar/data/status/{id}', [DaftarController::class, 'status']);
Route::get('/daftar/{id}/edit', [DaftarController::class, 'edit']);
Route::post('/daftar/{id}/update', [DaftarController::class, 'update']);
Route::get('/daftar/{id}/editfoto', [DaftarController::class, 'editfoto']);
Route::post('/daftar/{id}/updatefoto', [DaftarController::class, 'updatefoto']);
Route::get('/daftar/{id}/detail', [DaftarController::class, 'detail']);
Route::post('/daftar/{id}/updatedetail', [DaftarController::class, 'updatedetail']);
Route::post('/daftar/{id}/updatedetail_biaya', [DaftarController::class, 'updatedetail_biaya']);
Route::get('/daftar/{id}/delete', [DaftarController::class, 'delete']);
Route::get('/daftar/{id}/deletedataditerimaSMP1', [DaftarController::class, 'deletedataditerimaSMP1']);
Route::get('/daftar/{id}/deletedataditerimaSMP2', [DaftarController::class, 'deletedataditerimaSMP2']);
Route::get('/daftar/{id}/deletedataditerimaMTs', [DaftarController::class, 'deletedataditerimaMTs']);
Route::get('/daftar/{id}/deletedataditerimaSMK', [DaftarController::class, 'deletedataditerimaSMK']);
Route::get('/daftar/{id}/deletedataditerimaMA', [DaftarController::class, 'deletedataditerimaMA']);
Route::get('/daftar/{id}/printdatadiri', [DaftarController::class, 'printdatadiri']);
Route::get('/daftar/{id}/printslipregistrasi', [DaftarController::class, 'printslipregistrasi']);
/////
Route::get('/daftar/{id}/chatwa', [DaftarController::class, 'chatwa']);
Route::post('/daftar/kirim_pesan', [DaftarController::class, 'kirim_pesan']);
/////////////// biaya awal masuk ///////////////////////////////////
Route::get('/daftar/{id}/biayaawalmasuk', [DaftarController::class, 'biayaawalmasuk']);
Route::post('/daftar/{id}/addbiaya', [DaftarController::class, 'addbiaya']);
Route::get('/daftar/{id}/{idregistrasi}/deleteregistrasi', [DaftarController::class, 'deleteregistrasi']);
Route::get('/daftar/{id}/printregistrasi', [DaftarController::class, 'printregistrasi']);
//////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////
Route::get('/email_online', [DaftarController::class, 'email_online']);
//////////////////////////////////////////////////////////////////////////

/////////////// seragam //////////////////////////////////////////
Route::get('/seragam', [SeragamController::class, 'seragam']);
Route::post('/seragam/simpanseragam', [SeragamController::class, 'simpanseragam']);
Route::get('/seragam/{id}/editseragam', [SeragamController::class, 'editseragam']);
Route::post('/seragam/{id}/updateseragam', [SeragamController::class, 'updateseragam']);
Route::get('/seragam/{id}/deleteseragam', [SeragamController::class, 'deleteseragam']);
////////////////////////////
Route::get('/laporan_ukuran_seragam_s_smp1', [SeragamController::class, 'laporan_ukuran_seragam_s_smp1']);
Route::get('/laporan_ukuran_seragam_m_smp1', [SeragamController::class, 'laporan_ukuran_seragam_m_smp1']);
Route::get('/laporan_ukuran_seragam_l_smp1', [SeragamController::class, 'laporan_ukuran_seragam_l_smp1']);
Route::get('/laporan_ukuran_seragam_xl_smp1', [SeragamController::class, 'laporan_ukuran_seragam_xl_smp1']);
Route::get('/laporan_ukuran_seragam_xxl_smp1', [SeragamController::class, 'laporan_ukuran_seragam_xxl_smp1']);
Route::get('/laporan_ukuran_seragam_xxxl_smp1', [SeragamController::class, 'laporan_ukuran_seragam_xxxl_smp1']);
////////////////////////////
Route::get('/laporan_ukuran_seragam_s_smp2', [SeragamController::class, 'laporan_ukuran_seragam_s_smp2']);
Route::get('/laporan_ukuran_seragam_m_smp2', [SeragamController::class, 'laporan_ukuran_seragam_m_smp2']);
Route::get('/laporan_ukuran_seragam_l_smp2', [SeragamController::class, 'laporan_ukuran_seragam_l_smp2']);
Route::get('/laporan_ukuran_seragam_xl_smp2', [SeragamController::class, 'laporan_ukuran_seragam_xl_smp2']);
Route::get('/laporan_ukuran_seragam_xxl_smp2', [SeragamController::class, 'laporan_ukuran_seragam_xxl_smp2']);
Route::get('/laporan_ukuran_seragam_xxxl_smp2', [SeragamController::class, 'laporan_ukuran_seragam_xxxl_smp2']);
////////////////////////////
Route::get('/laporan_ukuran_seragam_s_mts', [SeragamController::class, 'laporan_ukuran_seragam_s_mts']);
Route::get('/laporan_ukuran_seragam_m_mts', [SeragamController::class, 'laporan_ukuran_seragam_m_mts']);
Route::get('/laporan_ukuran_seragam_l_mts', [SeragamController::class, 'laporan_ukuran_seragam_l_mts']);
Route::get('/laporan_ukuran_seragam_xl_mts', [SeragamController::class, 'laporan_ukuran_seragam_xl_mts']);
Route::get('/laporan_ukuran_seragam_xxl_mts', [SeragamController::class, 'laporan_ukuran_seragam_xxl_mts']);
Route::get('/laporan_ukuran_seragam_xxxl_mts', [SeragamController::class, 'laporan_ukuran_seragam_xxxl_mts']);
////////////////////////////
Route::get('/laporan_ukuran_seragam_s_smk', [SeragamController::class, 'laporan_ukuran_seragam_s_smk']);
Route::get('/laporan_ukuran_seragam_m_smk', [SeragamController::class, 'laporan_ukuran_seragam_m_smk']);
Route::get('/laporan_ukuran_seragam_l_smk', [SeragamController::class, 'laporan_ukuran_seragam_l_smk']);
Route::get('/laporan_ukuran_seragam_xl_smk', [SeragamController::class, 'laporan_ukuran_seragam_xl_smk']);
Route::get('/laporan_ukuran_seragam_xxl_smk', [SeragamController::class, 'laporan_ukuran_seragam_xxl_smk']);
Route::get('/laporan_ukuran_seragam_xxxl_smk', [SeragamController::class, 'laporan_ukuran_seragam_xxxl_smk']);
////////////////////////////
Route::get('/laporan_ukuran_seragam_s_ma', [SeragamController::class, 'laporan_ukuran_seragam_s_ma']);
Route::get('/laporan_ukuran_seragam_m_ma', [SeragamController::class, 'laporan_ukuran_seragam_m_ma']);
Route::get('/laporan_ukuran_seragam_l_ma', [SeragamController::class, 'laporan_ukuran_seragam_l_ma']);
Route::get('/laporan_ukuran_seragam_xl_ma', [SeragamController::class, 'laporan_ukuran_seragam_xl_ma']);
Route::get('/laporan_ukuran_seragam_xxl_ma', [SeragamController::class, 'laporan_ukuran_seragam_xxl_ma']);
Route::get('/laporan_ukuran_seragam_xxxl_ma', [SeragamController::class, 'laporan_ukuran_seragam_xxxl_ma']);
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////////////
///////////////// == LAPORAN DASHBOARD == ////////////////////////////////////
Route::get('/laporan_pendaftaran_total', [LaporanController::class, 'laporan_pendaftaran_total']);
Route::get('/laporan_pendaftaran_offline', [LaporanController::class, 'laporan_pendaftaran_offline']);
Route::get('/laporan_pendaftaran_online', [LaporanController::class, 'laporan_pendaftaran_online']);
Route::get('/laporan_pendaftaran_reguler', [LaporanController::class, 'laporan_pendaftaran_reguler']);
Route::get('/laporan_pendaftaran_nonreguler', [LaporanController::class, 'laporan_pendaftaran_nonreguler']);
Route::get('/laporan_pendaftaran_lakilaki', [LaporanController::class, 'laporan_pendaftaran_lakilaki']);
Route::get('/laporan_pendaftaran_perempuan', [LaporanController::class, 'laporan_pendaftaran_perempuan']);
Route::get('/laporan_pendaftaran_regulerlakilaki', [LaporanController::class, 'laporan_pendaftaran_regulerlakilaki']);
Route::get('/laporan_pendaftaran_regulerperempuan', [LaporanController::class, 'laporan_pendaftaran_regulerperempuan']);
Route::get('/laporan_pendaftaran_nonregulerlakilaki', [LaporanController::class, 'laporan_pendaftaran_nonregulerlakilaki']);
Route::get('/laporan_pendaftaran_nonregulerperempuan', [LaporanController::class, 'laporan_pendaftaran_nonregulerperempuan']);
///////////////// laporan_jenjang ////////////////////////////////////
Route::get('/laporan_smp1', [LaporanController::class, 'laporan_smp1']);
Route::get('/laporan_mts', [LaporanController::class, 'laporan_mts']);
Route::get('/laporan_smk', [LaporanController::class, 'laporan_smk']);
Route::get('/laporan_ma', [LaporanController::class, 'laporan_ma']);
Route::get('/laporan_smp2', [LaporanController::class, 'laporan_smp2']);
Route::get('/laporan_mahadaly', [LaporanController::class, 'laporan_mahadaly']);
Route::get('/laporan_alumni', [LaporanController::class, 'laporan_alumni']);
Route::get('/laporan_alumni_ke_smk', [LaporanController::class, 'laporan_alumni_ke_smk']);
Route::get('/laporan_alumni_ke_ma', [LaporanController::class, 'laporan_alumni_ke_ma']);
Route::get('/laporan_alumni_ke_mahadaly', [LaporanController::class, 'laporan_alumni_ke_mahadaly']);
///////////////// laporan_administrasi ////////////////////////////////////
Route::get('/laporan_administrasi_sudah_registrasi', [LaporanController::class, 'laporan_administrasi_sudah_registrasi']);
Route::get('/laporan_administrasi_sudah_lunas', [LaporanController::class, 'laporan_administrasi_sudah_lunas']);
///////////////// laporan_administrasi_harian ////////////////////////////////////
Route::get('/laporan_administrasi_harian', [LaporanController::class, 'laporan_administrasi_harian']);
///////////////// laporan_perbulan_pendaftaran ////////////////////////////////////
Route::get('/laporan_pendaftaran_januari', [LaporanController::class, 'laporan_pendaftaran_januari']);
Route::get('/laporan_pendaftaran_februari', [LaporanController::class, 'laporan_pendaftaran_februari']);
Route::get('/laporan_pendaftaran_maret', [LaporanController::class, 'laporan_pendaftaran_maret']);
Route::get('/laporan_pendaftaran_april', [LaporanController::class, 'laporan_pendaftaran_april']);
Route::get('/laporan_pendaftaran_mei', [LaporanController::class, 'laporan_pendaftaran_mei']);
Route::get('/laporan_pendaftaran_juni', [LaporanController::class, 'laporan_pendaftaran_juni']);
Route::get('/laporan_pendaftaran_juli', [LaporanController::class, 'laporan_pendaftaran_juli']);
Route::get('/laporan_pendaftaran_agustus', [LaporanController::class, 'laporan_pendaftaran_agustus']);
Route::get('/laporan_pendaftaran_september', [LaporanController::class, 'laporan_pendaftaran_september']);
Route::get('/laporan_pendaftaran_oktober', [LaporanController::class, 'laporan_pendaftaran_oktober']);
Route::get('/laporan_pendaftaran_november', [LaporanController::class, 'laporan_pendaftaran_november']);
Route::get('/laporan_pendaftaran_desember', [LaporanController::class, 'laporan_pendaftaran_desember']);
///////////////// laporan_perbulan_pendaftaran_offline ////////////////////////////////////
Route::get('/laporan_pendaftaran_januari_offline', [LaporanController::class, 'laporan_pendaftaran_januari_offline']);
Route::get('/laporan_pendaftaran_februari_offline', [LaporanController::class, 'laporan_pendaftaran_februari_offline']);
Route::get('/laporan_pendaftaran_maret_offline', [LaporanController::class, 'laporan_pendaftaran_maret_offline']);
Route::get('/laporan_pendaftaran_april_offline', [LaporanController::class, 'laporan_pendaftaran_april_offline']);
Route::get('/laporan_pendaftaran_mei_offline', [LaporanController::class, 'laporan_pendaftaran_mei_offline']);
Route::get('/laporan_pendaftaran_juni_offline', [LaporanController::class, 'laporan_pendaftaran_juni_offline']);
Route::get('/laporan_pendaftaran_juli_offline', [LaporanController::class, 'laporan_pendaftaran_juli_offline']);
Route::get('/laporan_pendaftaran_agustus_offline', [LaporanController::class, 'laporan_pendaftaran_agustus_offline']);
Route::get('/laporan_pendaftaran_september_offline', [LaporanController::class, 'laporan_pendaftaran_september_offline']);
Route::get('/laporan_pendaftaran_oktober_offline', [LaporanController::class, 'laporan_pendaftaran_oktober_offline']);
Route::get('/laporan_pendaftaran_november_offline', [LaporanController::class, 'laporan_pendaftaran_november_offline']);
Route::get('/laporan_pendaftaran_desember_offline', [LaporanController::class, 'laporan_pendaftaran_desember_offline']);
///////////////// laporan_perbulan_pendaftaran_online ////////////////////////////////////
Route::get('/laporan_pendaftaran_januari_online', [LaporanController::class, 'laporan_pendaftaran_januari_online']);
Route::get('/laporan_pendaftaran_februari_online', [LaporanController::class, 'laporan_pendaftaran_februari_online']);
Route::get('/laporan_pendaftaran_maret_online', [LaporanController::class, 'laporan_pendaftaran_maret_online']);
Route::get('/laporan_pendaftaran_april_online', [LaporanController::class, 'laporan_pendaftaran_april_online']);
Route::get('/laporan_pendaftaran_mei_online', [LaporanController::class, 'laporan_pendaftaran_mei_online']);
Route::get('/laporan_pendaftaran_juni_online', [LaporanController::class, 'laporan_pendaftaran_juni_online']);
Route::get('/laporan_pendaftaran_juli_online', [LaporanController::class, 'laporan_pendaftaran_juli_online']);
Route::get('/laporan_pendaftaran_agustus_online', [LaporanController::class, 'laporan_pendaftaran_agustus_online']);
Route::get('/laporan_pendaftaran_september_online', [LaporanController::class, 'laporan_pendaftaran_september_online']);
Route::get('/laporan_pendaftaran_oktober_online', [LaporanController::class, 'laporan_pendaftaran_oktober_online']);
Route::get('/laporan_pendaftaran_november_online', [LaporanController::class, 'laporan_pendaftaran_november_online']);
Route::get('/laporan_pendaftaran_desember_online', [LaporanController::class, 'laporan_pendaftaran_desember_online']);
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////
///////////////// == LAPORAN DASHBOARD ADMIN == ////////////////////////////////////
Route::get('/data_kampus_1', [LaporanDataController::class, 'data_kampus_1']);
Route::get('/data_kampus_2', [LaporanDataController::class, 'data_kampus_2']);
Route::get('/data_kampus_3', [LaporanDataController::class, 'data_kampus_3']);
Route::get('/data_kampus_4', [LaporanDataController::class, 'data_kampus_4']);
/////
Route::get('/data_jenjang_smp1', [LaporanDataController::class, 'data_jenjang_smp1']);
Route::get('/data_jenjang_smp2', [LaporanDataController::class, 'data_jenjang_smp2']);
Route::get('/data_jenjang_mts', [LaporanDataController::class, 'data_jenjang_mts']);
Route::get('/data_jenjang_smk', [LaporanDataController::class, 'data_jenjang_smk']);
Route::get('/data_jenjang_ma', [LaporanDataController::class, 'data_jenjang_ma']);
/////
Route::get('/data_lakilaki', [LaporanDataController::class, 'data_lakilaki']);
Route::get('/data_perempuan', [LaporanDataController::class, 'data_perempuan']);
Route::get('/data_reguler', [LaporanDataController::class, 'data_reguler']);
Route::get('/data_nonreguler', [LaporanDataController::class, 'data_nonreguler']);
/////
Route::get('/data_reguler_lakilaki', [LaporanDataController::class, 'data_reguler_lakilaki']);
Route::get('/data_reguler_perempuan', [LaporanDataController::class, 'data_reguler_perempuan']);
Route::get('/data_nonreguler_lakilaki', [LaporanDataController::class, 'data_nonreguler_lakilaki']);
Route::get('/data_nonreguler_perempuan', [LaporanDataController::class, 'data_nonreguler_perempuan']);
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////
///////////////// == PINDAH KELAS == ////////////////////////////////////
Route::get('/pindahkelas', [SiswaController::class, 'pindahjenjangsiswa']);
Route::post('/siswa/pindahjenjang', [SiswaController::class, 'pindahjenjang']);
Route::post('/siswa/pindahkelas', [SiswaController::class, 'pindahkelas']);
Route::post('/siswa/pindahruang', [SiswaController::class, 'pindahruang']);

Route::get('/pindahkamar', [SiswaController::class, 'pindahkampussiswa']);
Route::post('/siswa/pindahkampus', [SiswaController::class, 'pindahkampus']);
Route::post('/siswa/pindahgedung', [SiswaController::class, 'pindahgedung']);
Route::post('/siswa/pindahkamar', [SiswaController::class, 'pindahkamar']);

Route::get('/pindahjalurpendaftaran', [SiswaController::class, 'pindahjalurpendaftaransiswa']);
Route::post('/siswa/pindahjalurpendaftaran', [SiswaController::class, 'pindahjalurpendaftaran']);
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////
Route::group(['middleware' => ['auth','checkRole:Administrator,PSB,Dewan Ustadz,Admin Kampus,siswa']],function(){
//////////////////////////////////////////////////////////////////////////

Route::get('/siswa', [SiswaController::class, 'index']);
Route::post('/siswa/create', [SiswaController::class, 'create']);
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit']);
Route::post('/siswa/{id}/update', [SiswaController::class, 'update']);
Route::get('/siswa/{id}/editfoto', [SiswaController::class, 'editfoto']);
Route::post('/siswa/{id}/updatefoto', [SiswaController::class, 'updatefoto']);
Route::get('/siswa/{id}/detail', [SiswaController::class, 'detail']);
Route::post('/siswa/{id}/updatedetail', [SiswaController::class, 'updatedetail']);
Route::get('/siswa/{id}/delete', [SiswaController::class, 'delete']);


//////////////////////////////////////////////////////////////////////////
///////////////// == PRESTASI == ////////////////////////////////////////
Route::get('/siswa/{id}/prestasi', [PrestasiController::class, 'prestasi']);
Route::post('/siswa/{id}/addprestasi', [PrestasiController::class, 'addprestasi']);
Route::get('/siswa/{id}/{idprestasi}/editprestasi', [PrestasiController::class, 'editprestasi']);
Route::post('/siswa/{id}/{idprestasi}/updateprestasi', [PrestasiController::class, 'updateprestasi']);
Route::get('/siswa/{id}/{idprestasi}/deleteprestasi', [PrestasiController::class, 'deleteprestasi']);
Route::get('/siswa/{id}/printprestasi', [PrestasiController::class, 'printprestasi']);
//////////////////////////////////////////////////////////////////////////
///////////////// == PELANGGARAN == ////////////////////////////////////////
Route::get('/siswa/{id}/pelanggaran', [PelanggaranController::class, 'pelanggaran']);
Route::post('/siswa/{id}/addpelanggaran', [PelanggaranController::class, 'addpelanggaran']);
Route::get('/siswa/{id}/{idpelanggaran}/editpelanggaran', [PelanggaranController::class, 'editpelanggaran']);
Route::post('/siswa/{id}/{idpelanggaran}/updatepelanggaran', [PelanggaranController::class, 'updatepelanggaran']);
Route::get('/siswa/{id}/{idpelanggaran}/deletepelanggaran', [PelanggaranController::class, 'deletepelanggaran']);
Route::get('/siswa/{id}/printpelanggaran', [PelanggaranController::class, 'printpelanggaran']);
//////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////
///////////////// == DOWNLOAD TAMPLATE == ////////////////////////////////////////
Route::post('/import', [SiswaController::class, 'import'])->name('import');
Route::get('/tamplate', [FileController::class, 'tamplate']);

//////////////////////////////////////////////////////////////////////////
///////////////// == RANKING == ////////////////////////////////////////
Route::get('/rankingpelanggaran', [RankingController::class, 'rankingpelanggaran']);
Route::get('/rankingpelanggarankampus1', [RankingController::class, 'rankingpelanggarankampus1']);
Route::get('/rankingpelanggarankampus2', [RankingController::class, 'rankingpelanggarankampus2']);
Route::get('/rankingpelanggarankampus3', [RankingController::class, 'rankingpelanggarankampus3']);
Route::get('/rankingpelanggarankampus4', [RankingController::class, 'rankingpelanggarankampus4']);

Route::get('/rankingprestasi', [RankingController::class, 'rankingprestasi']);
Route::get('/rankingprestasikampus1', [RankingController::class, 'rankingprestasikampus1']);
Route::get('/rankingprestasikampus2', [RankingController::class, 'rankingprestasikampus2']);
Route::get('/rankingprestasikampus3', [RankingController::class, 'rankingprestasikampus3']);
Route::get('/rankingprestasikampus4', [RankingController::class, 'rankingprestasikampus4']);

///////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////
///////////////// == MASTER == ////////////////////////////////////
///////////////////////////////////////////////////////////////////
Route::get('/jenjang', [TambahController::class, 'indexjenjang']);
Route::post('/jenjang/createjenjang', [TambahController::class, 'createjenjang']);
Route::get('/jenjang/{id}/editjenjang', [TambahController::class, 'editjenjang']);
Route::post('/jenjang/{id}/updatejenjang', [TambahController::class, 'updatejenjang']);
Route::get('/jenjang/{id}/deletejenjang', [TambahController::class, 'deletejenjang']);
/////
Route::get('/kelas', [TambahController::class, 'indexkelas']);
Route::post('/kelas/createkelas', [TambahController::class, 'createkelas']);
Route::get('/kelas/{id}/editkelas', [TambahController::class, 'editkelas']);
Route::post('/kelas/{id}/updatekelas', [TambahController::class, 'updatekelas']);
Route::get('/kelas/{id}/deletekelas', [TambahController::class, 'deletekelas']);
/////
Route::get('/ruang', [TambahController::class, 'indexruang']);
Route::post('/ruang/createruang', [TambahController::class, 'createruang']);
Route::get('/ruang/{id}/editruang', [TambahController::class, 'editruang']);
Route::post('/ruang/{id}/updateruang', [TambahController::class, 'updateruang']);
Route::get('/ruang/{id}/deleteruang', [TambahController::class, 'deleteruang']);
/////
Route::get('/kampus', [TambahController::class, 'indexkampus']);
Route::post('/kampus/createkampus', [TambahController::class, 'createkampus']);
Route::get('/kampus/{id}/editkampus', [TambahController::class, 'editkampus']);
Route::post('/kampus/{id}/updatekampus', [TambahController::class, 'updatekampus']);
Route::get('/kampus/{id}/deletekampus', [TambahController::class, 'deletekampus']);
/////
Route::get('/gedung', [TambahController::class, 'indexgedung']);
Route::post('/gedung/creategedung', [TambahController::class, 'creategedung']);
Route::get('/gedung/{id}/editgedung', [TambahController::class, 'editgedung']);
Route::post('/gedung/{id}/updategedung', [TambahController::class, 'updategedung']);
Route::get('/gedung/{id}/deletegedung', [TambahController::class, 'deletegedung']);
/////
Route::get('/kamar', [TambahController::class, 'indexkamar']);
Route::post('/kamar/createkamar', [TambahController::class, 'createkamar']);
Route::get('/kamar/{id}/editkamar', [TambahController::class, 'editkamar']);
Route::post('/kamar/{id}/updatekamar', [TambahController::class, 'updatekamar']);
Route::get('/kamar/{id}/deletekamar', [TambahController::class, 'deletekamar']);
/////////////////////////////
Route::get('/fasilitas', [TambahController::class, 'indexfasilitas']);
Route::post('/fasilitas/createfasilitas', [TambahController::class, 'createfasilitas']);
Route::get('/fasilitas/{id}/editfasilitas', [TambahController::class, 'editfasilitas']);
Route::post('/fasilitas/{id}/updatefasilitas', [TambahController::class, 'updatefasilitas']);
Route::get('/fasilitas/{id}/deletefasilitas', [TambahController::class, 'deletefasilitas']);
/////
Route::get('/pendidikan', [TambahController::class, 'indexpendidikan']);
Route::post('/pendidikan/creatependidikan', [TambahController::class, 'creatependidikan']);
Route::get('/pendidikan/{id}/editpendidikan', [TambahController::class, 'editpendidikan']);
Route::post('/pendidikan/{id}/updatependidikan', [TambahController::class, 'updatependidikan']);
Route::get('/pendidikan/{id}/deletependidikan', [TambahController::class, 'deletependidikan']);
/////
Route::get('/pekerjaan', [TambahController::class, 'indexpekerjaan']);
Route::post('/pekerjaan/createpekerjaan', [TambahController::class, 'createpekerjaan']);
Route::get('/pekerjaan/{id}/editpekerjaan', [TambahController::class, 'editpekerjaan']);
Route::post('/pekerjaan/{id}/updatepekerjaan', [TambahController::class, 'updatepekerjaan']);
Route::get('/pekerjaan/{id}/deletepekerjaan', [TambahController::class, 'deletepekerjaan']);
/////
Route::get('/caption_printdatadiri', [TambahController::class, 'indexcaption_printdatadiri']);
Route::post('/caption_printdatadiri/createcaption_printdatadiri', [TambahController::class, 'createcaption_printdatadiri']);
Route::get('/caption_printdatadiri/{id}/editcaption_printdatadiri', [TambahController::class, 'editcaption_printdatadiri']);
Route::post('/caption_printdatadiri/{id}/updatecaption_printdatadiri', [TambahController::class, 'updatecaption_printdatadiri']);
Route::get('/caption_printdatadiri/{id}/deletecaption_printdatadiri', [TambahController::class, 'deletecaption_printdatadiri']);
/////
Route::get('/nomor_pembayaran', [TambahController::class, 'indexnomor_pembayaran']);
Route::post('/nomor_pembayaran/createnomor_pembayaran', [TambahController::class, 'createnomor_pembayaran']);
Route::get('/nomor_pembayaran/{id}/editnomor_pembayaran', [TambahController::class, 'editnomor_pembayaran']);
Route::post('/nomor_pembayaran/{id}/updatenomor_pembayaran', [TambahController::class, 'updatenomor_pembayaran']);
Route::get('/nomor_pembayaran/{id}/deletenomor_pembayaran', [TambahController::class, 'deletenomor_pembayaran']);
/////
Route::get('/nomor_operator', [TambahController::class, 'indexnomor_operator']);
Route::post('/nomor_operator/createnomor_operator', [TambahController::class, 'createnomor_operator']);
Route::get('/nomor_operator/{id}/editnomor_operator', [TambahController::class, 'editnomor_operator']);
Route::post('/nomor_operator/{id}/updatenomor_operator', [TambahController::class, 'updatenomor_operator']);
Route::get('/nomor_operator/{id}/deletenomor_operator', [TambahController::class, 'deletenomor_operator']);
/////
Route::get('/transfer_bank', [TambahController::class, 'indextransfer_bank']);
Route::post('/transfer_bank/createtransfer_bank', [TambahController::class, 'createtransfer_bank']);
Route::get('/transfer_bank/{id}/edittransfer_bank', [TambahController::class, 'edittransfer_bank']);
Route::post('/transfer_bank/{id}/updatetransfer_bank', [TambahController::class, 'updatetransfer_bank']);
Route::get('/transfer_bank/{id}/deletetransfer_bank', [TambahController::class, 'deletetransfer_bank']);
/////
Route::get('/biaya_pendaftaran', [TambahController::class, 'indexbiaya_pendaftaran']);
Route::post('/biaya_pendaftaran/createbiaya_pendaftaran', [TambahController::class, 'createbiaya_pendaftaran']);
Route::get('/biaya_pendaftaran/{id}/editbiaya_pendaftaran', [TambahController::class, 'editbiaya_pendaftaran']);
Route::post('/biaya_pendaftaran/{id}/updatebiaya_pendaftaran', [TambahController::class, 'updatebiaya_pendaftaran']);
Route::get('/biaya_pendaftaran/{id}/deletebiaya_pendaftaran', [TambahController::class, 'deletebiaya_pendaftaran']);
/////
Route::get('/biaya', [TambahController::class, 'indexbiaya']);
Route::post('/biaya/createbiaya', [TambahController::class, 'createbiaya']);
Route::get('/biaya/{id}/editbiaya', [TambahController::class, 'editbiaya']);
Route::post('/biaya/{id}/updatebiaya', [TambahController::class, 'updatebiaya']);
Route::get('/biaya/{id}/deletebiaya', [TambahController::class, 'deletebiaya']);
/////
Route::get('/chatwa', [TambahController::class, 'indexchatwa']);
Route::get('/chatwa/{id}/editchatwa', [TambahController::class, 'editchatwa']);
Route::post('/chatwa/{id}/updatechatwa', [TambahController::class, 'updatechatwa']);
/////
Route::get('/caption_proses_pendaftaran_online', [TambahController::class, 'indexcaption_proses_pendaftaran_online']);
Route::post('/caption_proses_pendaftaran_online/createcaption_proses_pendaftaran_online', [TambahController::class, 'createcaption_proses_pendaftaran_online']);
Route::get('/caption_proses_pendaftaran_online/{id}/editcaption_proses_pendaftaran_online', [TambahController::class, 'editcaption_proses_pendaftaran_online']);
Route::post('/caption_proses_pendaftaran_online/{id}/updatecaption_proses_pendaftaran_online', [TambahController::class, 'updatecaption_proses_pendaftaran_online']);
Route::get('/caption_proses_pendaftaran_online/{id}/deletecaption_proses_pendaftaran_online', [TambahController::class, 'deletecaption_proses_pendaftaran_online']);
/////
Route::get('/caption_persyaratan_pendaftaran_online', [TambahController::class, 'indexcaption_persyaratan_pendaftaran_online']);
Route::post('/caption_persyaratan_pendaftaran_online/createcaption_persyaratan_pendaftaran_online', [TambahController::class, 'createcaption_persyaratan_pendaftaran_online']);
Route::get('/caption_persyaratan_pendaftaran_online/{id}/editcaption_persyaratan_pendaftaran_online', [TambahController::class, 'editcaption_persyaratan_pendaftaran_online']);
Route::post('/caption_persyaratan_pendaftaran_online/{id}/updatecaption_persyaratan_pendaftaran_online', [TambahController::class, 'updatecaption_persyaratan_pendaftaran_online']);
Route::get('/caption_persyaratan_pendaftaran_online/{id}/deletecaption_persyaratan_pendaftaran_online', [TambahController::class, 'deletecaption_persyaratan_pendaftaran_online']);
/////
Route::get('/waktu_pendaftaran', [TambahController::class, 'indexwaktu_pendaftaran']);
Route::post('/waktu_pendaftaran/createwaktu_pendaftaran', [TambahController::class, 'createwaktu_pendaftaran']);
Route::get('/waktu_pendaftaran/{id}/editwaktu_pendaftaran', [TambahController::class, 'editwaktu_pendaftaran']);
Route::post('/waktu_pendaftaran/{id}/updatewaktu_pendaftaran', [TambahController::class, 'updatewaktu_pendaftaran']);
Route::get('/waktu_pendaftaran/{id}/deletewaktu_pendaftaran', [TambahController::class, 'deletewaktu_pendaftaran']);
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////




//////////////////////////////////////////////////////////////////////////

Route::get('/sanksi', [SanksiController::class, 'index']);
Route::post('/sanksi/create', [SanksiController::class, 'create']);
Route::get('/sanksi/{id}/edit', [SanksiController::class, 'edit']);
Route::post('/sanksi/{id}/update', [SanksiController::class, 'update']);
Route::get('/sanksi/{id}/delete', [SanksiController::class, 'delete']);

//////////////////////////////////////////////////////////////////////////
});
//////////////////////////////////////////////////////////////////////////



// ============================ Perizinan ==============================================

Route::resource('perizinan', PerizinanController::class)->middleware('auth')->except('create');

Route::post('perizinan/{perizinan}/verify', [PerizinanController::class,'verify'])->middleware('auth')->name('verify');
Route::post('perizinan/{perizinan}/kembali', [PerizinanController::class,'kembali'])->middleware('auth')->name('kembali');

Route::get('perizinan/{perizinan}/print_request',[PerizinanController::class,'printRequest'])->middleware('auth');
Route::get('perizinan/{perizinan}/surat_izin',[PerizinanController::class,'printIzin'])->middleware('auth');

Route::get('/allMasaizin',[PerizinanController::class,'allMasaIzin'])->middleware('auth');
Route::get('/allKembali',[PerizinanController::class,'allKembali'])->middleware('auth');

/////////////// Perizinan untuk santri //////////////////////////////////////////
Route::get('/siswa/{id}/perizinan', [Perizinan_santriController::class, 'perizinan']);


//////////////////////////////////////////////////////////////////////////
///////////////// == PENITIPAN UANG == ////////////////////////////////////////
Route::get('/siswa/{id}/penitipan_uang', [Penitipan_uangController::class, 'penitipan_uang']);
Route::post('/siswa/{id}/addpenitipan_uang', [Penitipan_uangController::class, 'addpenitipan_uang']);
Route::get('/siswa/{id}/{idpenitipan_uang}/editpenitipan_uang', [Penitipan_uangController::class, 'editpenitipan_uang']);
Route::post('/siswa/{id}/{idpenitipan_uang}/updatepenitipan_uang', [Penitipan_uangController::class, 'updatepenitipan_uang']);
Route::get('/siswa/{id}/{idpenitipan_uang}/deletepenitipan_uang', [Penitipan_uangController::class, 'deletepenitipan_uang']);
Route::get('/siswa/{id}/printpenitipan_uang', [Penitipan_uangController::class, 'printpenitipan_uang']);


Route::get('/total_uang', [RankingController::class, 'total_uang']);
Route::get('/total_uangkampus1', [RankingController::class, 'total_uangkampus1']);
Route::get('/total_uangkampus2', [RankingController::class, 'total_uangkampus2']);
Route::get('/total_uangkampus3', [RankingController::class, 'total_uangkampus3']);
Route::get('/total_uangkampus4', [RankingController::class, 'total_uangkampus4']);

