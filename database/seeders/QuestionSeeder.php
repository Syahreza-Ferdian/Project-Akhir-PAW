<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
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
            [
                'question'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, beatae.',
                'answer'    => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi nam ea optio reiciendis illo, voluptatem qui quis quas cum mollitia.'
            ],
            [
                'question'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, beatae.',
                'answer'    => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi nam ea optio reiciendis illo, voluptatem qui quis quas cum mollitia.'
            ],
            [
                'question'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, beatae.',
                'answer'    => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi nam ea optio reiciendis illo, voluptatem qui quis quas cum mollitia.'
            ],
            [
                'question'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, beatae.',
                'answer'    => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi nam ea optio reiciendis illo, voluptatem qui quis quas cum mollitia.'
            ],
        ];

        DB::table('question')->insert($data);
    }
}
