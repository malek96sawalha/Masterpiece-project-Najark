<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            "name" => "Bedrooms",
            "description" => "description",
            "img" => "https://images-cdn.ubuy.co.id/634ec30b22c3ac705d597f56-247-shop-at-home-247shopathome.jpg"
        ]);
        DB::table('categories')->insert([
            "name" => "Office Furnitures",
            "description" => "description",
            "img" => "https://assets.bdiusa.com/Misc-Images-Files/Blog-Images/linea-modern-office-furniture-collection-bdi-picking-the-perfect.jpg?v=1645030827"
        ]);
        DB::table('categories')->insert([
            "name" => "Living Rooms",
            "description" => "description",
            "img" => "https://s3.dutchcrafters.com/product-images/pid_62880_210.jpg"
        ]);
        DB::table('categories')->insert([
            "name" => "Wardrobe",
            "description" => "description",
            "img" => "https://ii1.pepperfry.com/media/catalog/product/l/i/494x544/linden-4-door-wardrobe-without-mirror-by-spacewood-linden-4-door-wardrobe-without-mirror-by-spacewoo-ohayp6.jpg"
        ]);
        DB::table('categories')->insert([
            "name" => "Kitchen",
            "description" => "description",
            "img" => "https://www.gower-furniture.co.uk/wp-content/uploads/2021/05/Verona-Navy.jpg"
        ]);
    }
}
