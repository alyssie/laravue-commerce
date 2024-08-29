<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'sku' => 'LORM001',
            'title' => 'Lorem ipsum dolor sit amet',
            'price' => 19.02,
            'quantity' => 3,
            'category_id' => 1,
            'brand_id' => 1,
            'description' => 'Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet'
        ]);
    }
}
