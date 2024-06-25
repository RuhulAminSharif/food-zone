<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    protected static ?string $password;
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        User::insert([
            [
                'name' => 'Ruhul Amin Sharif',
                'email' => 'sharif.cse.ras@gmail.com',
                'role' => 'admin',
                'password' => static::$password ??= Hash::make('password'),
            ],
            [
                'name' => 'Jannatur Noor Taspia',
                'email' => 'noor.t.jannat@gmail.com',
                'role' => 'admin',
                'password' => static::$password ??= Hash::make('password'),
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'password' => static::$password ??= Hash::make('password'),
            ],
        ]);
    }
}
