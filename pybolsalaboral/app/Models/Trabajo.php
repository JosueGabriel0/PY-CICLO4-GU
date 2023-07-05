<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    protected $fillable=['tra_fecha_publicacion', 'tra_tipo', 'tra_categoria', 'tra_descripcion', 'tra_salario', 'tra_fecha_inicio', 'tra_fecha_fin', 'tra_requiere_experiencia', 'tra_datos_contacto', 'tra_modalidad_tiempo', 'tra_beneficios', 'tra_modalidad', 'tra_titulo', 'tra_antecedentes', 'tra_estado', 'tra_remunerado', 'ps_monto_remuneracion', 'tra_ep_id'];
    use HasFactory;

    public function egresados(){
        return $this->belongsToMany(Egresado::class);







    }
}
