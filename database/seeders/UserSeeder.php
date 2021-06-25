<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* User::create([
            "name"=>'Admin',
            "lastname"=>"Master",
            "email"=>"kevocam.seo@gmail.com",
            "password"=>"123456",

        ]); */

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
        $role = Role::create(['name' => 'taller1']);
        $role = Role::create(['name' => 'taller2']);
    }
}
