<?php

use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stations')->insert([
                ['name' => '广州'],
                ['name' => '深圳'],
                ['name' => '佛山'],
                ['name' => '珠海'],
            ]);
    }
}
