<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
           'type' => "admin",
           'name' => "Admin",
           'email' => "example@admin.com",
           'email_verified_at' => now(),
           'remember_token' => Str::random(10),
           'password' => Hash::make("example@admin.com"),
        ]);

        User::factory(20)->create();
    }
}
