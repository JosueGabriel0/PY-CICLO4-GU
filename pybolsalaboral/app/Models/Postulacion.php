<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    protected $fillable=['pos_ruta_cv', 'pos_puntaje', 'pos_estado', 'pos_eg_id', 'pos_tra_id'];
    use HasFactory;

    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
