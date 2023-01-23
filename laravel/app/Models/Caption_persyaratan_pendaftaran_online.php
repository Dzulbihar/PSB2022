<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caption_persyaratan_pendaftaran_online extends Model
{
    use HasFactory;

	protected $table = 'caption_persyaratan_pendaftaran_online';
    protected $fillable = ['caption']; 
}
