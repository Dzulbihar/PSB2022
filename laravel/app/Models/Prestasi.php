<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;

	protected $table = 'prestasi';
    protected $fillable = [
    	'siswa_id', 'nama', 'jenjang', 'kampus', 'fasilitas', 'jeniskelamin',
 		'tanggal', 'kategori', 'tingkat', 'catatan','skor'
    ];

            
    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }      
}
