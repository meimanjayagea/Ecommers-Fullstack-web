<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'foto_profile' => 'avatar.png',
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'level' => 'ADMIN',
                'password' => bcrypt('admin123')
            ],
            [
                'foto_profile' => 'avatar2.png',
                'name' => 'user',
                'email' => 'user@gmail.com',
                'level' => 'USER',
                'password' => bcrypt('user123')
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
