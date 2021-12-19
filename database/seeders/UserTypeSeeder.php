<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\UserType;
class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        UserType::truncate();
        $items = [
            ['id' => 1, 'user_type' => 'admin'],
            ['id' => 2, 'user_type' => 'client'],
            ['id' => 3, 'user_type' => 'organization'],
            
            
        ];
        //inserts data in items to database
        foreach($items as $item)
        {
            UserType::create($item);
        }
    }
    }

