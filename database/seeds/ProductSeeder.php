<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            'name' => 'Product A', 
            'image' => 'img/product06.jpg',
            'price' => rand(1000, 2000) * 1000
        ]);

        Product::insert([
            'name' => 'Product C', 
            'image' => 'img/product07.jpg',
            'price' => rand(1000, 2000) * 1000
        ]);

        Product::insert([
            'name' => 'Product D', 
            'image' => 'img/product08.jpg',
            'price' => rand(1000, 2000) * 1000
        ]);
    }
}
