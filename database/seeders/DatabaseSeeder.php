<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create(
            [
                'username' => 'affan',
                'email' => 'm.affan@gmail.com',
                'password' => bcrypt('12345678'),
            ]
        );

    }
}
