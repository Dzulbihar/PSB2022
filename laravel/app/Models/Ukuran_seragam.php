<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukuran_seragam extends Model
{
    use HasFactory;

	protected $table = 'ukuran_seragam';
    protected $fillable = [
    	'jenjang', 'nama', 'jeniskelamin','seragam'
    ];
            
}
