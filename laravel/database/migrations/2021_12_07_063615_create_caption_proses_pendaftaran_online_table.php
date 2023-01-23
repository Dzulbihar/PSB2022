<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaptionProsesPendaftaranOnlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caption_proses_pendaftaran_online', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->string('formulir');
            $table->string('tes_online');
            $table->string('materi_tes');
            $table->string('pengumuman');
            $table->string('registrasi');
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
        Schema::dropIfExists('caption_proses_pendaftaran_online');
    }
}
