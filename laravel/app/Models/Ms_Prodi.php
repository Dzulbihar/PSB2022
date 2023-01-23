<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ms_Prodi extends Model
{
    use HasFactory;

    protected $table = 'ms_prodi';
    protected $fillable = [
    	'id',
    	'kec_kode',
        'kec_kab'
    ];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';       
}
