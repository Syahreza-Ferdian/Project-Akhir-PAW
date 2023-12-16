<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $chef_data = [
            [
                'id_chef' => 1,
                'nama' => 'Juna',
                'picture' => 'Chef1.jpg',
                'jabatan' => 'Head Chef',
                'short_desc' => 'Experienced chef with a passion for culinary arts.',
                'email' => 'juna1@example.com',
                'instagram' => 'junaa_1',
                'experience' => '10+ years in the culinary industry',
            ],
    
            [
                'id_chef' => 2,
                'nama' => 'Arnold',
                'picture' => 'Chef2.jpg',
                'jabatan' => 'Sous Chef',
                'short_desc' => 'Creative chef specializing in fusion cuisine.',
                'email' => 'arnold2@example.com',
                'instagram' => 'arnoold_2',
                'experience' => '8+ years in the culinary industry',
            ],
    
            [
                'id_chef' => 3,
                'nama' => 'Renatta',
                'picture' => 'Chef3.jpg',
                'jabatan' => 'Pastry Chef',
                'short_desc' => 'Talented pastry chef with a love for desserts.',
                'email' => 'renatta3@example.com',
                'instagram' => 'renattaa_3',
                'experience' => '12+ years in the culinary industry',
            ],
    
            [
                'id_chef' => 4,
                'nama' => 'Evan Mattew',
                'picture' => 'Chef4.jpg',
                'jabatan' => 'Grill Chef',
                'short_desc' => 'Expert in grilling and barbecue techniques.',
                'email' => 'evaann_4@example.com',
                'instagram' => 'evaann.4',
                'experience' => '9+ years in the culinary industry',
            ],
    
            [
                'id_chef' => 5,
                'nama' => 'Dan Rafalin',
                'picture' => 'Chef5.jpg',
                'jabatan' => 'Vegetarian Chef',
                'short_desc' => 'Passionate about creating delicious vegetarian dishes.',
                'email' => 'rafalindan5@example.com',
                'instagram' => 'rafalin_5',
                'experience' => '7+ years in the culinary industry',
            ],
    
            [
                'id_chef' => 6,
                'nama' => 'Diane Clarkson',
                'picture' => 'Chef6.jpg',
                'jabatan' => 'Seafood Chef',
                'short_desc' => 'Specializes in preparing mouthwatering seafood dishes.',
                'email' => 'dianee.c_06@example.com',
                'instagram' => 'dianee.c.6',
                'experience' => '11+ years in the culinary industry',
            ],
            [
                'id_chef' => 7,
                'nama' => 'Avroko',
                'picture' => 'Barista1.jpg',
                'jabatan' => 'Barista',
                'short_desc' => 'Skilled barista with expertise in coffee brewing.',
                'email' => 'avroko7@example.com',
                'instagram' => 'aavrokoo.07',
                'experience' => '5+ years in the coffee industry',
            ],
            [
                'id_chef' => 8,
                'nama' => 'Bob',
                'picture' => 'Barista2.jpg',
                'jabatan' => 'Barista',
                'short_desc' => 'Passionate about creating delightful coffee experiences.',
                'email' => 'bob_08@example.com',
                'instagram' => 'bobb08',
                'experience' => '6+ years in the coffee industry',
            ],
            [
                'id_chef' => 9,
                'nama' => 'Gabrielle',
                'picture' => 'Barista3.jpg',
                'jabatan' => 'Barista',
                'short_desc' => 'Crafting amazing coffee beverages with precision.',
                'email' => 'gabbb09@example.com',
                'instagram' => 'gabri09',
                'experience' => '7+ years in the coffee industry',
            ],
            [
                'id_chef' => 10,
                'nama' => 'Sun Gyun',
                'picture' => 'Barista4.jpg',
                'jabatan' => 'Barista',
                'short_desc' => 'Enthusiastic barista with a love for coffee art.',
                'email' => 'leesungyun10@example.com',
                'instagram' => 'sungyun-10',
                'experience' => '8+ years in the coffee industry',
            ],
            [
                'id_chef' => 11,
                'nama' => 'Suho',
                'picture' => 'Barista5.jpg',
                'jabatan' => 'Barista',
                'short_desc' => 'Creating coffee masterpieces with a touch of creativity.',
                'email' => 'suho11@example.com',
                'instagram' => 'suhoo_11',
                'experience' => '9+ years in the coffee industry',
            ],
            [
                'id_chef' => 12,
                'nama' => 'Kang Jun',
                'picture' => 'Barista6.jpg',
                'jabatan' => 'Barista',
                'short_desc' => 'Dedicated to delivering the perfect cup of coffee every time.',
                'email' => 'kangjun@example.com',
                'instagram' => 'seo_kang.joon.12',
                'experience' => '10+ years in the coffee industry',
            ],
        ];
        DB::table('chef')->insert($chef_data);
    }
}
