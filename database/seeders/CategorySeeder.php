<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
           // 'Electronics',
          //  'Fashion',
          //  'Books',
         //   'Home & Kitchen',
         //   'Health & Beauty',
         //   'Toys & Games',
         //   'Sports & Outdoors',
           'Products',
            //'Groceries',
            'Services'
        ];

        foreach ($categories as $name) {
            Category::create(['name' => $name]);
        }
    }
}
