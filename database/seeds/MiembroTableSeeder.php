<?php

use Illuminate\Database\Seeder;

class MiembroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('es_ES');

        //crea 100 miembros falsos
        for($i=0; $i<100; $i++){
            App\miembro::create(([
                'dni'=>$faker->ean8
            ])
            );
        }
    }
}
