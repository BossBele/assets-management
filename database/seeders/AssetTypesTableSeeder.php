<?php

namespace Database\Seeders;

use App\Models\AssetType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AssetTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        $types = ['Electrical', 'Mechanical', 'Plumbing', 'Stationary', 'Furniture'];

        foreach ($types as $type) {
            AssetType::create([
                'name' => $type,
            ]);
        }
    }
}
