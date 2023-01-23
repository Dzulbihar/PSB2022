<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Biaya_awal_masuk;
use App\Models\Siswa;

class LaporanController extends Controller
{

    public function laporan_pendaftaran_total()
    {
        $siswa = DB::select('select `id`,`nama`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`waktu` FROM `siswa` WHERE `jalurpendaftaran` in ("Offline","Online")');

        return view('laporan.jalur.laporan_pendaftaran_total',['siswa' => $siswa]
        );
    }

    public function laporan_pendaftaran_offline()
    {
        $siswa = DB::select('select `id`,`nama`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`waktu` FROM `siswa` WHERE `jalurpendaftaran`="Offline"');

        return view('laporan.jalur.laporan_pendaftaran_offline',['siswa' => $siswa]
        );
    }

    public function laporan_pendaftaran_online()
    {
        $siswa = DB::select('select `id`,`nama`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`waktu` FROM `siswa` WHERE `jalurpendaftaran`="Online"');

        return view('laporan.jalur.laporan_pendaftaran_online',['siswa' => $siswa]
        );
    }

    public function laporan_pendaftaran_reguler()
    {
        $siswa = DB::select('select `id`,`nama`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`waktu` FROM `siswa` WHERE `fasilitas`="Reguler" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.fasilitas.laporan_pendaftaran_reguler',['siswa' => $siswa]
        );
    }

    public function laporan_pendaftaran_nonreguler()
    {
        $siswa = DB::select('select `id`,`nama`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`waktu` FROM `siswa` WHERE `fasilitas`="Non Reguler" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.fasilitas.laporan_pendaftaran_nonreguler',['siswa' => $siswa]
        );
    }

    public function laporan_pendaftaran_lakilaki()
    {
        $siswa = DB::select('select `id`,`nama`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`waktu` FROM `siswa` WHERE `jeniskelamin`="Laki-Laki" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.jeniskelamin.laporan_pendaftaran_lakilaki',['siswa' => $siswa]
        );
    }

    public function laporan_pendaftaran_perempuan()
    {
        $siswa = DB::select('select `id`,`nama`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`waktu` FROM `siswa` WHERE `jeniskelamin`="Perempuan" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.jeniskelamin.laporan_pendaftaran_perempuan',['siswa' => $siswa]
        );
    }

    public function laporan_pendaftaran_regulerlakilaki()
    {
        $siswa = DB::select('select `id`,`nama`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`waktu` FROM `siswa` WHERE `fasilitas`="Reguler" and `jeniskelamin`="Laki-Laki" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.fasilitasjeniskelamin.laporan_pendaftaran_regulerlakilaki',['siswa' => $siswa]
        );
    }

    public function laporan_pendaftaran_regulerperempuan()
    {
        $siswa = DB::select('select `id`,`nama`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`waktu` FROM `siswa` WHERE `fasilitas`="Reguler" and `jeniskelamin`="Perempuan" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.fasilitasjeniskelamin.laporan_pendaftaran_regulerperempuan',['siswa' => $siswa]
        );
    }

    public function laporan_pendaftaran_nonregulerlakilaki()
    {
        $siswa = DB::select('select `id`,`nama`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`waktu` FROM `siswa` WHERE `fasilitas`="Non Reguler" and `jeniskelamin`="Laki-Laki" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.fasilitasjeniskelamin.laporan_pendaftaran_nonregulerlakilaki',['siswa' => $siswa]
        );
    }

    public function laporan_pendaftaran_nonregulerperempuan()
    {
        $siswa = DB::select('select `id`,`nama`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country`,`waktu` FROM `siswa` WHERE `fasilitas`="Non Reguler" and `jeniskelamin`="Perempuan" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.fasilitasjeniskelamin.laporan_pendaftaran_nonregulerperempuan',['siswa' => $siswa]
        );
    }        

    public function laporan_administrasi_harian()
    {
        // $biaya_awal_masuk = \App\Models\Biaya_awal_masuk::all();
        $biaya_awal_masuk = DB::select('
            select `id`,`jalurpendaftaran`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`waktu`,`biaya`,`registrasi`,`lunas`,`created_at`
            FROM `biaya_awal_masuk` WHERE `registrasi` in ("sudah registrasi","angsuran")
            ');

        return view('laporan.administrasi.laporan_administrasi_harian',['biaya_awal_masuk' => $biaya_awal_masuk]
        );
    }

    public function laporan_administrasi_sudah_registrasi()
    {
        $biaya_awal_masuk = DB::select('select `id`,`jalurpendaftaran`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin` FROM `biaya_awal_masuk` WHERE `registrasi`="sudah registrasi"');

        return view('laporan.administrasi.laporan_administrasi_sudah_registrasi',['biaya_awal_masuk' => $biaya_awal_masuk]
        );
    }

    public function laporan_administrasi_sudah_lunas()
    {
        $biaya_awal_masuk = DB::select('select `id`,`jalurpendaftaran`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin` FROM `biaya_awal_masuk` WHERE `lunas`="sudah lunas"');

        return view('laporan.administrasi.laporan_administrasi_sudah_lunas',['biaya_awal_masuk' => $biaya_awal_masuk]
        );
    }  

    public function laporan_pendaftaran_januari()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="January" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.bulan.laporan_pendaftaran_januari',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_februari()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="February" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.bulan.laporan_pendaftaran_februari',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_maret()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="March" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.bulan.laporan_pendaftaran_maret',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_april()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="April" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.bulan.laporan_pendaftaran_april',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_mei()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="May" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.bulan.laporan_pendaftaran_mei',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_juni()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="June" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.bulan.laporan_pendaftaran_juni',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_juli()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="July" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.bulan.laporan_pendaftaran_juli',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_agustus()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="August" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.bulan.laporan_pendaftaran_agustus',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_september()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="September" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.bulan.laporan_pendaftaran_september',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_oktober()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="October" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.bulan.laporan_pendaftaran_oktober',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_november()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="November" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.bulan.laporan_pendaftaran_november',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_desember()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="December" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.bulan.laporan_pendaftaran_desember',['siswa' => $siswa]);
    }
    
    public function laporan_pendaftaran_januari_offline()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="January" and `jalurpendaftaran`="Offline"');

        return view('laporan.bulan.offline.laporan_pendaftaran_januari',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_februari_offline()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="February" and `jalurpendaftaran`="Offline"');

        return view('laporan.bulan.offline.laporan_pendaftaran_februari',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_maret_offline()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="March" and `jalurpendaftaran`="Offline"');

        return view('laporan.bulan.offline.laporan_pendaftaran_maret',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_april_offline()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="April" and `jalurpendaftaran`="Offline"');

        return view('laporan.bulan.offline.laporan_pendaftaran_april',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_mei_offline()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="May" and `jalurpendaftaran`="Offline"');

        return view('laporan.bulan.offline.laporan_pendaftaran_mei',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_juni_offline()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="June" and `jalurpendaftaran`="Offline"');

        return view('laporan.bulan.offline.laporan_pendaftaran_juni',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_juli_offline()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="July" and `jalurpendaftaran`="Offline"');

        return view('laporan.bulan.offline.laporan_pendaftaran_juli',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_agustus_offline()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="August" and `jalurpendaftaran`="Offline"');

        return view('laporan.bulan.offline.laporan_pendaftaran_agustus',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_september_offline()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="September" and `jalurpendaftaran`="Offline"');

        return view('laporan.bulan.offline.laporan_pendaftaran_september',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_oktober_offline()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="October" and `jalurpendaftaran`="Offline"');

        return view('laporan.bulan.offline.laporan_pendaftaran_oktober',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_november_offline()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="November" and `jalurpendaftaran`="Offline"');

        return view('laporan.bulan.offline.laporan_pendaftaran_november',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_desember_offline()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="December" and `jalurpendaftaran`="Offline"');

        return view('laporan.bulan.offline.laporan_pendaftaran_desember',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_januari_online()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="January" and `jalurpendaftaran`="Online"');

        return view('laporan.bulan.online.laporan_pendaftaran_januari',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_februari_online()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="February" and `jalurpendaftaran`="Online"');

        return view('laporan.bulan.online.laporan_pendaftaran_februari',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_maret_online()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="March" and `jalurpendaftaran`="Online"');

        return view('laporan.bulan.online.laporan_pendaftaran_maret',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_april_online()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="April" and `jalurpendaftaran`="Online"');

        return view('laporan.bulan.online.laporan_pendaftaran_april',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_mei_online()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="May" and `jalurpendaftaran`="Online"');

        return view('laporan.bulan.online.laporan_pendaftaran_mei',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_juni_online()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="June" and `jalurpendaftaran`="Online"');

        return view('laporan.bulan.online.laporan_pendaftaran_juni',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_juli_online()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="July" and `jalurpendaftaran`="Online"');

        return view('laporan.bulan.online.laporan_pendaftaran_juli',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_agustus_online()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="August" and `jalurpendaftaran`="Online"');

        return view('laporan.bulan.online.laporan_pendaftaran_agustus',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_september_online()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="September" and `jalurpendaftaran`="Online"');

        return view('laporan.bulan.online.laporan_pendaftaran_september',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_oktober_online()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="October" and `jalurpendaftaran`="Online"');

        return view('laporan.bulan.online.laporan_pendaftaran_oktober',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_november_online()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="November" and `jalurpendaftaran`="Online"');

        return view('laporan.bulan.online.laporan_pendaftaran_november',['siswa' => $siswa]);
    }

    public function laporan_pendaftaran_desember_online()
    {
        $siswa = DB::select('select `id`,`jalurpendaftaran`,`waktu`,`nama`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`desa`,`kecamatan`,`state`,`country` FROM `siswa` WHERE `bulanpendaftaran`="December" and `jalurpendaftaran`="Online"');

        return view('laporan.bulan.online.laporan_pendaftaran_desember',['siswa' => $siswa]);
    }

    public function laporan_smp1()
    {
        $siswa = DB::select('select `id`,`nama`,`status`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`tempatlahir`,`tanggallahir`,`nohp`,`desa`,`kecamatan`,`state`,`country`,`namaasalsekolah`,`alamatasalsekolah`,`namaayah`,`pendidikanayah`,`pekerjaanayah`,`namaibu`,`pendidikanibu`,`pekerjaanibu`,`nisn`,`kk`,`nik`,`nokip` FROM `siswa` WHERE `jenjang`="SMP 1" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.jenjang.laporan_smp1',['siswa' => $siswa]);
    }

    public function laporan_mts()
    {
        $siswa = DB::select('select `id`,`nama`,`status`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`tempatlahir`,`tanggallahir`,`nohp`,`desa`,`kecamatan`,`state`,`country`,`namaasalsekolah`,`alamatasalsekolah`,`namaayah`,`pendidikanayah`,`pekerjaanayah`,`namaibu`,`pendidikanibu`,`pekerjaanibu`,`nisn`,`kk`,`nik`,`nokip` FROM `siswa` WHERE `jenjang`="MTs" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.jenjang.laporan_mts',['siswa' => $siswa]);
    }

    public function laporan_smk()
    {
        $siswa = DB::select('select `id`,`nama`,`status`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`tempatlahir`,`tanggallahir`,`nohp`,`desa`,`kecamatan`,`state`,`country`,`namaasalsekolah`,`alamatasalsekolah`,`namaayah`,`pendidikanayah`,`pekerjaanayah`,`namaibu`,`pendidikanibu`,`pekerjaanibu`,`nisn`,`kk`,`nik`,`nokip`,`alumni` FROM `siswa` WHERE `jenjang`="SMK" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.jenjang.laporan_smk',['siswa' => $siswa]);
    }

    public function laporan_ma()
    {
        $siswa = DB::select('select `id`,`nama`,`status`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`tempatlahir`,`tanggallahir`,`nohp`,`desa`,`kecamatan`,`state`,`country`,`namaasalsekolah`,`alamatasalsekolah`,`namaayah`,`pendidikanayah`,`pekerjaanayah`,`namaibu`,`pendidikanibu`,`pekerjaanibu`,`nisn`,`kk`,`nik`,`nokip`,`alumni` FROM `siswa` WHERE `jenjang`="MA" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.jenjang.laporan_ma',['siswa' => $siswa]);
    }    

    public function laporan_smp2()
    {
        $siswa = DB::select('select `id`,`nama`,`status`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`tempatlahir`,`tanggallahir`,`nohp`,`desa`,`kecamatan`,`state`,`country`,`namaasalsekolah`,`alamatasalsekolah`,`namaayah`,`pendidikanayah`,`pekerjaanayah`,`namaibu`,`pendidikanibu`,`pekerjaanibu`,`nisn`,`kk`,`nik`,`nokip` FROM `siswa` WHERE `jenjang`="SMP 2" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.jenjang.laporan_smp2',['siswa' => $siswa]);
    }

    public function laporan_mahadaly()
    {
        $siswa = DB::select('select `id`,`nama`,`status`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`tempatlahir`,`tanggallahir`,`nohp`,`desa`,`kecamatan`,`state`,`country`,`namaasalsekolah`,`alamatasalsekolah`,`namaayah`,`pendidikanayah`,`pekerjaanayah`,`namaibu`,`pendidikanibu`,`pekerjaanibu`,`nisn`,`kk`,`nik`,`nokip`,`alumni` FROM `siswa` WHERE `jenjang`="Mahad Aly" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.jenjang.laporan_mahadaly',['siswa' => $siswa]);
    }   

    public function laporan_alumni()
    {
        $siswa = DB::select('select * FROM `siswa`');

        return view('laporan.jenjang.laporan_alumni',['siswa' => $siswa]);
    }

    public function laporan_alumni_ke_smk()
    {
        $siswa = DB::select('select `namaasalsekolah`,`id`,`nama`,`status`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`tempatlahir`,`tanggallahir`,`nohp`,`desa`,`kecamatan`,`state`,`country`,`namaasalsekolah`,`alamatasalsekolah`,`namaayah`,`pendidikanayah`,`pekerjaanayah`,`namaibu`,`pendidikanibu`,`pekerjaanibu`,`nisn`,`kk`,`nik`,`nokip`,`alumni` FROM `siswa` WHERE `jenjang`="SMK" and `alumni`="Alumni Aska" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.jenjang.laporan_alumni_ke_smk',['siswa' => $siswa]);
    }

    public function laporan_alumni_ke_ma()
    {
        $siswa = DB::select('select `namaasalsekolah`, `id`,`nama`,`status`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`tempatlahir`,`tanggallahir`,`nohp`,`desa`,`kecamatan`,`state`,`country`,`namaasalsekolah`,`alamatasalsekolah`,`namaayah`,`pendidikanayah`,`pekerjaanayah`,`namaibu`,`pendidikanibu`,`pekerjaanibu`,`nisn`,`kk`,`nik`,`nokip`,`alumni` FROM `siswa` WHERE `jenjang`="MA" and `alumni`="Alumni Aska" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.jenjang.laporan_alumni_ke_ma',['siswa' => $siswa]);
    }

    public function laporan_alumni_ke_mahadaly()
    {
        $siswa = DB::select('select `namaasalsekolah`,`id`,`nama`,`status`,`jalurpendaftaran`,`jenjang`,`prodi`,`fasilitas`,`jeniskelamin`,`tempatlahir`,`tanggallahir`,`nohp`,`desa`,`kecamatan`,`state`,`country`,`namaasalsekolah`,`alamatasalsekolah`,`namaayah`,`pendidikanayah`,`pekerjaanayah`,`namaibu`,`pendidikanibu`,`pekerjaanibu`,`nisn`,`kk`,`nik`,`nokip`,`alumni` FROM `siswa` WHERE `jenjang`="Mahad Aly" and `alumni`="Alumni Aska" and NOT `jalurpendaftaran`="Santri Lama"');

        return view('laporan.jenjang.laporan_alumni_ke_mahadaly',['siswa' => $siswa]);
    }

}
