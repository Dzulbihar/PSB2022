<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload_syarat_daftar_online extends Model
{
    use HasFactory;

	protected $table = 'upload_syarat_daftar_online';
    protected $fillable = ['siswa_id', 'jenjang', 'nama', 'AKTE', 'KK', 'FOTO'];  


	public function getAKTE()
	{
		if(!$this->AKTE){
			return asset('images/default.jpg');
		}			
		return asset('images/' .$this->AKTE);
	}

	public function getKK()
	{
		if(!$this->KK){
			return asset('images/default.jpg');
		}			
		return asset('images/' .$this->KK);
	}

	public function getFOTO()
	{
		if(!$this->FOTO){
			return asset('images/default.jpg');
		}			
		return asset('images/' .$this->FOTO);
	}

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }

}
