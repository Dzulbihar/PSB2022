<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerizinansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perizinans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id');
            $table->string('keperluan');
            $table->string('catatan');
            $table->date('tgl_kembali');
            $table->integer('status');     // 0 = belum diverivikasi ,1 = sudah diverivikasi dan sedang masa izin, 2 sudah kembali
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
        Schema::dropIfExists('perizinans');
    }
}
