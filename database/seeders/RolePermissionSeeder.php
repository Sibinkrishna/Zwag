<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $permissions = [
            'Manage Admin',
            'Customers',
            'Orders',
            'Cart Details',
            'Manage Products',
            'Search Text',
            'Enquiry Forms',
            'Download Reports',
            'Customers Reports',
            'Order Sales Reports',
            'Payment Reports',
            'Cart Reports',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $admin = Role::firstOrCreate(['name' => 'Super Admin']);
        $admin->givePermissionTo($permissions);
    }
}
