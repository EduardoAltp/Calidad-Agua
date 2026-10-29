<?php

namespace Database\Factories;

use App\Models\Reporte;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Reporte>
 */
class ReporteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'ubicacion' => $this->faker->address(),
            'descripcion' => $this->faker->paragraph(),
            'fecha_inicio' => $this->faker->date(),
            'folio' => $this->faker->bothify(),
        ];
    }
}
