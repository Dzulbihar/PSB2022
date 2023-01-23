<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiayaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biaya', function (Blueprint $table) {
            $table->id();
            $table->string('smpreg1');
            $table->string('smpnonreg1');
            $table->string('smpreg2');
            $table->string('smpnonreg2');
            $table->string('mtsreg1');
            $table->string('mtsnonreg1');
            $table->string('mtsreg2');
            $table->string('mtsnonreg2');
            $table->string('smkreg1');
            $table->string('smknonreg1');
            $table->string('smkreg2');
            $table->string('smknonreg2');
            $table->string('mareg1');
            $table->string('manonreg1');
            $table->string('mareg2');
            $table->string('manonreg2');

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
        Schema::dropIfExists('biaya');
    }
}
