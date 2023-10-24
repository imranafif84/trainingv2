<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'item_name' => 'Item A',
            'description' => 'This is item A',
            'price' => 8,
            'user_id' => 1
        ]);

        Item::create([
            'item_name' => 'Item B',
            'description' => 'This is item B',
            'price' => 14,
            'user_id' => 1
        ]);
    }
}
