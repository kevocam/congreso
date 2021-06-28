<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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
        
        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
        Role::create(['name' => 'taller1']);
        Role::create(['name' => 'taller2']);
        Role::create(['name' => 'taller3']);
        Role::create(['name' => 'taller4']);
        Role::create(['name' => 'taller5']);
        Role::create(['name' => 'taller6']);
        Role::create(['name' => 'congreso']);
        Role::create(['name' => 'manager']);

        $admin = User::create([
             "name"=>'Admin',
             "lastname"=>"Master",
             "email"=>"root@root.com",
             "password"=>Hash::make("123456"),
         ]);
         $admin->assignRole('super-admin');

         $admin2 = User::create([
            "name"=>'admin',
            "lastname"=>"Master",
            "email"=>"admin@admin.com",
            "password"=>Hash::make("123456"),
        ]);
        $admin2->assignRole('super-admin');
    }
}
