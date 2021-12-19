<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Admin::truncate();
        $items = [
            [
                'alt_email'=>'admin1@superadmin.com',
                'first_name'=>'admin', 
                'last_name'=>'admin', 
                'email' => 'admin@admin.com', 
                'password' => bcrypt('hello123'), 
                'contact' =>'',
                'address' => 'locate',
                'user_id' => 1
                
                ]
        ];

        foreach($items as $item){
            Admin::create($item);
        }
    }
}
