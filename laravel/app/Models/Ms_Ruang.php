<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ms_Ruang extends Model
{
    use HasFactory;

    protected $table = 'ms_ruang';
    protected $fillable = [
    	'id',
    	'kec_kode',
        'kec_kab'
    ];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';     
}
