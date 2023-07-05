<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Monitoreo>
 */
class MonitoreoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mt_fecha'=>$this->faker->date(),
            'mt_duracion'=>$this->faker->numberBetween(1,24),
            'mt_dc_id'=>$this->faker->numberBetween(1,4),
            'mt_eg_id'=>$this->faker->numberBetween(1,4),
        ];
    }
}
