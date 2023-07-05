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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();


            $table->string('dc_grado_academico',30);
            $table->string('dc_anios_trabajo',2);
            $table->string('dc_especialidad',40);
            $table->string('dc_grado_estudios',1);
            $table->unsignedBigInteger('dc_ps_id');
            $table->foreign('dc_ps_id')->references('id')->on('personas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
