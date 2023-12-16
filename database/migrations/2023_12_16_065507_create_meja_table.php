<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        if (!Schema::hasTable('Meja')) {
            Schema::create('Meja', function (Blueprint $table) {
                $table->id('NOMOR_MEJA');
                $table->integer('JUMLAH_KURSI');
                $table->tinyInteger('TERISI')->default(0);
                $table->date('TANGGAL')->nullable();
                $table->time('JAM')->nullable();
                $table->timestamps();
            });

            for ($i = 1; $i <= 10; $i++) {
                $this->carinomor($i, 2);
            }

            for ($i = 11; $i <= 20; $i++) {
                $this->carinomor($i, 4); 
            }

            for ($i = 21; $i <= 25; $i++) {
                $this->carinomor($i, 6); 
            }

            for ($i = 26; $i <= 30; $i++) {
                $this->carinomor($i, 8); 
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Meja');
    }

    // Add this custom function
    private function carinomor($nomorMeja, $jumlahKursi)
    {
        DB::table('Meja')->insert([
            'NOMOR_MEJA' => $nomorMeja,
            'JUMLAH_KURSI' => $jumlahKursi,
            'TERISI' => false,
            'TANGGAL' => null, 
            'JAM' => null, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
};
