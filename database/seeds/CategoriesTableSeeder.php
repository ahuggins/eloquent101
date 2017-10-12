<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Action',
                'updated_at' => '2006-02-15 04:46:27',
                'created_at' => '2017-10-12 00:07:37',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Animation',
                'updated_at' => '2006-02-15 04:46:27',
                'created_at' => '2017-10-12 00:07:37',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Children',
                'updated_at' => '2006-02-15 04:46:27',
                'created_at' => '2017-10-12 00:07:37',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Classics',
                'updated_at' => '2006-02-15 04:46:27',
                'created_at' => '2017-10-12 00:07:37',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Comedy',
                'updated_at' => '2006-02-15 04:46:27',
                'created_at' => '2017-10-12 00:07:37',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Documentary',
                'updated_at' => '2006-02-15 04:46:27',
                'created_at' => '2017-10-12 00:07:37',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Drama',
                'updated_at' => '2006-02-15 04:46:27',
                'created_at' => '2017-10-12 00:07:37',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Family',
                'updated_at' => '2006-02-15 04:46:27',
                'created_at' => '2017-10-12 00:07:37',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Foreign',
                'updated_at' => '2006-02-15 04:46:27',
                'created_at' => '2017-10-12 00:07:37',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Games',
                'updated_at' => '2006-02-15 04:46:27',
                'created_at' => '2017-10-12 00:07:37',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Horror',
                'updated_at' => '2006-02-15 04:46:27',
                'created_at' => '2017-10-12 00:07:37',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Music',
                'updated_at' => '2006-02-15 04:46:27',
                'created_at' => '2017-10-12 00:07:37',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'New',
                'updated_at' => '2006-02-15 04:46:27',
                'created_at' => '2017-10-12 00:07:37',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Sci-Fi',
                'updated_at' => '2006-02-15 04:46:27',
                'created_at' => '2017-10-12 00:07:37',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Sports',
                'updated_at' => '2006-02-15 04:46:27',
                'created_at' => '2017-10-12 00:07:37',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Travel',
                'updated_at' => '2006-02-15 04:46:27',
                'created_at' => '2017-10-12 00:07:37',
            ),
        ));
        
        
    }
}