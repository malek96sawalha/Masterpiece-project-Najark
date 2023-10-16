<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('products')->insert([
            "name" => "Modern Bedrooms",
            "categoryId" => 1,
            "shortDescription" => "shortDescription",
            "material" => "material",
            "Warranty" => 1,
            "type" => "type",
            "longDescription" => "longDescription",
            "cartDescription" => "cartDescription",
            "price" => 1500,
            "img" => "img",
            "img1" => "img",
            "img2" => "img",
            "img3" => "img",
        ]);
    }
}
