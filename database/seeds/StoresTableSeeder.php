<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stores')->delete();
        
        \DB::table('stores')->insert(array (
            0 => 
            array (
                'id' => 1,
                'manager_staff_id' => 1,
                'address_id' => 1,
                'updated_at' => '2006-02-15 04:57:12',
                'created_at' => '2017-10-12 00:07:37',
            ),
            1 => 
            array (
                'id' => 2,
                'manager_staff_id' => 2,
                'address_id' => 2,
                'updated_at' => '2006-02-15 04:57:12',
                'created_at' => '2017-10-12 00:07:37',
            ),
        ));
        
        
    }
}