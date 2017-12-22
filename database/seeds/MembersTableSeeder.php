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
        DB::table('members')->insert(
            [
                'firstname' => "Первый",
                'lastname' => "Первов",
                'avatar' => "1",
                'info' => "Инфо",
                'status' => "В игре",
                'direction_id' => "1"
            ]);
        DB::table('members')->insert(
            [
                'firstname' => "Второй",
                'lastname' => "Первов",
                'avatar' => "2",
                'info' => "Инфо2",
                'status' => "Выбыл",
                'direction_id' => "1"
            ]);
        DB::table('members')->insert(
            [
                'firstname' => "Второй",
                'lastname' => "Первов",
                'avatar' => "3",
                'info' => "Инфо3",
                'status' => "В игре",
                'direction_id' => "2"
            ]);
        DB::table('members')->insert(
            [
                'firstname' => "Второй",
                'lastname' => "Второв",
                'avatar' => "4",
                'info' => "Инфо4",
                'status' => "Выбыл",
                'direction_id' => "2" //
            ]);
        DB::table('members')->insert(
            [
                'firstname' => "Первый",
                'lastname' => "Третьев",
                'avatar' => "5",
                'info' => "Инфо5",
                'status' => "В игре",
                'direction_id' => "3"
            ]);
        DB::table('members')->insert(
            [
                'firstname' => "Третьев",
                'lastname' => "Первов",
                'avatar' => "6",
                'info' => "Инфо6",
                'status' => "В игре",
                'direction_id' => "3"
            ]);
        DB::table('members')->insert(
            [
                'firstname' => "Первый2",
                'lastname' => "Первов2",
                'avatar' => "7",
                'info' => "Инфо7",
                'status' => "В игре",
                'direction_id' => "4"
            ]);
        DB::table('members')->insert(
            [
                'firstname' => "Первый33",
                'lastname' => "Первов33",
                'avatar' => "8",
                'info' => "Инфо8",
                'status' => "Выбыл",
                'direction_id' => "4"
            ]);
        DB::table('members')->insert(
            [
                'firstname' => "Первый44",
                'lastname' => "Первов44",
                'avatar' => "9",
                'info' => "Инфо9",
                'status' => "Выбыл",
                'direction_id' => "5"
            ]);
        DB::table('members')->insert(
            [
                'firstname' => "Первый66",
                'lastname' => "Первов66",
                'avatar' => "10",
                'info' => "Инфо10",
                'status' => "В игре",
                'direction_id' => "5"
            ]);
    }
}
