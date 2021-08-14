<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryProduct extends Seeder
{
    public function run()
    {
        $category = [
            [
                'name' => 'Pakaian Wanita',
            ],
            [
                'name' => 'Pakaian Pria',
            ],
            [
                'name' => 'Sepatu Wanita',
            ],
            [
                'name' => 'Sepatu Pria',
            ],
            [
                'name' => 'Jam Tangan',
            ],

        ];
        foreach ($category as $key => $value) {
            Category::create($value);
        }
    }
}
