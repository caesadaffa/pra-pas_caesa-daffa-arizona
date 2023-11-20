<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sayurs', function (Blueprint $table) {
            $table->id();
            $table->string('namaSayur');
            $table->string('warnaSayur');
            $table->string('kualitasSayur');
            $table->integer('hargaSayur');
            $table->date('tanggalExpired');
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
        Schema::dropIfExists('sayurs');
    }
};
