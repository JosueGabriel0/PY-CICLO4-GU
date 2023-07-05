<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoreo extends Model
{
    protected $fillable=['mt_fecha', 'mt_duracion', 'mt_dc_id', 'mt_eg_id'];
    use HasFactory;


}
