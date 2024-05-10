<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $role1 = Role::create(['name'=> 'Admin']);
        $role2 = Role::create(['name'=> 'Blogger']);
        $role3 = Role::create(['name'=> 'User']);

        //-permissions
        Permission::create(['name'=> 'admin.home'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.update'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.roles.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.tags.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.tags.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.categories.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.categories.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.posts.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.posts.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.posts.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.posts.destroy'])->syncRoles([$role1,$role2]);

        



        // $role->givePermissionTo($permission);
        // ó
        // $permission->assignRole($role);

        
        $user = User::find(1);
        $user->assignRole('Admin');
        $user = User::find(2);
        $user->assignRole('Blogger');
        $user = User::find(3);
        $user->assignRole('User');

    }
}
