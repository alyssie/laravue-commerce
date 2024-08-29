<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' =>'Sneakers',
            'slug' =>'sneakers',
        ]);
        Category::create([
            'name' =>'Apparel',
            'slug' =>'apparel',
        ]);
        Category::create([
            'name' =>'Computer',
            'slug' =>'computer',
        ]);
        Category::create([
            'name' =>'Mobile Phones',
            'slug' =>'mobile-phones',
        ]);
        Category::create([
            'name' =>'Accessories',
            'slug' =>'accessories',
        ]);
    }
}
