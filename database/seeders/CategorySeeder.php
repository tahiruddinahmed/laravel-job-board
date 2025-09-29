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
        //
        // Category::factory()->create(Category::$categories);
        $categories = Category::$categories;

        foreach($categories as $category) {
            Category::factory()->create([
                'name' => $category
            ]);
        }
    }
}
