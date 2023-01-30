<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole=Role::create(['name'=>'Super Admin']);
        $managerRole = Role::create(['name'=>'REMAsupervisor']);
        $leaderRole = Role::create(['name'=>'Districtoffice']);
        $leaderRole = Role::create(['name'=>'sectoroffice']);
        $leaderRole = Role::create(['name'=>'celloffice']);
        $leaderRole = Role::create(['name'=>'village leader']);
        $leaderRole = Role::create(['name'=>'none']);

        Permission::create(['name' => 'create-station']);
        Permission::create(['name' => 'edit-station']);
        Permission::create(['name' => 'delete-station']);
        Permission::create(['name' => 'view-station']);

        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'view-users']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'delete-users']);
        Permission::create(['name' => 'send-arlet']);
        Permission::create(['name' => 'view-location']);
        Permission::create(['name' => 'delete-users']);

      $adminRole->givePermissionTo(Permission::all());

      $managerRole->givePermissionTo([
        'create-station',
        'edit-station',
        'delete-station',
        'view-station'
       ]);

      
       $leaderRole->givePermissionTo([
           'view-station',
       ]);
    }
}
