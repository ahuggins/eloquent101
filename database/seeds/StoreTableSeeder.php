<?php

use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('store')->delete();
        
        \DB::table('store')->insert(array (
            0 => 
            array (
                'store_id' => 1,
                'manager_staff_id' => 1,
                'address_id' => 1,
                'last_update' => '2006-02-15 04:57:12',
            ),
            1 => 
            array (
                'store_id' => 2,
                'manager_staff_id' => 2,
                'address_id' => 2,
                'last_update' => '2006-02-15 04:57:12',
            ),
        ));
        
        
    }
}