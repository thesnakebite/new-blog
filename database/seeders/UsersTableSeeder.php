<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();

        $user = new User();
        $user->name = 'Álvaro';
        $user->email = 'alvaro@thesnakebite.es';
        $user->password = bcrypt('12345678');
        $user->save();
    }
}
