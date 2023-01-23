<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biaya extends Model
{
    use HasFactory;

/////////////////////////////////////////////////////////

	protected $table = 'biaya';
    protected $fillable = ['smpreg1', 'smpnonreg1', 'smpreg2', 'smpnonreg2', 'mtsreg1', 'mtsnonreg1', 'mtsreg2', 'mtsnonreg2', 'smkreg1', 'smknonreg1', 'smkreg2', 'smknonreg2', 'mareg1', 'manonreg1', 'mareg2', 'manonreg2',];

/////////////////////////////////////////////////////////

	public function siswa()
	{
		return $this->hasMany(Siswa::class);
	}

}
