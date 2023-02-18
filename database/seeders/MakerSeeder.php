<?php

namespace Database\Seeders;

use App\Models\Maker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Maker::truncate();
        Maker::create([
            'name' => 'Nissan',
            'logo' => NULL,
        ]);
        Maker::create([
            'name' => 'Mazda',
            'logo' => NULL,
        ]);
        Maker::create([
            'name' => 'Toyota',
            'logo' => NULL,
        ]);
        Maker::create([
            'name' => 'Chevrolet',
            'logo' => NULL,
        ]);
        Maker::create([
            'name' => 'Subaru',
            'logo' => NULL,
        ]);
    }
}
