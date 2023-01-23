<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biaya_pendaftaran extends Model
{
    use HasFactory;

	protected $table = 'biaya_pendaftaran';
    protected $fillable = ['uang_sebanyak','terbilang'];     
}
