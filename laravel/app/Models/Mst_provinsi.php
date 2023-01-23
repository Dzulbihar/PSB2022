<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mst_provinsi extends Model
{
    use HasFactory;

    protected $table = 'mst_provinsi';
    protected $fillable = [
    	'provinsi'
    ];
    protected $primaryKey = 'provinsi';
    public $incrementing = false;
    protected $keyType = 'string';    
}
