<?php

use Illuminate\Database\Seeder;

class LineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $station_ids = \App\Models\Station::lists('id')->all();
        $lines = [];
        foreach ($station_ids as $key => $start) {
            $station_ids_copy = $station_ids;
            array_splice($station_ids_copy, $key, 1);
            // var_export($rest);
            foreach ($station_ids_copy as $dest) {
                $lines[] = [
                    'start' => $start,
                    'end' => $dest,
                    'price' => mt_rand(200, 1000) / 10,
                ];
            }
        }
        \DB::table('lines')->insert($lines);
    }
}
