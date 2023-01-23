<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penitipan_uang extends Model
{
    use HasFactory;

	protected $table = 'penitipan_uang';
    protected $fillable = [
    	'siswa_id', 'nama', 'jenjang', 'kampus', 'fasilitas', 'jeniskelamin',
 		'tanggal', 'nabung', 'ambil', 'catatan'
    ];

            
    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }        
}
