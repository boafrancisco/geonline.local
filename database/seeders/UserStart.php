<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserStart extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = User::create ([
            "first_name"  => "User",
            "last_name"   => "Primeiro",
            "email"       => "user1@user1.com",
            "password"    => Hash::make("user1"),

        ]);

        $user2 = User::create ([
            "first_name"  => "User",
            "last_name"   => "Segundo",
            "email"       => "user2@user2.com",
            "password"    => Hash::make("user2"),

        ]);

        $user3 = User::create ([
            "first_name"  => "User",
            "last_name"   => "Terceiro",
            "email"       => "user3@user3.com",
            "password"    => Hash::make("user3"),

        ]);

    }
}
