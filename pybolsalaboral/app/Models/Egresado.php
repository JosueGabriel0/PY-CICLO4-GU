<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egresado extends Model
{
    protected $fillable=['eg_codigo', 'eg_anios_experiencia', 'eg_ruta_cv', 'eg_religion', 'eg_especialidad', 'eg_nivel_academico', 'eg_ps_id', 'eg_ins_id'];
    use HasFactory;

    public function personas(){
        return $this->belongsTo(Perona::class);
    }

    public function docentes(){
        return $this->belongsToMany(Docente::class);
    }

    public function instituciones(){
        return $this->belongsTo(Institucion::class);
    }

    public function trabajos(){
        return $this->belongsToMany(Trabajo::class);
    }
}
