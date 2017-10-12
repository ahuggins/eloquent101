<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staff')->delete();
        
        \DB::table('staff')->insert(array (
            0 => 
            array (
                'id' => 1,
                'first_name' => 'Mike',
                'last_name' => 'Hillyer',
                'address_id' => 3,
                'picture' => NULL,
                'email' => 'Mike.Hillyer@sakilastaff.com',
                'store_id' => 1,
                'active' => 1,
                'username' => 'Mike',
                'password' => '8cb2237d0679ca88db6464eac60da96345513964',
                'updated_at' => '2006-02-15 03:57:16',
                'created_at' => '2017-10-12 00:07:37',
            ),
            1 => 
            array (
                'id' => 2,
                'first_name' => 'Jon',
                'last_name' => 'Stephens',
                'address_id' => 4,
                'picture' => NULL,
                'email' => 'Jon.Stephens@sakilastaff.com',
                'store_id' => 2,
                'active' => 1,
                'username' => 'Jon',
                'password' => NULL,
                'updated_at' => '2006-02-15 03:57:16',
                'created_at' => '2017-10-12 00:07:37',
            ),
        ));
        
        
    }
}