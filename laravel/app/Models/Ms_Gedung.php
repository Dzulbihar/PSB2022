<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ms_Gedung extends Model
{
    use HasFactory;

    protected $table = 'ms_gedung';
    protected $fillable = [
    	'kab_kode'
    ];
    protected $primaryKey = 'kab_kode';
    public $incrementing = false;
    protected $keyType = 'string';    
}

