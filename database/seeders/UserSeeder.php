<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\User;
use App\Models\Organization;
use App\Models\Admin;
class UserSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        User::truncate();
        Organization::truncate();
        Admin::truncate();
        $items = [
            [
                'first_name'=>'admin', 
                'last_name'=>'admin', 
                'email' => 'admin@admin.com', 
                'password' => bcrypt('hello123'), 
                'contact' =>'',
                'address' => 'locate',
                'user_type_id' => 1
                
            ],
            [
                'first_name'=>'client', 
                'last_name'=>'client', 
                'email' => 'client@client.com', 
                'password' => bcrypt('hello123'), 
                'contact' =>'01-8890',
                'address' => 'add',
                
                'user_type_id' => 1
            ]
        ];

        foreach($items as $item){
            User::create($item);
        }
    }
}
