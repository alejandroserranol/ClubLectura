<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debate', function (Blueprint $table) {
            $table->string('codigo', 15)->primary();
            $table->string('curso', 11)->nullable($value = false);
            $table->string('genero', 15)->nullable($value = false);           
            $table->string('libro', 45)->nullable($value = true);
            $table->date('fecha')->nullable($value = true);
            $table->timestamps();

            $table->foreign('genero')->references('genero')->on('grupo')->onDelete('cascade');        
            $table->foreign('libro')->references('isbn')->on('libro')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('debate');
    }
}
