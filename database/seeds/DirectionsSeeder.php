<?php

use Illuminate\Database\Seeder;
use App\Direction;

class DirectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Direction::create([
            'title' => 'Frontend'
        ]);

        Direction::create([
            'title' => 'Backend'
        ]);

        Direction::create([
            'title' => 'Android'
        ]);
        Direction::create([
            'title' => 'iOS'
        ]);
        Direction::create([
            'title' => 'QA'
        ]);
    }
}