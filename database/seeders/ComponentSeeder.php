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
            ['id' => 2, 'component' => 'User Type Management'],
            ['id' => 3, 'component' => 'Permission'],
            ['id' => 4, 'component' => 'Permission Component'],
            ['id' => 5, 'component' => 'organization'],
            ['id' => 6, 'component' => 'User'],
            ['id' => 7, 'component' => 'blog'],
            ['id' => 8, 'component' => 'campaign'],
            ['id' => 9, 'component' => 'bloodstock'],
            ['id' => 10, 'component' => 'client'],
            ['id' => 11, 'component' => 'question'],
            ['id' => 12, 'component' => 'blood'],
            ['id' => 13, 'component' => 'detail'],
            ['id' => 14, 'component' => 'Admin Dash'],
        ];

        foreach($items as $item)
        {
            Component::create($item);
        }
    }
}
