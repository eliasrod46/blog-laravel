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
        $role1 = Role::create(['name'=> 'user']);
        $role2 = Role::create(['name'=> 'admin']);

        //-permissions
        $permission = Permission::create(['name'=> 'edit articles']);

        Permission::create(['name' => 'admin.user.index'])->syncRoles([$role2]);
        Permission::create(['name' => 'admin.user.create'])->syncRoles([$role2]);
        Permission::create(['name' => 'admin.user.edit'])->syncRoles([$role2]);
        Permission::create(['name' => 'admin.user.destroy'])->syncRoles([$role2]);

        Permission::create(['name' => 'admin.images.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.images.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.images.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.images.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.comments.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.comments.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.comments.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.comments.destroy'])->syncRoles([$role1,$role2]);
        
        Permission::create(['name' => 'admin.likes.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.likes.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.likes.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.likes.destroy'])->syncRoles([$role1,$role2]);


        // $role->givePermissionTo($permission);
        // ó
        // $permission->assignRole($role);

        
        $user = User::find(1);
        $user->assignRole('admin');

    }
}
