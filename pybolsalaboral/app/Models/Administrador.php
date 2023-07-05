<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;
    protected $fillable=['ad_puesto', 'ad_salario', 'ad_fecha_ultimo_acceso', 'ps_id'];

    public function personas(){
        return $this->belongsTo(Perona::class);
    }
}
