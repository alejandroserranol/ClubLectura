<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerteneceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertenece', function (Blueprint $table) {
            $table->string('miembro', 11);
            $table->string('genero', 15);            
            $table->tinyInteger('coordinador');
            $table->timestamps();

            $table->primary(['genero', 'miembro']);

            $table->foreign('miembro')->references('dni')->on('miembro')->onDelete('cascade');        
            $table->foreign('genero')->references('genero')->on('grupo')->onDelete('cascade');
        });
                
        DB::statement('ALTER TABLE `pertenece` MODIFY COLUMN `coordinador` TINYINT(1) DEFAULT(0)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertenece');
    }
}
