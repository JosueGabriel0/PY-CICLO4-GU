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
        Schema::create('monitoreos', function (Blueprint $table) {
            $table->id();

            $table->date('mt_fecha');
            $table->string('mt_duracion',50);
            $table->unsignedBigInteger('mt_dc_id');
            $table->unsignedBigInteger('mt_eg_id');
            $table->foreign('mt_dc_id')->references('id')->on('docentes')->onDelete('cascade');
            $table->foreign('mt_eg_id')->references('id')->on('egresados')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitoreos');
    }
};
