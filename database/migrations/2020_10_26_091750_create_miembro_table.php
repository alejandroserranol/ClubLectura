<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiembroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miembro', function (Blueprint $table) {
            $table->string('dni', 11)->primary();
            $table->string('nombre', 45)->nullable($value = true);
            $table->string('apellido', 45)->nullable($value = true);
            $table->string('email', 45)->unique()->nullable($value = false);
            $table->string('telefono', 45)->nullable($value = true);
            $table->string('direccion', 250)->nullable($value = true);
            $table->tinyInteger('situacion_actual');
            $table->date('fecha_alta')->nullable($value = false);
            $table->date('fecha_baja')->nullable($value = true);
            $table->timestamps();
        });
        
        DB::statement('ALTER TABLE `miembro` MODIFY COLUMN `situacion_actual` TINYINT(1) DEFAULT(1)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('miembro');
    }
}
