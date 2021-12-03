<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Component;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Component::truncate();
        $items = [
            ['id' => 1, 'component' => 'User Management'],
            ['id' => 2, 'component' => 'Role Management'],
            ['id' => 3, 'component' => 'Permission'],
            ['id' => 4, 'component' => 'Permission Component'],
            ['id' => 5, 'component' => 'Organization'],
            ['id' => 6, 'component' => 'User'],
        ];

        foreach($items as $item)
        {
            Component::create($item);
        }
    }
}
