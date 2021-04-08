<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            "name"=>'Admin',
            "lastname"=>"Master",
            "email"=>"kevocam.seo@gmail.com",
            "password"=>Hash::make("123456"),
        ]);
    }
}
