<?php

namespace Database\Seeders;

use App\Models\Egresado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EgresadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Egresado::factory(20)->create();
    }
}
