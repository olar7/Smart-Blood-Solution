<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Organization;
use DB;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Organization::truncate();
        $items = [
            [
                'description'=>'admin1@superadmin.com',
                'slogan'=>'admin slo',
                'logo'=>'',
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
                Organization::create($item);
            }
    }
}
