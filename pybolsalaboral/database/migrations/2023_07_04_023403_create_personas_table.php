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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();

            $table->string('ps_nombre',40);
            $table->string('ps_paterno',40);
            $table->string('ps_materno',40);
            $table->string('ps_edad',2);
            $table->string('ps_dni',8);
            $table->string('ps_correo',50);
            $table->string('ps_celular',9);
            $table->string('ps_direccion',50);
            $table->string('ps_estado_civil',1);
            $table->date('ps_fecha_nacimiento');
            $table->string('ps_sexo',1);
            $table->string('ps_usuario',30);
            $table->string('ps_password',30);
            $table->string('ps_rol',1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
