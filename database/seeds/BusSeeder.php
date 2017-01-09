<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bus')->insert([
            'no' => '户A SB848',
            'longitude' => '86.925278',
            'latitude' > '27.988056'
        ]);
    }
}
