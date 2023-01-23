<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caption_printdatadiri extends Model
{
    use HasFactory;

	protected $table = 'caption_printdatadiri';
    protected $fillable = ['caption'];
}
