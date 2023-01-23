<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer_bank extends Model
{
    use HasFactory;

	protected $table = 'transfer_bank';
    protected $fillable = ['transfer'];      
}
