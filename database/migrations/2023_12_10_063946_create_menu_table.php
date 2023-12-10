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
        Schema::create('menu', function (Blueprint $table) {
            // $table->timestamps();
            $table->id();
            $table->string('nama');
            $table->string('short_desc');
            $table->unsignedBigInteger('id_kategori');
            $table->string('tags');
            $table->text('long_desc');
            $table->string('picture');
            $table->double('harga');

            $table->foreign('id_kategori')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
};
