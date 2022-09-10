<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@securedvoting.com',
            'password' => Hash::make('11223344'),
            'email_verified_at' => now(),
        ]);
    }
}
