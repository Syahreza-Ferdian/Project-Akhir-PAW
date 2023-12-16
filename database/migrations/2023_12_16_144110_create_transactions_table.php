<?php

// database/migrations/xxxx_xx_xx_create_transactions_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan');
            $table->unsignedBigInteger('nomor_meja');
            $table->unsignedBigInteger('total_price');
            $table->string('order_id');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
