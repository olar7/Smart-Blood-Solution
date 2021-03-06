<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\User;
use App\Models\Organization;
use App\Models\Admin;
use App\Models\Client;
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
        Client::truncate();
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
        ];

        foreach($items as $item){
            User::create($item);
        }
    }
}
