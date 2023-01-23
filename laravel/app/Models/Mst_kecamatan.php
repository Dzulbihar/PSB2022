<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mst_kecamatan extends Model
{
    use HasFactory;

    protected $table = 'mst_kecamatan';
    protected $fillable = [
    	'kecamatan',
        'kabupaten_id'
    ];
    // protected $primaryKey = 'kecamatan';
    public $incrementing = false;
    protected $keyType = 'string';     
}
