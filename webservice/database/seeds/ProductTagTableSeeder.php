<?php

use App\Product;
use App\Tag;
use Illuminate\Database\Seeder;

class ProductTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tags = Tag::all();
        $products = Product::all();

        $products->each(function ($product) use ($tags) {
            $product->tags()->attach($tags->random()->id);
        });
    }
}
