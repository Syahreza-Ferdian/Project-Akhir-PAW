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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('ID_RESERVASI');
            $table->string('NAMA');
            $table->string('NO_TELP');
            $table->integer('JUMLAH_ROMBONGAN');
            $table->date('TANGGAL');
            $table->time('JAM');
            $table->unsignedBigInteger('NOMOR_MEJA')->nullable(); 
            $table->timestamps();

            $table->foreign('NOMOR_MEJA')->references('NOMOR_MEJA')->on('MEJA');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
