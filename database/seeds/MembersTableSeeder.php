<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            factory(App\Member::class, 2)->create(['direction_id' => $i]);
        }
    }
}