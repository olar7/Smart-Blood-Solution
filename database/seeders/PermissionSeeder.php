<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Permission;
use App\Models\UserType;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Permission::truncate();
        $items = [
            ['permission' => 'user-access', 'component_id' => 1],
            ['permission' => 'user_type-access', 'component_id' => 2 ],
            ['permission' => 'user_type-add', 'component_id' => 2 ],
            ['permission' => 'user_type-edit', 'component_id' => 2 ],
            ['permission' => 'user_type-view', 'component_id' => 2 ],
            ['permission' => 'user_type-delete', 'component_id' => 2 ],
            ['permission' => 'user_type-action', 'component_id' => 2 ],
            ['permission' => 'permission-access', 'component_id' => 3 ],
            ['permission' => 'permission-add', 'component_id' => 3 ],
            ['permission' => 'permission-edit', 'component_id' => 3 ],
            ['permission' => 'permission-view', 'component_id' => 3 ],
            ['permission' => 'permission-delete', 'component_id' => 3 ],
            ['permission' => 'permission-action', 'component_id' => 3 ],
            ['permission' => 'permission_comp_add', 'component_id' => 4],
            ['permission' => 'admin-access', 'component_id' => 6 ],
            ['permission' => 'admin-add', 'component_id' => 6 ],
            ['permission' => 'admin-edit', 'component_id' => 6 ],
            ['permission' => 'admin-view', 'component_id' => 6 ],
            ['permission' => 'admin-delete', 'component_id' => 6 ],
            ['permission' => 'admin-action', 'component_id' => 6 ],
           

        ];

        foreach ($items as $item) {
            Permission::create($item);
        }
        DB::table('user_type_permissions')->truncate();
        $permissions = Permission::all();

        // Populate the pivot table
        UserType::all()->each(function ($user_type) use ($permissions) { 
            $user_type->permissions()->attach(
                $permissions
            ); 
        });
    }
}
