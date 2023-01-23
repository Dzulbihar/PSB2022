<?php

namespace App\Imports;
use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class SantriImport implements ToModel, WithStartRow, WithCustomCsvSettings
{
    public function startRow(): int
    {
        return 2;
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }    
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Siswa([
            
            'nama' => $row[1],
            'fasilitas' => $row[2],
            'jeniskelamin' => $row[3],

            'tempatlahir' => $row[4],
            // 'tanggallahir' => $row[5],
            'nohp' => $row[6],

            'desa' => $row[7],
            'kecamatan' => $row[8],
            'state' => $row[9],
            'country' => $row[10],

            'namaasalsekolah' => $row[11],
            'alamatasalsekolah' => $row[12],

            'namaayah' => $row[13],
            'pendidikanayah' => $row[14],
            'pekerjaanayah' => $row[15],

            'namaibu' => $row[16],
            'pendidikanibu' => $row[17],
            'pekerjaanibu' => $row[18],

            'nisn' => $row[19],
            'kk' => $row[20],
            'nik' => $row[21],
            'nokip' => $row[22],

            'kampus' => $row[23],
            'gedung' => $row[24],
            'kamar' => $row[25],
            'jenjang' => $row[26],
            'kelas' => $row[27],
            'ruang' => $row[28],

            'jalurpendaftaran' => $row[29],

        ]);
    }
}
