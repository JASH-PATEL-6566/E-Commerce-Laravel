<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("product")->insert([
            [
            "name" => "LG mobile",
            "price" => "10000",
            "description" => "a smart phone with 4GB RAM and much more",
            "category" => "mobile",
            "gallery" => "https://www.github.com/JASH-PATEL-6566"
        ],
            [
            "name" => "LG mobile 1",
            "price" => "10000",
            "description" => "a smart phone with 4GB RAM and much more",
            "category" => "mobile",
            "gallery" => "https://www.github.com/JASH-PATEL-6566"
        ],
            [
            "name" => "LG mobile 2",
            "price" => "10000",
            "description" => "a smart phone with 4GB RAM and much more",
            "category" => "mobile",
            "gallery" => "https://www.github.com/JASH-PATEL-6566"
        ],
            [
            "name" => "LG mobile 3",
            "price" => "10000",
            "description" => "a smart phone with 4GB RAM and much more",
            "category" => "mobile",
            "gallery" => "https://www.github.com/JASH-PATEL-6566"
        ],
            [
            "name" => "LG mobile 4",
            "price" => "10000",
            "description" => "a smart phone with 4GB RAM and much more",
            "category" => "mobile",
            "gallery" => "https://www.github.com/JASH-PATEL-6566"
        ],
            [
            "name" => "LG mobile 5",
            "price" => "10000",
            "description" => "a smart phone with 4GB RAM and much more",
            "category" => "mobile",
            "gallery" => "https://www.github.com/JASH-PATEL-6566"
        ],
    ]);
    }
}
