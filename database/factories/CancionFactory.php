<?php

namespace Database\Factories;

use App\Models\Cancion;
use App\Models\Categoria;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CancionFactory extends Factory
{
    protected $model = Cancion::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence,
            'categoria_id' => Categoria::factory(),
            'user_id' => User::factory(),
        ];
    }
}
