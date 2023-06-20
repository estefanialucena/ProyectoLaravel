<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cancion;
use App\Models\Categoria;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(10)->create();
        Categoria::factory(10)->create();

        User::all()->each(function ($user) {
            $user->canciones()->saveMany(Cancion::factory(5)->create([
                'user_id' => $user->id,
                'categoria_id' => Categoria::inRandomOrder()->first()->id,
            ]));
        });
    }
}
