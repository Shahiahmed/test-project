<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        $faker = Faker::create();

        $categoryIds = Category::pluck('id')->toArray();

        if (empty($categoryIds)) {
            $this->command->error('Нет категорий');
            return;
        }

        for ($i = 0; $i < 10; $i++) {
            Product::create([
                'name'        => $faker->words(3, true),
                'category_id' => $faker->randomElement($categoryIds),
                'description' => $faker->paragraph,
                'price'       => $faker->randomFloat(2, 100, 1000)
            ]);
        }
    }
}
