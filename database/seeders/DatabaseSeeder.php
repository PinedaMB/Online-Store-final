<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $productsModel = new Product();
        $images = ['game.png', 'safe.png', 'submarine.png'];
        for ($i=0; $i < 5; $i++) {
            $productsModel->create([
                'name' => 'Product ' . $i,
                'description' => 'Description ' . $i,
                'price' => rand(1, 100),
                'image' => $images[rand(0, 2)],
            ]);
        }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
