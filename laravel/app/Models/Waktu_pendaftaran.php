<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waktu_pendaftaran extends Model
{
    use HasFactory;

	protected $table = 'waktu_pendaftaran';
    protected $fillable = ['waktu_pendaftaran'];    
}
