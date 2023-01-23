<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caption_proses_pendaftaran_online extends Model
{
    use HasFactory;

	protected $table = 'caption_proses_pendaftaran_online';
    protected $fillable = [
    		'caption'
        ];     
}
