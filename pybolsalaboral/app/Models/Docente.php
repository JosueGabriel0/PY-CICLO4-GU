<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $fillable=['dc_grado_academico', 'dc_anios_trabajo', 'dc_especialidad', 'dc_grado_estudios', 'dc_ps_id'];
    use HasFactory;

    public function personas(){
        return $this->belongsTo(Perona::class);
    }

    public function egresados(){
        return $this->belongsToMany(Tag::class);
    }
}
