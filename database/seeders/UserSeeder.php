<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'university' => 'حاسبات ومعلومات',
            'user_type' => 'admin',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'vet@gmail.com',
            'password' => bcrypt('12345678'),
            'university' => 'طب بيطري',
            'user_type' => 'admin',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'baby@gmail.com',
            'password' => bcrypt('12345678'),
            'university' => ' تربية طفولة',
            'user_type' => 'admin',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'teacher@gmail.com',
            'password' => bcrypt('12345678'),
            'university' => ' تربية عام',
            'user_type' => 'admin',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'commerce@gmail.com',
            'password' => bcrypt('12345678'),
            'university' => 'تجارة',
            'user_type' => 'admin',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'lawyer@gmail.com',
            'password' => bcrypt('12345678'),
            'university' => 'حقوق',
            'user_type' => 'admin',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'islamics@gmail.com',
            'password' => bcrypt('12345678'),
            'university' => 'دراسات اسلامية ',
            'user_type' => 'admin',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'tourism@gmail.com',
            'password' => bcrypt('12345678'),
            'university' => ' سياحة وفنادق  ',
            'user_type' => 'admin',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'sport@gmail.com',
            'password' => bcrypt('12345678'),
            'university' => '  تربية رياضية ',
            'user_type' => 'admin',
        ]);

    }
}
