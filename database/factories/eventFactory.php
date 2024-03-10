<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\lieu;
use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        $lieuxIds = lieu::pluck('id');
        $categorie_id = Categorie::pluck('id');
        $user_id = User::pluck('id');
        return [
            'titre' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'nombre_de_places' => $this->faker->numberBetween(1, 100),
            'image'=>('https://source.unsplash.com/random/900×700/?event'),
            'price'=>$this->faker->numberBetween(100, 900),
            'date' => $this->faker->dateTimeBetween('+1 week', '+2 week')->format('Y-m-d'),
            'lieu_id' => $this->faker->randomElement($lieuxIds),
            'categorie_id' => $this->faker->randomElement($categorie_id),
            'user_id' => $this->faker->randomElement($categorie_id),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => now(),
        ];
    }
}

