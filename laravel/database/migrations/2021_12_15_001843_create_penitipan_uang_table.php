<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenitipanUangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penitipan_uang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id');
            $table->string('nama');
            $table->string('jenjang');
            $table->string('kampus');
            $table->string('fasilitas');
            $table->string('jeniskelamin');

            $table->string('tanggal');
            $table->string('nabung');
            $table->string('ambil');
            $table->string('catatan');
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
        Schema::dropIfExists('penitipan_uang');
    }
}
