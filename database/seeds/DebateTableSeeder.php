<?php

use Illuminate\Database\Seeder;

class DebateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(file_get_contents('database/debate_soloInserts.sql'));
    }
}
