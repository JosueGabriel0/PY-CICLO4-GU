<?php

namespace Database\Seeders;

use App\Models\Monitoreo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonitoreoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Monitoreo::factory(20)->create();
    }
}
