<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $fillable=['ins_num_cedes', 'ins_num_docentes', 'ins_anios_actividad', 'ins_num_estudiantes', 'ins_sitio_web', 'ins_nombre', 'ins_direccion', 'ins_correo', 'ins_celular'];
    use HasFactory;

    public function egresados(){
        return $this->hasMany(Egresado::class);
    }
}
