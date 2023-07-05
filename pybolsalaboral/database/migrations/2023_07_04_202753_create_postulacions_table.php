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
        Schema::create('postulacions', function (Blueprint $table) {
            $table->id();

            $table->string('pos_ruta_cv',1000);
            $table->string('pos_puntaje',500);
            $table->string('pos_estado',100);
            $table->unsignedBigInteger('pos_eg_id');
            $table->unsignedBigInteger('pos_tra_id');
            $table->foreign('pos_eg_id')->references('id')->on('egresados')->onDelete('cascade');
            $table->foreign('pos_tra_id')->references('id')->on('trabajos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulacions');
    }
};
