<?php

namespace Database\Seeders;

use App\Models\ItemType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $itemTypes = [
            ['name' => 'Plastic', 'description' => 'Items with plastic material'],
            ['name' => 'Metal', 'description' => 'Items with metal material'],
            ['name' => 'Glass', 'description' => 'Items made from glass'],
            ['name' => 'Paper', 'description' => 'Paper-based items'],
            ['name' => 'Fabric', 'description' => 'Fabric materials for recycling'],
        ];

        foreach ($itemTypes as $type) {
            ItemType::create($type);
        }
    }
}
