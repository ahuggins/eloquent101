<?php

use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('language')->delete();
        
        \DB::table('language')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'English',
                'updated_at' => '2006-02-15 05:02:19',
                'created_at' => '2017-10-12 00:07:38',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Italian',
                'updated_at' => '2006-02-15 05:02:19',
                'created_at' => '2017-10-12 00:07:38',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Japanese',
                'updated_at' => '2006-02-15 05:02:19',
                'created_at' => '2017-10-12 00:07:38',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Mandarin',
                'updated_at' => '2006-02-15 05:02:19',
                'created_at' => '2017-10-12 00:07:38',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'French',
                'updated_at' => '2006-02-15 05:02:19',
                'created_at' => '2017-10-12 00:07:38',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'German',
                'updated_at' => '2006-02-15 05:02:19',
                'created_at' => '2017-10-12 00:07:38',
            ),
        ));
        
        
    }
}