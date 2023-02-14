<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Typology;
use Mockery\Matcher\Type;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product :: factory() -> count(20) -> make() -> each(function($p){
            $typology = Typology :: inRandomOrder() -> first();
            $p -> typology()->associate($typology);
            $p -> save();

            $categories = Category :: inRandomOrder() -> limit(2) -> get();
            $p -> categories() -> attach($categories);
        });
        // Product :: factory() -> count(50) -> create();
    }
}
