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

            ['permission' => 'organization-access', 'component_id' => 5 ],
            ['permission' => 'organization-add', 'component_id' => 5 ],
            ['permission' => 'organization-edit', 'component_id' => 5 ],
            ['permission' => 'organization-view', 'component_id' => 5 ],
            ['permission' => 'organization-delete', 'component_id' => 5 ],
            ['permission' => 'organization-action', 'component_id' => 5 ],

            ['permission' => 'blog-access', 'component_id' => 7 ],
            ['permission' => 'blog-add', 'component_id' => 7 ],
            ['permission' => 'blog-edit', 'component_id' => 7 ],
            ['permission' => 'blog-view', 'component_id' => 7 ],
            ['permission' => 'blog-delete', 'component_id' => 7 ],
            ['permission' => 'blog-action', 'component_id' => 7 ],

            ['permission' => 'campaign-access', 'component_id' => 8 ],
            ['permission' => 'campaign-add', 'component_id' => 8 ],
            ['permission' => 'campaign-edit', 'component_id' => 8 ],
            ['permission' => 'campaign-view', 'component_id' => 8 ],
            ['permission' => 'campaign-delete', 'component_id' => 8 ],
            ['permission' => 'campaign-action', 'component_id' => 8 ],

            ['permission' => 'bloodstock-access', 'component_id' => 9 ],
            ['permission' => 'bloodstock-add', 'component_id' => 9 ],
            ['permission' => 'bloodstock-edit', 'component_id' => 9 ],
            ['permission' => 'bloodstock-view', 'component_id' => 9 ],
            ['permission' => 'bloodstock-delete', 'component_id' => 9 ],
            ['permission' => 'bloodstock-action', 'component_id' => 9 ],

            ['permission' => 'client-access', 'component_id' => 10 ],
            ['permission' => 'client-add', 'component_id' => 10 ],
            ['permission' => 'client-edit', 'component_id' => 10 ],
            ['permission' => 'client-view', 'component_id' => 10 ],
            ['permission' => 'client-delete', 'component_id' => 10 ],
            ['permission' => 'client-action', 'component_id' => 10 ],

            ['permission' => 'question-access', 'component_id' => 11 ],
            ['permission' => 'question-add', 'component_id' => 11 ],
            ['permission' => 'question-edit', 'component_id' => 11 ],
            ['permission' => 'question-view', 'component_id' => 11 ],
            ['permission' => 'question-delete', 'component_id' => 11 ],
            ['permission' => 'question-action', 'component_id' => 11 ],

            ['permission' => 'blood-access', 'component_id' => 12 ],
            ['permission' => 'blood-add', 'component_id' => 12 ],
            ['permission' => 'blood-edit', 'component_id' => 12 ],
            ['permission' => 'blood-view', 'component_id' => 12 ],
            ['permission' => 'blood-delete', 'component_id' => 12 ],
            ['permission' => 'blood-action', 'component_id' => 12 ],

            ['permission' => 'detail-access', 'component_id' => 13 ],
            ['permission' => 'detail-add', 'component_id' => 13 ],
            ['permission' => 'detail-edit', 'component_id' => 13 ],
            ['permission' => 'detail-view', 'component_id' => 13 ],
            ['permission' => 'detail-delete', 'component_id' => 13 ],
            ['permission' => 'detail-action', 'component_id' => 13 ],

            ['permission' => 'admindash-access', 'component_id' => 14 ],
            ['permission' => 'admindash-add', 'component_id' => 14 ],
            ['permission' => 'admindash-edit', 'component_id' => 14 ],
            ['permission' => 'admindash-view', 'component_id' => 14 ],
            ['permission' => 'admindash-delete', 'component_id' => 14 ],
            ['permission' => 'admindash-action', 'component_id' => 14 ],
            
           

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
