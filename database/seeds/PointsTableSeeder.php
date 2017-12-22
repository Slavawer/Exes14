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

        for ($i = 1; $i <= mt_rand(1, 10); $i++) {
            $timestamp = mt_rand(1, time());
            $randomDate = date("d M Y", $timestamp);
            DB::table('points')->insert([
                'points' => mt_rand(1, 5),
                'members_id' => "1",
                'data' => $randomDate
            ]);
        }
        for ($i = 1; $i <= mt_rand(1, 10); $i++) {
            $timestamp = mt_rand(1, time());
            $randomDate = date("d M Y", $timestamp);
            DB::table('points')->insert([
                'points' => mt_rand(1, 5),
                'members_id' => "2",
                'data' => $randomDate
            ]);
        }
        for ($i = 1; $i <= mt_rand(1, 10); $i++) {
            $timestamp = mt_rand(1, time());
            $randomDate = date("d M Y", $timestamp);
            DB::table('points')->insert([
                'points' => mt_rand(1, 5),
                'members_id' => "3",
                'data' => $randomDate
            ]);
        }
        for ($i = 1; $i <= mt_rand(1, 10); $i++) {
            $timestamp = mt_rand(1, time());
            $randomDate = date("d M Y", $timestamp);
            DB::table('points')->insert([
                'points' => mt_rand(1, 5),
                'members_id' => "4",
                'data' => $randomDate
            ]);
        }
        for ($i = 1; $i <= mt_rand(1, 10); $i++) {
            $timestamp = mt_rand(1, time());
            $randomDate = date("d M Y", $timestamp);
            DB::table('points')->insert([
                'points' => mt_rand(1, 5),
                'members_id' => "5",
                'data' => $randomDate
            ]);
        }
        for ($i = 1; $i <= mt_rand(1, 10); $i++) {
            $timestamp = mt_rand(1, time());
            $randomDate = date("d M Y", $timestamp);
            DB::table('points')->insert([
                'points' => mt_rand(1, 5),
                'members_id' => "6",
                'data' => $randomDate
            ]);
        }
        for ($i = 1; $i <= mt_rand(1, 10); $i++) {
            $timestamp = mt_rand(1, time());
            $randomDate = date("d M Y", $timestamp);
            DB::table('points')->insert([
                'points' => mt_rand(1, 5),
                'members_id' => "7",
                'data' => $randomDate
            ]);
        }
        for ($i = 1; $i <= mt_rand(1, 10); $i++) {
            $timestamp = mt_rand(1, time());
            $randomDate = date("d M Y", $timestamp);
            DB::table('points')->insert([
                'points' => mt_rand(1, 5),
                'members_id' => "8",
                'data' => $randomDate
            ]);
        }
        for ($i = 1; $i <= mt_rand(1, 10); $i++) {
            $timestamp = mt_rand(1, time());
            $randomDate = date("d M Y", $timestamp);
            DB::table('points')->insert([
                'points' => mt_rand(1, 5),
                'members_id' => "9",
                'data' => $randomDate
            ]);
        }
        for ($i = 1; $i <= mt_rand(1, 10); $i++) {
            $timestamp = mt_rand(1, time());
            $randomDate = date("d M Y", $timestamp);
            DB::table('points')->insert([
                'points' => mt_rand(1, 5),
                'members_id' => "10",
                'data' => $randomDate
            ]);
        }
    }
}
