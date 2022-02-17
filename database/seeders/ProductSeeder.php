<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\True_;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            "title" => "Suspendisse et.",
            "image" => "TBek77nbhoOP2SIFzlI3LCNqR4Ja7OYXYyMkaHUd.jpg",
            "about" => "T-shirts",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 1,
            "Manufacturer" => 'H&M',
            "new" => 1
        ]);

        Product::create([
            "title" => "Suspendisse et.",
            "image" => "ekQPt5SXNo1K7pHxdFBrC6E3zgaX03IufyvrdvZl.jpg",
            "about" => "T-shirts",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 1,
            "Manufacturer" => 'H',
            "new" => 1        ]);

        Product::create([
            "title" => "Suspendisse et.",
            "image" => "2.jpg",
            "about" => "T-shirts",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 2,
            "Manufacturer" => 'H',
            "new" => 1        ]);

        Product::create([
            "title" => "Suspendisse et.",
            "image" => "ruxxrpOHq3Neu63s9AAgSYtDhzWFVt76yxfh6jX8.jpg",
            "about" => "T-shirts",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 3,
            "Manufacturer" => 'H',
            "new" => 1        ]);

        Product::create([
            "title" => "Suspendisse et.",
            "image" => "8Wd35AlQEKlmi3lnGCq7SWdFiiBqZX4jQYOqFqDS.jpg",
            "about" => "T-shirts",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 2,
            "Manufacturer" => 'H',
            "new" => 1        ]);

        Product::create([
            "title" => "Suspendisse et.",
            "image" => "poPREEwR9ltCyhfHb6uvHyU5NVK0zZS16PDw9UAQ.jpg",
            "about" => "T-shirts",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 3,
            "Manufacturer" => 'H&M' ,
            "new" => 1       ]);

        Product::create([
            "title" => "Suspendisse et.",
            "image" => "U9sNO8kFlUmtDTNcPAYn5Pr2K2X0PEjmV0dCkOq7.jpg",
            "about" => "T-shirts",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 4,
            "Manufacturer" => 'H&M' ,
            "new" => 1       ]);

        Product::create([
            "title" => "Suspendisse et.",
            "image" => "ea1M7t6v34K4pBhWBY2XtG7nsLgyPL4Im6NtjPGT.jpg",
            "about" => "T-shirts",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 4,
            "Manufacturer" => 'H&M' ,
            "new" => 1       ]);

        Product::create([
            "title" => "Suspendisse et.",
            "image" => "cBJDkfi2ZL4HKdd2xM2Kxw1KZxcxD8Ye4iW0S6Ws.jpg",
            "about" => "Men",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 5,
            "Manufacturer" => 'H&M'  ,
            "new" => 1      ]);

        Product::create([
            "title" => "Suspendisse et.",
            "image" => "SneYB2r7u6WuJuCGMpUux3jwwnQRSzV5KLmFZptr.jpg",
            "about" => "Men",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 5,
            "Manufacturer" => 'H&M',
            "new" => 1
        ]);

        Product::create([
            "title" => "Suspendisse et.",
            "image" => "St6lBumjeU5EQwWDalTvi9xzZgYPHrz7YvNdtxjy.jpg",
            "about" => "Men",
            "Manufacturer" => 'H&M' ,
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 3,
            "new" => 1
                   ]);

    }
}
