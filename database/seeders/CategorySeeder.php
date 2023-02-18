<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::truncate();
        Category::create([
            'name' => 'SUV',
        ]);

        Category::create([
            'name' => 'Sedan',
        ]);

        Category::create([
            'name' => 'Coupe',
        ]);

        Category::create([
            'name' => 'Van',
        ]);

        Category::create([
            'name' => 'Pickup',
        ]);
    }
}
