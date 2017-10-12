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
                'updated_at' => '2006-02-15 04:46:27',
            ),
            1 => 
            array (
                'category_id' => 2,
                'name' => 'Animation',
                'updated_at' => '2006-02-15 04:46:27',
            ),
            2 => 
            array (
                'category_id' => 3,
                'name' => 'Children',
                'updated_at' => '2006-02-15 04:46:27',
            ),
            3 => 
            array (
                'category_id' => 4,
                'name' => 'Classics',
                'updated_at' => '2006-02-15 04:46:27',
            ),
            4 => 
            array (
                'category_id' => 5,
                'name' => 'Comedy',
                'updated_at' => '2006-02-15 04:46:27',
            ),
            5 => 
            array (
                'category_id' => 6,
                'name' => 'Documentary',
                'updated_at' => '2006-02-15 04:46:27',
            ),
            6 => 
            array (
                'category_id' => 7,
                'name' => 'Drama',
                'updated_at' => '2006-02-15 04:46:27',
            ),
            7 => 
            array (
                'category_id' => 8,
                'name' => 'Family',
                'updated_at' => '2006-02-15 04:46:27',
            ),
            8 => 
            array (
                'category_id' => 9,
                'name' => 'Foreign',
                'updated_at' => '2006-02-15 04:46:27',
            ),
            9 => 
            array (
                'category_id' => 10,
                'name' => 'Games',
                'updated_at' => '2006-02-15 04:46:27',
            ),
            10 => 
            array (
                'category_id' => 11,
                'name' => 'Horror',
                'updated_at' => '2006-02-15 04:46:27',
            ),
            11 => 
            array (
                'category_id' => 12,
                'name' => 'Music',
                'updated_at' => '2006-02-15 04:46:27',
            ),
            12 => 
            array (
                'category_id' => 13,
                'name' => 'New',
                'updated_at' => '2006-02-15 04:46:27',
            ),
            13 => 
            array (
                'category_id' => 14,
                'name' => 'Sci-Fi',
                'updated_at' => '2006-02-15 04:46:27',
            ),
            14 => 
            array (
                'category_id' => 15,
                'name' => 'Sports',
                'updated_at' => '2006-02-15 04:46:27',
            ),
            15 => 
            array (
                'category_id' => 16,
                'name' => 'Travel',
                'updated_at' => '2006-02-15 04:46:27',
            ),
        ));
        
        
    }
}
