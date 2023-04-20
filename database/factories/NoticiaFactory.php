<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Noticia>
 */
class NoticiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(),
            'autor' => $this->faker->name(),
            'fechapub' => $this->faker->date(),
            'contenido' => $this->faker->text(),
            'imagen' => $this->faker->imageUrl(640,480)
        ];
    }
}
