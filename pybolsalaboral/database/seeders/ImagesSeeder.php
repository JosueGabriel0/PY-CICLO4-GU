<?php

namespace Database\Seeders;

use App\Models\Images;
use App\Models\Postulacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $postulaciones=Postulacion::factory(20)->create();
        foreach ($postulaciones as $postulacion) {
            Images::factory(1)->create([
                'imageable_id'=>$postulacion->id,
                'imageable_type'=>Postulacion::class,
            ]);

        }
    }
}
