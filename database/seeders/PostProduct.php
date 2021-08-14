<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostProduct extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,12) as $index){
            DB::table('products')->insert([
                'kode' => $faker->unique()->randomNumber(),
                'name' => $faker->name,
                'gambar_product' => $index.'.jpg',
                'gambar_satu' => 1 .'.jpg',
                'gambar_dua' => 2 .'.jpg',
                'gambar_tiga' => 3 .'.jpg',
                'gambar_empat' => 4 .'.jpg',
                'harga' =>rand(100000, 500000),
                'stock' => $faker->randomNumber(),
                'varian' => $faker->word(),
                'keterangan' => $faker->paragraph(),
                'category_id' => rand(1,5)
            ]);
        }
    }
}