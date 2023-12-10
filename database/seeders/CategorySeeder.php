<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            ['nama_kategori' => 'Appetizer'],
            ['nama_kategori' => 'Main Course'],
            ['nama_kategori' => 'Dessert']
        ];

        DB::table('category')->insert($data);
    }
}
