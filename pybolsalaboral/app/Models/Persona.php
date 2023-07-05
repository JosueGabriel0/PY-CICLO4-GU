<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Persona extends Model{
    use HasFactory;
    protected $fillable=['ps_nombre','ps_paterno','ps_materno','ps_edad','ps_dni','ps_correo','ps_celular','ps_direccion','ps_estado_civil','ps_fecha_nacimiento','ps_sexo','ps_usuario','ps_password','ps_rol'];

    public function administradores(){
        return $this->hasMany(Administrador::class);
    }

    public function docentes(){
        return $this->hasMany(Docente::class);
    }

    public function egresados(){
        return $this->hasMany(Egresado::class);
    }


}
