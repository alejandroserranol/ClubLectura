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
        $genero01 = "Dramático";
        $genero02 = "Lírico";
        $genero03 = "Narrativo";
        $genero04 = "De baja";

        //crea 100 miembros falsos
        for($i=0; $i<100; $i++){
            $dni = $faker->unique(true)->ean8;

            if($i <25){
                App\miembro::create(([
                    'dni'=>$dni,
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

                App\pertenece::create(([
                    'miembro'=>$dni,
                    'genero'=>$genero01,
                    'coordinador'=>0,
                ])
                );
            }

            if($i >=25 && $i < 50){
                App\miembro::create(([
                    'dni'=>$dni,
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

                App\pertenece::create(([
                    'miembro'=>$dni,
                    'genero'=>$genero02,
                    'coordinador'=>0,
                ])
                );
            }

            if($i >=50 && $i < 75){
                App\miembro::create(([
                    'dni'=>$dni,
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

                App\pertenece::create(([
                    'miembro'=>$dni,
                    'genero'=>$genero03,
                    'coordinador'=>0,
                ])
                );
            }

            if($i >=75){

                App\miembro::create(([
                    'dni'=>$dni,
                    'nombre'=>$faker->name,
                    'apellido'=>$faker->lastname,
                    'email'=>$faker->unique(true)->email,
                    'telefono'=>$faker->unique(true)->e164PhoneNumber,
                    'direccion'=>$faker->address,
                    'situacion_actual'=>0,
                    'fecha_alta'=>$faker->time($format = 'Y-m-d', $max = 'now'),
                    'fecha_baja'=>$faker->time($format = 'Y-m-d', $max = 'now')
                ])
                );

                App\pertenece::create(([
                    'miembro'=>$dni,
                    'genero'=>$genero04,
                    'coordinador'=>0,
                ])
                );
            }
        }
    }
}
