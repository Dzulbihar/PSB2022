<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomor_pembayaran extends Model
{
    use HasFactory;

	protected $table = 'nomor_pembayaran';
    protected $fillable = ['nomor'];    
}
