<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('institucions', function (Blueprint $table) {
            $table->id();


            $table->string('ins_num_cedes',2);
            $table->string('ins_num_docentes',2);
            $table->string('ins_anios_actividad',2);
            $table->string('ins_num_estudiantes',2);
            $table->string('ins_sitio_web',50);
            $table->string('ins_nombre',50);
            $table->string('ins_direccion',50);
            $table->string('ins_correo',50);
            $table->string('ins_celular',20);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institucions');
    }
};
