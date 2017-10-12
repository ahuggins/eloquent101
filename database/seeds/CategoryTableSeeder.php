<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category')->delete();
        
        \DB::table('category')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'name' => 'Action',
                'last_update' => '2006-02-15 04:46:27',
            ),
            1 => 
            array (
                'category_id' => 2,
                'name' => 'Animation',
                'last_update' => '2006-02-15 04:46:27',
            ),
            2 => 
            array (
                'category_id' => 3,
                'name' => 'Children',
                'last_update' => '2006-02-15 04:46:27',
            ),
            3 => 
            array (
                'category_id' => 4,
                'name' => 'Classics',
                'last_update' => '2006-02-15 04:46:27',
            ),
            4 => 
            array (
                'category_id' => 5,
                'name' => 'Comedy',
                'last_update' => '2006-02-15 04:46:27',
            ),
            5 => 
            array (
                'category_id' => 6,
                'name' => 'Documentary',
                'last_update' => '2006-02-15 04:46:27',
            ),
            6 => 
            array (
                'category_id' => 7,
                'name' => 'Drama',
                'last_update' => '2006-02-15 04:46:27',
            ),
            7 => 
            array (
                'category_id' => 8,
                'name' => 'Family',
                'last_update' => '2006-02-15 04:46:27',
            ),
            8 => 
            array (
                'category_id' => 9,
                'name' => 'Foreign',
                'last_update' => '2006-02-15 04:46:27',
            ),
            9 => 
            array (
                'category_id' => 10,
                'name' => 'Games',
                'last_update' => '2006-02-15 04:46:27',
            ),
            10 => 
            array (
                'category_id' => 11,
                'name' => 'Horror',
                'last_update' => '2006-02-15 04:46:27',
            ),
            11 => 
            array (
                'category_id' => 12,
                'name' => 'Music',
                'last_update' => '2006-02-15 04:46:27',
            ),
            12 => 
            array (
                'category_id' => 13,
                'name' => 'New',
                'last_update' => '2006-02-15 04:46:27',
            ),
            13 => 
            array (
                'category_id' => 14,
                'name' => 'Sci-Fi',
                'last_update' => '2006-02-15 04:46:27',
            ),
            14 => 
            array (
                'category_id' => 15,
                'name' => 'Sports',
                'last_update' => '2006-02-15 04:46:27',
            ),
            15 => 
            array (
                'category_id' => 16,
                'name' => 'Travel',
                'last_update' => '2006-02-15 04:46:27',
            ),
        ));
        
        
    }
}