<?php

namespace Database\Factories;
use app\Models\Estudiante;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Estudiante::class;
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'edad' => $this->faker->randomElement([17,18, 19, 20, 21]),
            'direccion' => $this->faker->address()
        ];
    }
}
