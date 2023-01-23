<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');

            $table->string('nama');
            $table->string('fasilitas');
            $table->string('jeniskelamin');

            $table->string('tempatlahir');
            $table->string('tanggallahir');
            $table->string('nohp');

            $table->string('desa');
            $table->string('kecamatan');
            $table->string('state');
            $table->string('country');

            $table->string('namaasalsekolah');
            $table->string('alamatasalsekolah');

            $table->string('namaayah');
            $table->string('pendidikanayah');
            $table->string('pekerjaanayah');

            $table->string('namaibu');
            $table->string('pendidikanibu');
            $table->string('pekerjaanibu');

            $table->string('nisn')->nullable();
            $table->string('kk')->nullable();
            $table->string('nik')->nullable();
            $table->string('nokip')->nullable();
            $table->string('foto')->nullable();

            $table->string('kampus')->nullable();
            $table->string('gedung')->nullable();
            $table->string('kamar')->nullable();
            $table->string('jenjang')->nullable();
            $table->string('prodi')->nullable();
            $table->string('kelas')->nullable();
            $table->string('ruang')->nullable();

            $table->string('status')->nullable();
            $table->string('jalurpendaftaran')->nullable();

            $table->string('bulanpendaftaran')->nullable();
            $table->string('tahunpendaftaran')->nullable();
            $table->string('alumni')->nullable();
            $table->string('waktu')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
