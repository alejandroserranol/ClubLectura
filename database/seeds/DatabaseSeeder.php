<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //DB::unprepared(file_get_contents('database/grupo_soloInserts.sql'));

        //DB::unprepared(file_get_contents('database/libro_soloInserts.sql'));

        DB::unprepared(file_get_contents('database/miembro_soloInserts.sql'));

        DB::unprepared(file_get_contents('database/pertenece_soloInserts.sql'));
    }
}
