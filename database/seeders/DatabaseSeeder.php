<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'type' => 'ADM'
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Coklat',
            'price' => 12000,
            'qty' => 12,
            'image' => "imgs/products/product-1.jpg"
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Pisan',
            'price' => 1000,
            'qty' => 2,
            'image' => "imgs/products/product-2.jpg"
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Keju',
            'price' => 1200,
            'qty' => 1234,
            'image' => "imgs/products/product-3.jpg"
        ]);
    }
}
