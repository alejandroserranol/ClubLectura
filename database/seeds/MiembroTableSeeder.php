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
                'dni'=>$faker->unique(true)->ean8,
                'nombre'=>$faker->name,
                'apellido'=>$faker->lastname,
                'email'=>$faker->unique(true)->email,
                'telefono'=>$faker->unique(true)->e164PhoneNumber,
                'direccion'=>$faker->address,
                'situacion_actual'=>1,
                'fecha_alta'=>$faker->time($format = 'Y-m-d', $max = 'now'),
                'fecha_baja'=>$faker->unique(true)->optional(0)->word
            ])
            );
        }
    }
}
