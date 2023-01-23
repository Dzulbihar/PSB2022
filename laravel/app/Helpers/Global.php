<?php

use App\Models\Siswa;
use App\Models\Biaya_awal_masuk;
use App\Models\Ukuran_seragam;
use Illuminate\Support\Facades\DB;


function totalSemuaPendaftaran()
{
    return 
    Siswa::whereIn('jalurpendaftaran',["Offline","Online"])->count();
    // return 
    // Siswa::count() 
    //  ;
}

function totalOnline()
{
    return 
    Siswa::where('jalurpendaftaran',"Online")->count();
}

function totalOffline()
{
    return 
    Siswa::where('jalurpendaftaran',"Offline")->count();
}
//////////////////////////////////////////////////////////
function totalLakilaki()
{
    return 
    Siswa::where('jeniskelamin',"Laki-laki")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalPerempuan()
{
    return 
    Siswa::where('jeniskelamin',"Perempuan")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalReguler()
{
    return 
    Siswa::where('fasilitas',"Reguler")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalNonReguler()
{
    return 
    Siswa::where('fasilitas',"Non Reguler")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}
//////////////////////////////////////////////////////////
function totalRegulerLakilaki()
{
    return 
    Siswa::where('fasilitas',"Reguler")->
    where('jeniskelamin',"Laki-laki")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalRegulerPerempuan()
{
    return 
    Siswa::where('fasilitas',"Reguler")->
    where('jeniskelamin',"Perempuan")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalNonRegulerLakilaki()
{
    return 
    Siswa::where('fasilitas',"Non Reguler")->
    where('jeniskelamin',"Laki-laki")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalNonRegulerPerempuan()
{
    return 
    Siswa::where('fasilitas',"Non Reguler")->
    where('jeniskelamin',"Perempuan")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}
//////////////////////////////////////////////////////////
function totalSMP1()
{
    return 
    Siswa::where('jenjang',"SMP 1")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalSMP2()
{
    return 
    Siswa::where('jenjang',"SMP 2")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalMTs()
{
    return 
    Siswa::where('jenjang',"MTs")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalSMK()
{
    return 
    Siswa::where('jenjang',"SMK")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalMA()
{
    return 
    Siswa::where('jenjang',"MA")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalMahadAly()
{
    return 
    Siswa::where('jenjang',"Mahad Aly")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalAlumni()
{
    return 
    Siswa::where('alumni',"Alumni Aska")->
    count();
}
function totalAlumnikeMA()
{
    return 
    Siswa::where('alumni',"Alumni Aska")->
    where('jenjang',"MA")->
    count();
}
function totalAlumnikeSMK()
{
    return 
    Siswa::where('alumni',"Alumni Aska")->
    where('jenjang',"SMK")->
    count();
}
function totalAlumnikeMAHADALY()
{
    return 
    Siswa::where('alumni',"Alumni Aska")->
    where('jenjang',"Mahad Aly")->
    count();
}

/////////////////////////////////////////////////////////////
function totalSudahRegistrasi()
{
    return 
    Biaya_awal_masuk::where('registrasi',"sudah registrasi")->
    count();
}

function totalLunas()
{
    return 
    Biaya_awal_masuk::where('lunas',"sudah lunas")->
    count();
}
/////////////////////////////////////////////////////////////
function totalJanuari()
{
    return 
    Siswa::where('bulanpendaftaran',"January")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalFebruari()
{
    return 
    Siswa::where('bulanpendaftaran',"February")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalMaret()
{
    return 
    Siswa::where('bulanpendaftaran',"March")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalApril()
{
    return 
    Siswa::where('bulanpendaftaran',"April")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalMei()
{
    return 
    Siswa::where('bulanpendaftaran',"May")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalJuni()
{
    return 
    Siswa::where('bulanpendaftaran',"June")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalJuli()
{
    return 
    Siswa::where('bulanpendaftaran',"July")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalAgustus()
{
    return 
    Siswa::where('bulanpendaftaran',"August")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalSeptember()
{
    return 
    Siswa::where('bulanpendaftaran',"September")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalOktober()
{
    return 
    Siswa::where('bulanpendaftaran',"October")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalNovember()
{
    return 
    Siswa::where('bulanpendaftaran',"November")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}

function totalDesember()
{
    return 
    Siswa::where('bulanpendaftaran',"December")->
    whereIn('jalurpendaftaran',["Offline","Online"])->
    count();
}
/////////////////////////////////////////////////////////////
function totalJanuariOffline()
{
    return 
    Siswa::where('bulanpendaftaran',"January")->
    where('jalurpendaftaran',"Offline")->
    count();
}

function totalFebruariOffline()
{
    return 
    Siswa::where('bulanpendaftaran',"February")->
    where('jalurpendaftaran',"Offline")->
    count();
}

function totalMaretOffline()
{
    return 
    Siswa::where('bulanpendaftaran',"March")->
    where('jalurpendaftaran',"Offline")->
    count();
}

function totalAprilOffline()
{
    return 
    Siswa::where('bulanpendaftaran',"April")->
    where('jalurpendaftaran',"Offline")->
    count();
}

function totalMeiOffline()
{
    return 
    Siswa::where('bulanpendaftaran',"May")->
    where('jalurpendaftaran',"Offline")->
    count();
}

function totalJuniOffline()
{
    return 
    Siswa::where('bulanpendaftaran',"June")->
    where('jalurpendaftaran',"Offline")->
    count();
}

function totalJuliOffline()
{
    return 
    Siswa::where('bulanpendaftaran',"July")->
    where('jalurpendaftaran',"Offline")->
    count();
}

function totalAgustusOffline()
{
    return 
    Siswa::where('bulanpendaftaran',"August")->
    where('jalurpendaftaran',"Offline")->
    count();
}

function totalSeptemberOffline()
{
    return 
    Siswa::where('bulanpendaftaran',"September")->
    where('jalurpendaftaran',"Offline")->
    count();
}

function totalOktoberOffline()
{
    return 
    Siswa::where('bulanpendaftaran',"October")->
    where('jalurpendaftaran',"Offline")->
    count();
}

function totalNovemberOffline()
{
    return 
    Siswa::where('bulanpendaftaran',"November")->
    where('jalurpendaftaran',"Offline")->
    count();
}

function totalDesemberOffline()
{
    return 
    Siswa::where('bulanpendaftaran',"December")->
    where('jalurpendaftaran',"Offline")->
    count();
}
/////////////////////////////////////////////////////////////
function totalJanuariOnline()
{
    return 
    Siswa::where('bulanpendaftaran',"January")->
    where('jalurpendaftaran',"Online")->
    count();
}

function totalFebruariOnline()
{
    return 
    Siswa::where('bulanpendaftaran',"February")->
    where('jalurpendaftaran',"Online")->
    count();
}

function totalMaretOnline()
{
    return 
    Siswa::where('bulanpendaftaran',"March")->
    where('jalurpendaftaran',"Online")->
    count();
}

function totalAprilOnline()
{
    return 
    Siswa::where('bulanpendaftaran',"April")->
    where('jalurpendaftaran',"Online")->
    count();
}

function totalMeiOnline()
{
    return 
    Siswa::where('bulanpendaftaran',"May")->
    where('jalurpendaftaran',"Online")->
    count();
}

function totalJuniOnline()
{
    return 
    Siswa::where('bulanpendaftaran',"June")->
    where('jalurpendaftaran',"Online")->
    count();
}

function totalJuliOnline()
{
    return 
    Siswa::where('bulanpendaftaran',"July")->
    where('jalurpendaftaran',"Online")->
    count();
}

function totalAgustusOnline()
{
    return 
    Siswa::where('bulanpendaftaran',"August")->
    where('jalurpendaftaran',"Online")->
    count();
}

function totalSeptemberOnline()
{
    return 
    Siswa::where('bulanpendaftaran',"September")->
    where('jalurpendaftaran',"Online")->
    count();
}

function totalOktoberOnline()
{
    return 
    Siswa::where('bulanpendaftaran',"October")->
    where('jalurpendaftaran',"Online")->
    count();
}

function totalNovemberOnline()
{
    return 
    Siswa::where('bulanpendaftaran',"November")->
    where('jalurpendaftaran',"Online")->
    count();
}

function totalDesemberOnline()
{
    return 
    Siswa::where('bulanpendaftaran',"December")->
    where('jalurpendaftaran',"Online")->
    count();
}
/////////////////////////////////////////////////////////////
function totalSeragamSMP_S()
{
    return 
    Ukuran_seragam::where('jenjang',"SMP 1")->
    where('seragam',"S")->
    count();
}

function totalSeragamSMP_M()
{
    return 
    Ukuran_seragam::where('jenjang',"SMP 1")->
    where('seragam',"M")->
    count();
}

function totalSeragamSMP_L()
{
    return 
    Ukuran_seragam::where('jenjang',"SMP 1")->
    where('seragam',"L")->
    count();
}

function totalSeragamSMP_XL()
{
    return 
    Ukuran_seragam::where('jenjang',"SMP 1")->
    where('seragam',"XL")->
    count();
}

function totalSeragamSMP_XXL()
{
    return 
    Ukuran_seragam::where('jenjang',"SMP 1")->
    where('seragam',"XXL")->
    count();
}

function totalSeragamSMP_XXXL()
{
    return 
    Ukuran_seragam::where('jenjang',"SMP 1")->
    where('seragam',"XXXL")->
    count();
}
/////////////////////
function totalSeragamSMP2_S()
{
    return 
    Ukuran_seragam::where('jenjang',"SMP 2")->
    where('seragam',"S")->
    count();
}

function totalSeragamSMP2_M()
{
    return 
    Ukuran_seragam::where('jenjang',"SMP 2")->
    where('seragam',"M")->
    count();
}

function totalSeragamSMP2_L()
{
    return 
    Ukuran_seragam::where('jenjang',"SMP 2")->
    where('seragam',"L")->
    count();
}

function totalSeragamSMP2_XL()
{
    return 
    Ukuran_seragam::where('jenjang',"SMP 2")->
    where('seragam',"XL")->
    count();
}

function totalSeragamSMP2_XXL()
{
    return 
    Ukuran_seragam::where('jenjang',"SMP 2")->
    where('seragam',"XXL")->
    count();
}

function totalSeragamSMP2_XXXL()
{
    return 
    Ukuran_seragam::where('jenjang',"SMP 2")->
    where('seragam',"XXXL")->
    count();
}
/////////////////////
function totalSeragamMTs_S()
{
    return 
    Ukuran_seragam::where('jenjang',"MTs")->
    where('seragam',"S")->
    count();
}

function totalSeragamMTs_M()
{
    return 
    Ukuran_seragam::where('jenjang',"MTs")->
    where('seragam',"M")->
    count();
}

function totalSeragamMTs_L()
{
    return 
    Ukuran_seragam::where('jenjang',"MTs")->
    where('seragam',"L")->
    count();
}

function totalSeragamMTs_XL()
{
    return 
    Ukuran_seragam::where('jenjang',"MTs")->
    where('seragam',"XL")->
    count();
}

function totalSeragamMTs_XXL()
{
    return 
    Ukuran_seragam::where('jenjang',"MTs")->
    where('seragam',"XXL")->
    count();
}

function totalSeragamMTs_XXXL()
{
    return 
    Ukuran_seragam::where('jenjang',"MTs")->
    where('seragam',"XXXL")->
    count();
}
/////////////////////
function totalSeragamSMK_S()
{
    return 
    Ukuran_seragam::where('jenjang',"SMK")->
    where('seragam',"S")->
    count();
}

function totalSeragamSMK_M()
{
    return 
    Ukuran_seragam::where('jenjang',"SMK")->
    where('seragam',"M")->
    count();
}

function totalSeragamSMK_L()
{
    return 
    Ukuran_seragam::where('jenjang',"SMK")->
    where('seragam',"L")->
    count();
}

function totalSeragamSMK_XL()
{
    return 
    Ukuran_seragam::where('jenjang',"SMK")->
    where('seragam',"XL")->
    count();
}

function totalSeragamSMK_XXL()
{
    return 
    Ukuran_seragam::where('jenjang',"SMK")->
    where('seragam',"XXL")->
    count();
}

function totalSeragamSMK_XXXL()
{
    return 
    Ukuran_seragam::where('jenjang',"SMK")->
    where('seragam',"XXXL")->
    count();
}
/////////////////////
function totalSeragamMA_S()
{
    return 
    Ukuran_seragam::where('jenjang',"MA")->
    where('seragam',"S")->
    count();
}

function totalSeragamMA_M()
{
    return 
    Ukuran_seragam::where('jenjang',"MA")->
    where('seragam',"M")->
    count();
}

function totalSeragamMA_L()
{
    return 
    Ukuran_seragam::where('jenjang',"MA")->
    where('seragam',"L")->
    count();
}

function totalSeragamMA_XL()
{
    return 
    Ukuran_seragam::where('jenjang',"MA")->
    where('seragam',"XL")->
    count();
}

function totalSeragamMA_XXL()
{
    return 
    Ukuran_seragam::where('jenjang',"MA")->
    where('seragam',"XXL")->
    count();
}

function totalSeragamMA_XXXL()
{
    return 
    Ukuran_seragam::where('jenjang',"MA")->
    where('seragam',"XXXL")->
    count();
}

/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////

function totalSemuaSantri()
{
    return 
    Siswa::count();
}

function totalSantrilama()
{
    return 
    Siswa::where('jalurpendaftaran',"Santri Lama")->count();
}

function totalKampus1()
{
    return 
    Siswa::where('kampus',"kampus 1")->count();
}

function totalKampus2()
{
    return 
    Siswa::where('kampus',"kampus 2")->count();
}

function totalKampus3()
{
    return 
    Siswa::where('kampus',"kampus 3")->count();
}

function totalKampus4()
{
    return 
    Siswa::where('kampus',"kampus 4")->count();
}
/////////////////////////////////////////////////////////////
function totalsemuaSMP1()
{
    return 
    Siswa::where('jenjang',"SMP 1")->
    count();
}

function totalsemuaSMP2()
{
    return 
    Siswa::where('jenjang',"SMP 2")->
    count();
}

function totalsemuaMTs()
{
    return 
    Siswa::where('jenjang',"MTs")->
    count();
}

function totalsemuaSMK()
{
    return 
    Siswa::where('jenjang',"SMK")->
    count();
}

function totalsemuaMA()
{
    return 
    Siswa::where('jenjang',"MA")->
    count();
}
//////////////////////////////////////////////////////////
function totalsemuaLakilaki()
{
    return 
    Siswa::where('jeniskelamin',"Laki-laki")->
    count();
}

function totalsemuaPerempuan()
{
    return 
    Siswa::where('jeniskelamin',"Perempuan")->
    count();
}

function totalsemuaReguler()
{
    return 
    Siswa::where('fasilitas',"Reguler")->
    count();
}

function totalsemuaNonReguler()
{
    return 
    Siswa::where('fasilitas',"Non Reguler")->
    count();
}
//////////////////////////////////////////////////////////
function totalsemuaRegulerLakilaki()
{
    return 
    Siswa::where('fasilitas',"Reguler")->
    where('jeniskelamin',"Laki-laki")->
    count();
}

function totalsemuaRegulerPerempuan()
{
    return 
    Siswa::where('fasilitas',"Reguler")->
    where('jeniskelamin',"Perempuan")->
    count();
}

function totalsemuaNonRegulerLakilaki()
{
    return 
    Siswa::where('fasilitas',"Non Reguler")->
    where('jeniskelamin',"Laki-laki")->
    count();
}

function totalsemuaNonRegulerPerempuan()
{
    return 
    Siswa::where('fasilitas',"Non Reguler")->
    where('jeniskelamin',"Perempuan")->
    count();
}
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
function rankingpelanggarankampus1()
{
        $siswa = Siswa::where('kampus',"kampus 1")->get();
        $siswa->map(function($s){
            $s->skorSanksi = $s->skorSanksi();
            return $s;
        });
        
        $siswa = $siswa->sortByDesc('skorSanksi')->take(1000);
        return $siswa;
}

function rankingpelanggarankampus2()
{
        $siswa = Siswa::where('kampus',"kampus 2")->get();
        $siswa->map(function($s){
            $s->skorSanksi = $s->skorSanksi();
            return $s;
        });
        
        $siswa = $siswa->sortByDesc('skorSanksi')->take(1000);
        return $siswa;
}

function rankingpelanggarankampus3()
{
        $siswa = Siswa::where('kampus',"kampus 3")->get();
        $siswa->map(function($s){
            $s->skorSanksi = $s->skorSanksi();
            return $s;
        });
        
        $siswa = $siswa->sortByDesc('skorSanksi')->take(1000);
        return $siswa;
}

function rankingpelanggarankampus4()
{
        $siswa = Siswa::where('kampus',"kampus 4")->get();
        $siswa->map(function($s){
            $s->skorSanksi = $s->skorSanksi();
            return $s;
        });
        
        $siswa = $siswa->sortByDesc('skorSanksi')->take(1000);
        return $siswa;
}

///////////////////////////////////////////////////////////////

function rankingprestasikampus1()
{
        $siswa = Siswa::where('kampus',"kampus 1")->get();
        $siswa->map(function($s){
            $s->skorPenghargaan = $s->skorPenghargaan();
            return $s;
        });
        
        $siswa = $siswa->sortByDesc('skorPenghargaan')->take(1000);
        return $siswa;
}

function rankingprestasikampus2()
{
        $siswa = Siswa::where('kampus',"kampus 2")->get();
        $siswa->map(function($s){
            $s->skorPenghargaan = $s->skorPenghargaan();
            return $s;
        });
        
        $siswa = $siswa->sortByDesc('skorPenghargaan')->take(1000);
        return $siswa;
}

function rankingprestasikampus3()
{
        $siswa = Siswa::where('kampus',"kampus 3")->get();
        $siswa->map(function($s){
            $s->skorPenghargaan = $s->skorPenghargaan();
            return $s;
        });
        
        $siswa = $siswa->sortByDesc('skorPenghargaan')->take(1000);
        return $siswa;
}

function rankingprestasikampus4()
{
        $siswa = Siswa::where('kampus',"kampus 4")->get();
        $siswa->map(function($s){
            $s->skorPenghargaan = $s->skorPenghargaan();
            return $s;
        });
        
        $siswa = $siswa->sortByDesc('skorPenghargaan')->take(1000);
        return $siswa;
}

///////////////////////////////////////////////////////////////

function penitipan_uangkampus1()
{
        $siswa = Siswa::where('kampus',"kampus 1")->
        // where('siswa_id',$id)->
        get();
        $siswa->map(function($s){
            $s->skorNabung = $s->skorNabung();
            $s->skorAmbil = $s->skorAmbil();
            return $s;
        });
        
        $siswa = $siswa->sortByDesc('skorNabung')->take(10000);
        $siswa = $siswa->sortByDesc('skorAmbil')->take(10000);
        return $siswa;
}


function penitipan_uangkampus2()
{
        $siswa = Siswa::where('kampus',"kampus 2")->get();
        $siswa->map(function($s){
            $s->skorNabung = $s->skorNabung();
            $s->skorAmbil = $s->skorAmbil();
            return $s;
        });
        
        $siswa = $siswa->sortByDesc('skorNabung')->take(10000);
        $siswa = $siswa->sortByDesc('skorAmbil')->take(10000);
        return $siswa;
}

function penitipan_uangkampus3()
{
        $siswa = Siswa::where('kampus',"kampus 3")->get();
        $siswa->map(function($s){
            $s->skorNabung = $s->skorNabung();
            $s->skorAmbil = $s->skorAmbil();
            return $s;
        });
        
        $siswa = $siswa->sortByDesc('skorNabung')->take(10000);
        $siswa = $siswa->sortByDesc('skorAmbil')->take(10000);
        return $siswa;
}

function penitipan_uangkampus4()
{
        $siswa = Siswa::where('kampus',"kampus 4")->get();
        $siswa->map(function($s){
            $s->skorNabung = $s->skorNabung();
            $s->skorAmbil = $s->skorAmbil();
            return $s;
        });
        
        $siswa = $siswa->sortByDesc('skorNabung')->take(10000);
        $siswa = $siswa->sortByDesc('skorAmbil')->take(10000);
        return $siswa;
}


