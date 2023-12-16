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
        Schema::create('chef', function (Blueprint $table) {
            $table->id();
            $table->string("id_chef");
            $table->string('nama');
            $table->string('picture');
            $table->string('jabatan');
            $table->string('short_desc');
            $table->string('email');
            $table->string('instagram');
            $table->string('experience');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chef');
    }
};
