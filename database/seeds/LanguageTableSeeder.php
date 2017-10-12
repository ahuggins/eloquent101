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
                'language_id' => 1,
                'name' => 'English',
                'updated_at' => '2006-02-15 05:02:19',
            ),
            1 => 
            array (
                'language_id' => 2,
                'name' => 'Italian',
                'updated_at' => '2006-02-15 05:02:19',
            ),
            2 => 
            array (
                'language_id' => 3,
                'name' => 'Japanese',
                'updated_at' => '2006-02-15 05:02:19',
            ),
            3 => 
            array (
                'language_id' => 4,
                'name' => 'Mandarin',
                'updated_at' => '2006-02-15 05:02:19',
            ),
            4 => 
            array (
                'language_id' => 5,
                'name' => 'French',
                'updated_at' => '2006-02-15 05:02:19',
            ),
            5 => 
            array (
                'language_id' => 6,
                'name' => 'German',
                'updated_at' => '2006-02-15 05:02:19',
            ),
        ));
        
        
    }
}
