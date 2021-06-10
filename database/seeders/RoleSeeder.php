<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminPermission = Permission::all();
        Role::updateOrCreate([
            'name'          => 'Super admin',
            'slug'          => 'super-admin',
            'description'   => 'This is super-admin',
            'deletable'     => false,
        ])->permissions()
            ->sync($adminPermission->pluck('id'));

        $permissionToAccessDashboard = Permission::where('slug', 'app.dashboard')->first()->id;
        Role::updateOrCreate([
            'name'          => 'Admin',
            'slug'          => 'admin',
            'description'   => 'This is admin',
            'deletable'     => false,
        ])->permissions()
            ->sync($permissionToAccessDashboard);;

        Role::updateOrCreate([
            'name'          => 'User',
            'slug'          => 'user',
            'description'   => 'This is User',
            'deletable'     => false,
        ]);
    }
}
