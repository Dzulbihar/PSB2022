<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biaya_awal_masuk extends Model
{
    use HasFactory;

	protected $table = 'biaya_awal_masuk';
    protected $fillable = [
    	'siswa_id', 'jalurpendaftaran', 'jenjang', 'nama', 'fasilitas', 'jeniskelamin',
 		'waktu', 'biaya', 'registrasi', 'lunas','upload'
    ];


	public function getUpload()
	{
		if(!$this->upload){
			return asset('images/default.jpg');
		}			
		return asset('images/' .$this->upload);
	}
            
    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }

}
