<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = DB::table('roles')->where('name', 'superAdmin')->where('guard_name', 'backpack');
        if ($role->doesntExist()) {
            DB::table('roles')->insert([
                'name' => 'superAdmin',
                'guard_name' => 'backpack'
            ]);
        }

        $role_permissions = DB::table('role_has_permissions');
        if ($role_permissions->doesntExist()) {
            DB::table('role_has_permissions')->insert([
                ['permission_id' => 1, 'role_id' => 1],
                ['permission_id' => 2, 'role_id' => 1],
                ['permission_id' => 3, 'role_id' => 1],
                ['permission_id' => 4, 'role_id' => 1],
                ['permission_id' => 5, 'role_id' => 1],
                ['permission_id' => 6, 'role_id' => 1],
                ['permission_id' => 7, 'role_id' => 1],
            ]);
        }
    }
}
