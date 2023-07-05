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
        Schema::create('egresados', function (Blueprint $table) {
            $table->id();

            $table->string('eg_codigo',15);
            $table->string('eg_anios_experiencia',2);
            $table->string('eg_ruta_cv',500);
            $table->string('eg_religion',100);
            $table->string('eg_especialidad',30);
            $table->string('eg_nivel_academico',1);
            $table->unsignedBigInteger('eg_ps_id');
            $table->unsignedBigInteger('eg_ins_id');
            $table->foreign('eg_ps_id')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('eg_ins_id')->references('id')->on('institucions')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('egresados');
    }
};
