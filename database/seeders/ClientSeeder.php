<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Client::truncate();
        $items = [
            [
                'alt_email'=>'admin1@superadmin.com',
                'first_name'=>'admin', 
                'last_name'=>'admin', 
                'email' => 'admin@admin.com', 
                'password' => bcrypt('hello123'), 
                'contact' =>'',
                'address' => 'locate',
                'blood_group' =>'A+ ve',
                'user_id' => 2

                
            ],
        ];

        foreach($items as $item){
            Client::create($item);
        }
    }
}
