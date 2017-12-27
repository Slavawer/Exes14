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
        $sql = DB::table('members')->select('id')->get();
        foreach ($sql as $members) {
            ['direction_id' => $members->id];
            factory(App\Point::class, mt_rand(1, 5))->create(['members_id' => $members->id]);
        }
    }
}