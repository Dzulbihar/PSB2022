<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;

//////////////////////////////////////////////////////////

	protected $table = 'siswa';
    protected $fillable = 
    		['user_id',
            'nama', 'fasilitas', 'jeniskelamin',
            'tempatlahir', 'tanggallahir', 'nohp',
            'desa', 'kecamatan', 'state', 'country',
            'namaasalsekolah', 'alamatasalsekolah',
            'namaayah', 'pendidikanayah', 'pekerjaanayah',
            'namaibu', 'pendidikanibu', 'pekerjaanibu',
            'nisn', 'kk', 'nik', 'nokip', 'foto', 'foto_registrasi_online',
            'kampus', 'gedung', 'kamar', 'jenjang', 'prodi', 'kelas', 'ruang',
            'status', 'jalurpendaftaran', 
            'bulanpendaftaran', 'tahunpendaftaran', 'alumni', 'waktu'
        	];

//////////////////////////////////////////////////////////

	public function getFoto()
	{
		if(!$this->foto){
			return asset('images/default.jpg');
		}			
		return asset('images/' .$this->foto);
	}

	public function getFoto_registrasi_online()
	{
		if(!$this->foto_registrasi_online){
			return asset('images/default.jpg');
		}			
		return asset('images/' .$this->foto_registrasi_online);
	}

//////////////////////////////////////////////////////////

	
	// relasi ke perizinan
	public function perizinan(){
		return $this->hasMany(Perizinan::class);
	}

	// relasi ke biaya_awal_masuk
	public function biaya_awal_masuk(){
		return $this->hasMany(Biaya_awal_masuk::class);
	}

	// relasi ke upload_syarat_daftar_online
	public function upload_syarat_daftar_online(){
		return $this->hasMany(Upload_syarat_daftar_online::class);
	}

	// relasi ke prestasi
	public function prestasi(){
		return $this->hasMany(Prestasi::class);
	}

//prestasi
	public function skorPenghargaan()
	{
		//ambil nilai rata2
		$total = 0;
		$hitung = 0;
		foreach($this->prestasi as $siswa){
			$total += $siswa->skor;
			$hitung++;;
		}

		return round($total);
		//hitung rata2 nilai
		//return round($total/$hitung);		
	}

	// relasi ke pelanggaran
	public function pelanggaran(){
		return $this->hasMany(Pelanggaran::class);
	}

//pelanggaran
	public function skorSanksi()
	{
		//ambil nilai rata2
		$total = 0;
		$hitung = 0;
		foreach($this->pelanggaran as $siswa){
			$total += $siswa->skor;
			$hitung++;;
		}

		return round($total);
		//hitung rata2 nilai
		//return round($total/$hitung);		
	}

	// relasi ke penitipan_uang
	public function penitipan_uang(){
		return $this->hasMany(Penitipan_uang::class);
	}

	public function skorNabung()
	{
		//ambil nilai rata2
		$totalnabung = 0;
		$totalambil = 0;
		$hitung = 0;
		foreach($this->penitipan_uang as $siswa){
			$totalnabung += $siswa->nabung;
			$hitung++;;
		}

		return round($totalnabung);
	}

	public function skorAmbil()
	{
		//ambil nilai rata2
		$totalnabung = 0;
		$totalambil = 0;
		$hitung = 0;
		foreach($this->penitipan_uang as $siswa){
			$totalambil += $siswa->ambil;
			$hitung++;;
		}

		return round($totalambil);
	}



}
