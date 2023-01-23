<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrasiOnlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasi_online', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id');
            $table->string('jalurpendaftaran');
            $table->string('jenjang');
            $table->string('nama');
            $table->string('fasilitas');
            $table->string('jeniskelamin');

            $table->string('registrasi_online');
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
        Schema::dropIfExists('registrasi_online');
    }
}
