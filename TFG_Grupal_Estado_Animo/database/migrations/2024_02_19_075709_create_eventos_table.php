<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id('ID_Evento');
            $table->unsignedBigInteger('ID_Estado');
            $table->unsignedBigInteger('ID_Usuario');
            $table->string('Franja_horaria');
            $table->date('Fecha');
            $table->unsignedBigInteger('ID_Actividad');
            $table->timestamps();

            $table->foreign('ID_Estado')->references('id')->on('estados');
            $table->foreign('ID_Usuario')->references('id')->on('usuarios');
            $table->foreign('ID_Actividad')->references('id')->on('actividades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};
