<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {



        $this->call(PersonaSeeder::class);
        $this->call(AdministradorSeeder::class);
        $this->call(InstitucionSeeder::class);
        $this->call(DocenteSeeder::class);
        $this->call(EgresadoSeeder::class);
        $this->call(MonitoreoSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(TrabajoSeeder::class);
        //$this->call(PostulacionSeeder::class);
        Storage::makeDirectory('postulaciones');
        $this->call(ImagesSeeder::class);


    }
}
