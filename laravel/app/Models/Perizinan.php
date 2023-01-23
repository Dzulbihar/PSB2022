<?php

namespace App\Models;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perizinan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }
}
