<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuReviewSeeder extends Seeder
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
                'posted_at'     => Carbon::now()->format('Y-m-d H:i:s'),
                'poster_name'   => 'Syahreza',
                'message'       => 'Sangat enak',
                'menu_id'       => 1,
                'rating'        => 5
            ],
            [
                'posted_at'     => Carbon::now()->format('Y-m-d H:i:s'),
                'poster_name'   => 'Shaa',
                'message'       => 'Sangat enak',
                'menu_id'       => 1,
                'rating'        => 5
            ],
            [
                'posted_at'     => Carbon::now()->format('Y-m-d H:i:s'),
                'poster_name'   => 'Syahreza',
                'message'       => 'Sangat enak',
                'menu_id'       => 2,
                'rating'        => 5
            ],
        ];

        DB::table('menu_review')->insert($data);
    }
}
