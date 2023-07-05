<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable=['url', 'imageable_id', 'imageable_type'];
    use HasFactory;

    public function imageable(){
        return $this->morphTo();
    }
}
