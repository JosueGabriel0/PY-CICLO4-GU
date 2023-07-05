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
        Schema::create('trabajos', function (Blueprint $table) {
            $table->id();

            $table->date('tra_fecha_publicacion');
            $table->string('tra_tipo',1);
            $table->string('tra_categoria',100);
            $table->string('tra_descripcion',255);
            $table->double('tra_salario',100);
            $table->date('tra_fecha_inicio');
            $table->date('tra_fecha_fin');
            $table->string('tra_requiere_experiencia',2);
            $table->string('tra_datos_contacto',50);
            $table->string('tra_modalidad_tiempo',50);
            $table->string('tra_beneficios',255);
            $table->string('tra_modalidad',30);
            $table->string('tra_titulo',100);
            $table->string('tra_antecedentes',100);
            $table->string('tra_estado',1);
            $table->string('tra_remunerado',5);
            $table->double('ps_monto_remuneracion',5);
            $table->unsignedBigInteger('tra_ep_id');
            $table->foreign('tra_ep_id')->references('id')->on('empresas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabajos');
    }
};
