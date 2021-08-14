<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;



class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = [
            [
                'menu' => 'Home',
                'status' => 'AKTIF',
            ],
            [
                'menu' => 'Women',
                'status' => 'AKTIF',
            ],
            [
                'menu' => 'Men',
                'status' => 'AKTIF',
            ],
            [
                'menu' => 'Belt',
                'status' => 'AKTIF',
            ],
            [
                'menu' => 'Hat',
                'status' => 'AKTIF',
            ],
            [
                'menu' => 'Shoes',
                'status' => 'AKTIF',
            ],
            [
                'menu' => 'Contact',
                'status' => 'AKTIF',
            ]

        ];
        foreach ($menu as $key => $value) {
            Menu::create($value);
        }
    }
}