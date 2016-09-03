<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
          'imagePath' => "../assets/img/shopping-products/tshirt.jpg",
          'title' => "Men's T-shirt",
          'description' => "Very cool t-shirt you can wear everywhere!",
          'price' => 15,
          'gender' => 'men',
          'type' => 't-shirt'
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => "../assets/img/shopping-products/jeans-1.jpg",
          'title' => "Men's Jeans",
          'description' => "Very cool jeans with a reasonable price!",
          'price' => 24.99,
          'gender' => 'men',
          'type' => 'jeans'
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => "../assets/img/shopping-products/jeans-2.jpg",
          'title' => "Men's Vintage Jeans",
          'description' => "Vintage jeans which will make everybody say: Aww!",
          'price' => 29.99,
          'gender' => 'men',
          'type' => 'jacket'
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => "../assets/img/shopping-products/jumper.jpg",
          'title' => "Men's Jumper",
          'description' => "Very cool jumper you can wear everywhere!",
          'price' => 34.99,
          'gender' => 'women',
          'type' => 'coat'
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => "../assets/img/shopping-products/jacket.jpg",
          'title' => "Men's Jacket",
          'description' => "Very cool jacket you can wear everywhere!",
          'price' => 45,
          'gender' => 'women',
          'type' => 'jeans'
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => "../assets/img/shopping-products/shorts.jpg",
          'title' => "Women's Shorts",
          'description' => "Very cool shorts you can wear everywhere!",
          'price' => 10.99,
          'gender' => 'women',
          'type' => 'shoes'
        ]);
        $product->save();
    }
}
