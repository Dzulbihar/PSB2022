<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiayaAwalMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biaya_awal_masuk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id');
            $table->string('jalurpendaftaran');
            $table->string('jenjang');
            $table->string('nama');
            $table->string('fasilitas');
            $table->string('jeniskelamin');

            $table->date('waktu');
            $table->integer('biaya');
            $table->string('registrasi');
            $table->string('lunas');

            $table->string('upload');
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
        Schema::dropIfExists('biaya_awal_masuk');
    }
}
