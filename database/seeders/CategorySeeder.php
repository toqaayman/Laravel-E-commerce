<?php

namespace Database\Seeders;

use App\Models\Category;
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
        Category::create([
            'title' => 'Men',
            'image' => 'categories/uIWsyvH9io6RHAd6kcvpWRUSS4rYMAuesxymSQ8d.jpg'
        ]);

        Category::create([
            'title' => 'Women',
            'image' => 'categories/G63jdPSuBQk1EnbHAppD0JwWqyE35GH8oljz6gco.jpg'
        ]);

        Category::create([
            'title' => 'Kids',
            'image' => 'categories/o2b8TCEqdBzqY8TbFcWVdsNfKGxxXlAoLP1xGFfP.jpg'
        ]);

        Category::create([
            'title' => 'Footwear',
            'image' => 'categories/0Z8FvqiBIJtsRtdHuwXwUKYikjF2svqU0HXUXPfE.jpg'
        ]);

        Category::create([
            'title' => 'Accessories',
            'image' => 'categories/sLATQr72yKLRAbDeXM9PZoXZphYl0VfErif0kZGS.jpg'
        ]);

    }

}
