<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Nur Fatchurohman',
            'username' => 'faturfawkes',
            'email' => 'nur.faturohman28@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('rohman2210'),
            'remember_token' => Str::random(10)
        ]);

        User::factory(10)->create();
    }
}
