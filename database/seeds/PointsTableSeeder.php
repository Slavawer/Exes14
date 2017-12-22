<?php

use Illuminate\Database\Seeder;

class PointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            for ($m = 1; $m <= 10; $m++) {
            for ($i = 1; $i <= mt_rand(1, 10); $i++) {
                $timestamp = mt_rand(1, time());
                $randomDate = date("d M Y", $timestamp);
                DB::table('points')->insert([
                    'points' => mt_rand(1, 5),
                    'members_id' => $m,
                    'data' => $randomDate
                ]);
            }
        }
    }
}
