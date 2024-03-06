<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Categorieseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Concert',
            ],
            [
                'name' => 'Cinéma',
            ],
            [
                'name' => 'Théâtre',
            ],
            [
                'name' => 'Dance',
            ],
        ];

        foreach ($categories as $categoryData) {
            // Use firstOrCreate to prevent duplicates based on 'name' field
            Categorie::firstOrCreate(['name' => $categoryData['name']], $categoryData);
        }
    }
}
