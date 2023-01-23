<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomor_operator extends Model
{
    use HasFactory;

	protected $table = 'nomor_operator';
    protected $fillable = ['nomor'];      
}
