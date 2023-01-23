<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mst_kabupaten extends Model
{
    use HasFactory;

    protected $table = 'mst_kabupaten';
    protected $fillable = [
    	'kabupaten',
        'provinsi_id'
    ];
    protected $primaryKey = 'kabupaten';
    public $incrementing = false;
    protected $keyType = 'string';    
}
