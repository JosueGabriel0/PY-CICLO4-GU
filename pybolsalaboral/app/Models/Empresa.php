<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable=['ep_rubro', 'ep_anios_actividad', 'ep_num_trabajadores', 'ep_num_cedes', 'ep_sitio_web', 'ep_nombre', 'ep_direccion', 'ep_correo', 'ep_celular'];
    use HasFactory;

    public function trabajos(){
        return $this->hasMany(Trabajo::class);

    }
}
