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
        Schema::create('menu_review', function (Blueprint $table) {
            $table->id();
            $table->timestamp('posted_at');
            $table->string('poster_name');
            $table->text('message');
            $table->unsignedBigInteger('menu_id');
            $table->enum('rating', [1, 2, 3, 4, 5]);

            $table->foreign('menu_id')->references('id')->on('menu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_review');
    }
};
