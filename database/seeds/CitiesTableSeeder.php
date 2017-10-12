<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
            'city' => 'A Corua (La Corua)',
                'country_id' => 87,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            1 => 
            array (
                'id' => 2,
                'city' => 'Abha',
                'country_id' => 82,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            2 => 
            array (
                'id' => 3,
                'city' => 'Abu Dhabi',
                'country_id' => 101,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            3 => 
            array (
                'id' => 4,
                'city' => 'Acua',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            4 => 
            array (
                'id' => 5,
                'city' => 'Adana',
                'country_id' => 97,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            5 => 
            array (
                'id' => 6,
                'city' => 'Addis Abeba',
                'country_id' => 31,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            6 => 
            array (
                'id' => 7,
                'city' => 'Aden',
                'country_id' => 107,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            7 => 
            array (
                'id' => 8,
                'city' => 'Adoni',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            8 => 
            array (
                'id' => 9,
                'city' => 'Ahmadnagar',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            9 => 
            array (
                'id' => 10,
                'city' => 'Akishima',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            10 => 
            array (
                'id' => 11,
                'city' => 'Akron',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            11 => 
            array (
                'id' => 12,
                'city' => 'al-Ayn',
                'country_id' => 101,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            12 => 
            array (
                'id' => 13,
                'city' => 'al-Hawiya',
                'country_id' => 82,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            13 => 
            array (
                'id' => 14,
                'city' => 'al-Manama',
                'country_id' => 11,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            14 => 
            array (
                'id' => 15,
                'city' => 'al-Qadarif',
                'country_id' => 89,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            15 => 
            array (
                'id' => 16,
                'city' => 'al-Qatif',
                'country_id' => 82,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            16 => 
            array (
                'id' => 17,
                'city' => 'Alessandria',
                'country_id' => 49,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            17 => 
            array (
                'id' => 18,
            'city' => 'Allappuzha (Alleppey)',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            18 => 
            array (
                'id' => 19,
                'city' => 'Allende',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            19 => 
            array (
                'id' => 20,
                'city' => 'Almirante Brown',
                'country_id' => 6,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            20 => 
            array (
                'id' => 21,
                'city' => 'Alvorada',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            21 => 
            array (
                'id' => 22,
                'city' => 'Ambattur',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            22 => 
            array (
                'id' => 23,
                'city' => 'Amersfoort',
                'country_id' => 67,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            23 => 
            array (
                'id' => 24,
                'city' => 'Amroha',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            24 => 
            array (
                'id' => 25,
                'city' => 'Angra dos Reis',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            25 => 
            array (
                'id' => 26,
                'city' => 'Anpolis',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            26 => 
            array (
                'id' => 27,
                'city' => 'Antofagasta',
                'country_id' => 22,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            27 => 
            array (
                'id' => 28,
                'city' => 'Aparecida de Goinia',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            28 => 
            array (
                'id' => 29,
                'city' => 'Apeldoorn',
                'country_id' => 67,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            29 => 
            array (
                'id' => 30,
                'city' => 'Araatuba',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            30 => 
            array (
                'id' => 31,
                'city' => 'Arak',
                'country_id' => 46,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            31 => 
            array (
                'id' => 32,
                'city' => 'Arecibo',
                'country_id' => 77,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            32 => 
            array (
                'id' => 33,
                'city' => 'Arlington',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            33 => 
            array (
                'id' => 34,
                'city' => 'Ashdod',
                'country_id' => 48,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            34 => 
            array (
                'id' => 35,
                'city' => 'Ashgabat',
                'country_id' => 98,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            35 => 
            array (
                'id' => 36,
                'city' => 'Ashqelon',
                'country_id' => 48,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            36 => 
            array (
                'id' => 37,
                'city' => 'Asuncin',
                'country_id' => 73,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            37 => 
            array (
                'id' => 38,
                'city' => 'Athenai',
                'country_id' => 39,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            38 => 
            array (
                'id' => 39,
                'city' => 'Atinsk',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            39 => 
            array (
                'id' => 40,
                'city' => 'Atlixco',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            40 => 
            array (
                'id' => 41,
                'city' => 'Augusta-Richmond County',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            41 => 
            array (
                'id' => 42,
                'city' => 'Aurora',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            42 => 
            array (
                'id' => 43,
                'city' => 'Avellaneda',
                'country_id' => 6,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            43 => 
            array (
                'id' => 44,
                'city' => 'Bag',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            44 => 
            array (
                'id' => 45,
                'city' => 'Baha Blanca',
                'country_id' => 6,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            45 => 
            array (
                'id' => 46,
                'city' => 'Baicheng',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            46 => 
            array (
                'id' => 47,
                'city' => 'Baiyin',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            47 => 
            array (
                'id' => 48,
                'city' => 'Baku',
                'country_id' => 10,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            48 => 
            array (
                'id' => 49,
                'city' => 'Balaiha',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            49 => 
            array (
                'id' => 50,
                'city' => 'Balikesir',
                'country_id' => 97,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            50 => 
            array (
                'id' => 51,
                'city' => 'Balurghat',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            51 => 
            array (
                'id' => 52,
                'city' => 'Bamenda',
                'country_id' => 19,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            52 => 
            array (
                'id' => 53,
                'city' => 'Bandar Seri Begawan',
                'country_id' => 16,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            53 => 
            array (
                'id' => 54,
                'city' => 'Banjul',
                'country_id' => 37,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            54 => 
            array (
                'id' => 55,
                'city' => 'Barcelona',
                'country_id' => 104,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            55 => 
            array (
                'id' => 56,
                'city' => 'Basel',
                'country_id' => 91,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            56 => 
            array (
                'id' => 57,
                'city' => 'Bat Yam',
                'country_id' => 48,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            57 => 
            array (
                'id' => 58,
                'city' => 'Batman',
                'country_id' => 97,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            58 => 
            array (
                'id' => 59,
                'city' => 'Batna',
                'country_id' => 2,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            59 => 
            array (
                'id' => 60,
                'city' => 'Battambang',
                'country_id' => 18,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            60 => 
            array (
                'id' => 61,
                'city' => 'Baybay',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            61 => 
            array (
                'id' => 62,
                'city' => 'Bayugan',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            62 => 
            array (
                'id' => 63,
                'city' => 'Bchar',
                'country_id' => 2,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            63 => 
            array (
                'id' => 64,
                'city' => 'Beira',
                'country_id' => 63,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            64 => 
            array (
                'id' => 65,
                'city' => 'Bellevue',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            65 => 
            array (
                'id' => 66,
                'city' => 'Belm',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            66 => 
            array (
                'id' => 67,
                'city' => 'Benguela',
                'country_id' => 4,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            67 => 
            array (
                'id' => 68,
                'city' => 'Beni-Mellal',
                'country_id' => 62,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            68 => 
            array (
                'id' => 69,
                'city' => 'Benin City',
                'country_id' => 69,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            69 => 
            array (
                'id' => 70,
                'city' => 'Bergamo',
                'country_id' => 49,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            70 => 
            array (
                'id' => 71,
            'city' => 'Berhampore (Baharampur)',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            71 => 
            array (
                'id' => 72,
                'city' => 'Bern',
                'country_id' => 91,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            72 => 
            array (
                'id' => 73,
                'city' => 'Bhavnagar',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            73 => 
            array (
                'id' => 74,
                'city' => 'Bhilwara',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            74 => 
            array (
                'id' => 75,
                'city' => 'Bhimavaram',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            75 => 
            array (
                'id' => 76,
                'city' => 'Bhopal',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            76 => 
            array (
                'id' => 77,
                'city' => 'Bhusawal',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            77 => 
            array (
                'id' => 78,
                'city' => 'Bijapur',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            78 => 
            array (
                'id' => 79,
                'city' => 'Bilbays',
                'country_id' => 29,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            79 => 
            array (
                'id' => 80,
                'city' => 'Binzhou',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            80 => 
            array (
                'id' => 81,
                'city' => 'Birgunj',
                'country_id' => 66,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            81 => 
            array (
                'id' => 82,
                'city' => 'Bislig',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            82 => 
            array (
                'id' => 83,
                'city' => 'Blumenau',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            83 => 
            array (
                'id' => 84,
                'city' => 'Boa Vista',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            84 => 
            array (
                'id' => 85,
                'city' => 'Boksburg',
                'country_id' => 85,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            85 => 
            array (
                'id' => 86,
                'city' => 'Botosani',
                'country_id' => 78,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            86 => 
            array (
                'id' => 87,
                'city' => 'Botshabelo',
                'country_id' => 85,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            87 => 
            array (
                'id' => 88,
                'city' => 'Bradford',
                'country_id' => 102,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            88 => 
            array (
                'id' => 89,
                'city' => 'Braslia',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            89 => 
            array (
                'id' => 90,
                'city' => 'Bratislava',
                'country_id' => 84,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            90 => 
            array (
                'id' => 91,
                'city' => 'Brescia',
                'country_id' => 49,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            91 => 
            array (
                'id' => 92,
                'city' => 'Brest',
                'country_id' => 34,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            92 => 
            array (
                'id' => 93,
                'city' => 'Brindisi',
                'country_id' => 49,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            93 => 
            array (
                'id' => 94,
                'city' => 'Brockton',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            94 => 
            array (
                'id' => 95,
                'city' => 'Bucuresti',
                'country_id' => 78,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            95 => 
            array (
                'id' => 96,
                'city' => 'Buenaventura',
                'country_id' => 24,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            96 => 
            array (
                'id' => 97,
                'city' => 'Bydgoszcz',
                'country_id' => 76,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            97 => 
            array (
                'id' => 98,
                'city' => 'Cabuyao',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            98 => 
            array (
                'id' => 99,
                'city' => 'Callao',
                'country_id' => 74,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            99 => 
            array (
                'id' => 100,
                'city' => 'Cam Ranh',
                'country_id' => 105,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            100 => 
            array (
                'id' => 101,
                'city' => 'Cape Coral',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            101 => 
            array (
                'id' => 102,
                'city' => 'Caracas',
                'country_id' => 104,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            102 => 
            array (
                'id' => 103,
                'city' => 'Carmen',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            103 => 
            array (
                'id' => 104,
                'city' => 'Cavite',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            104 => 
            array (
                'id' => 105,
                'city' => 'Cayenne',
                'country_id' => 35,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            105 => 
            array (
                'id' => 106,
                'city' => 'Celaya',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            106 => 
            array (
                'id' => 107,
                'city' => 'Chandrapur',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            107 => 
            array (
                'id' => 108,
                'city' => 'Changhwa',
                'country_id' => 92,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            108 => 
            array (
                'id' => 109,
                'city' => 'Changzhou',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            109 => 
            array (
                'id' => 110,
                'city' => 'Chapra',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            110 => 
            array (
                'id' => 111,
                'city' => 'Charlotte Amalie',
                'country_id' => 106,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            111 => 
            array (
                'id' => 112,
                'city' => 'Chatsworth',
                'country_id' => 85,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            112 => 
            array (
                'id' => 113,
                'city' => 'Cheju',
                'country_id' => 86,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            113 => 
            array (
                'id' => 114,
                'city' => 'Chiayi',
                'country_id' => 92,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            114 => 
            array (
                'id' => 115,
                'city' => 'Chisinau',
                'country_id' => 61,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            115 => 
            array (
                'id' => 116,
                'city' => 'Chungho',
                'country_id' => 92,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            116 => 
            array (
                'id' => 117,
                'city' => 'Cianjur',
                'country_id' => 45,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            117 => 
            array (
                'id' => 118,
                'city' => 'Ciomas',
                'country_id' => 45,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            118 => 
            array (
                'id' => 119,
                'city' => 'Ciparay',
                'country_id' => 45,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            119 => 
            array (
                'id' => 120,
                'city' => 'Citrus Heights',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            120 => 
            array (
                'id' => 121,
                'city' => 'Citt del Vaticano',
                'country_id' => 41,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            121 => 
            array (
                'id' => 122,
                'city' => 'Ciudad del Este',
                'country_id' => 73,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            122 => 
            array (
                'id' => 123,
                'city' => 'Clarksville',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            123 => 
            array (
                'id' => 124,
                'city' => 'Coacalco de Berriozbal',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            124 => 
            array (
                'id' => 125,
                'city' => 'Coatzacoalcos',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            125 => 
            array (
                'id' => 126,
                'city' => 'Compton',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            126 => 
            array (
                'id' => 127,
                'city' => 'Coquimbo',
                'country_id' => 22,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            127 => 
            array (
                'id' => 128,
                'city' => 'Crdoba',
                'country_id' => 6,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            128 => 
            array (
                'id' => 129,
                'city' => 'Cuauhtmoc',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            129 => 
            array (
                'id' => 130,
                'city' => 'Cuautla',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            130 => 
            array (
                'id' => 131,
                'city' => 'Cuernavaca',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            131 => 
            array (
                'id' => 132,
                'city' => 'Cuman',
                'country_id' => 104,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            132 => 
            array (
                'id' => 133,
                'city' => 'Czestochowa',
                'country_id' => 76,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            133 => 
            array (
                'id' => 134,
                'city' => 'Dadu',
                'country_id' => 72,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            134 => 
            array (
                'id' => 135,
                'city' => 'Dallas',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            135 => 
            array (
                'id' => 136,
                'city' => 'Datong',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            136 => 
            array (
                'id' => 137,
                'city' => 'Daugavpils',
                'country_id' => 54,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            137 => 
            array (
                'id' => 138,
                'city' => 'Davao',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            138 => 
            array (
                'id' => 139,
                'city' => 'Daxian',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            139 => 
            array (
                'id' => 140,
                'city' => 'Dayton',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            140 => 
            array (
                'id' => 141,
                'city' => 'Deba Habe',
                'country_id' => 69,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            141 => 
            array (
                'id' => 142,
                'city' => 'Denizli',
                'country_id' => 97,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            142 => 
            array (
                'id' => 143,
                'city' => 'Dhaka',
                'country_id' => 12,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            143 => 
            array (
                'id' => 144,
            'city' => 'Dhule (Dhulia)',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            144 => 
            array (
                'id' => 145,
                'city' => 'Dongying',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            145 => 
            array (
                'id' => 146,
                'city' => 'Donostia-San Sebastin',
                'country_id' => 87,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            146 => 
            array (
                'id' => 147,
                'city' => 'Dos Quebradas',
                'country_id' => 24,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            147 => 
            array (
                'id' => 148,
                'city' => 'Duisburg',
                'country_id' => 38,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            148 => 
            array (
                'id' => 149,
                'city' => 'Dundee',
                'country_id' => 102,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            149 => 
            array (
                'id' => 150,
                'city' => 'Dzerzinsk',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            150 => 
            array (
                'id' => 151,
                'city' => 'Ede',
                'country_id' => 67,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            151 => 
            array (
                'id' => 152,
                'city' => 'Effon-Alaiye',
                'country_id' => 69,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            152 => 
            array (
                'id' => 153,
                'city' => 'El Alto',
                'country_id' => 14,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            153 => 
            array (
                'id' => 154,
                'city' => 'El Fuerte',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            154 => 
            array (
                'id' => 155,
                'city' => 'El Monte',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            155 => 
            array (
                'id' => 156,
                'city' => 'Elista',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            156 => 
            array (
                'id' => 157,
                'city' => 'Emeishan',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            157 => 
            array (
                'id' => 158,
                'city' => 'Emmen',
                'country_id' => 67,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            158 => 
            array (
                'id' => 159,
                'city' => 'Enshi',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            159 => 
            array (
                'id' => 160,
                'city' => 'Erlangen',
                'country_id' => 38,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            160 => 
            array (
                'id' => 161,
                'city' => 'Escobar',
                'country_id' => 6,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            161 => 
            array (
                'id' => 162,
                'city' => 'Esfahan',
                'country_id' => 46,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            162 => 
            array (
                'id' => 163,
                'city' => 'Eskisehir',
                'country_id' => 97,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            163 => 
            array (
                'id' => 164,
                'city' => 'Etawah',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            164 => 
            array (
                'id' => 165,
                'city' => 'Ezeiza',
                'country_id' => 6,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            165 => 
            array (
                'id' => 166,
                'city' => 'Ezhou',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            166 => 
            array (
                'id' => 167,
                'city' => 'Faaa',
                'country_id' => 36,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            167 => 
            array (
                'id' => 168,
                'city' => 'Fengshan',
                'country_id' => 92,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            168 => 
            array (
                'id' => 169,
                'city' => 'Firozabad',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            169 => 
            array (
                'id' => 170,
                'city' => 'Florencia',
                'country_id' => 24,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            170 => 
            array (
                'id' => 171,
                'city' => 'Fontana',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            171 => 
            array (
                'id' => 172,
                'city' => 'Fukuyama',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            172 => 
            array (
                'id' => 173,
                'city' => 'Funafuti',
                'country_id' => 99,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            173 => 
            array (
                'id' => 174,
                'city' => 'Fuyu',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            174 => 
            array (
                'id' => 175,
                'city' => 'Fuzhou',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            175 => 
            array (
                'id' => 176,
                'city' => 'Gandhinagar',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            176 => 
            array (
                'id' => 177,
                'city' => 'Garden Grove',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            177 => 
            array (
                'id' => 178,
                'city' => 'Garland',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            178 => 
            array (
                'id' => 179,
                'city' => 'Gatineau',
                'country_id' => 20,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            179 => 
            array (
                'id' => 180,
                'city' => 'Gaziantep',
                'country_id' => 97,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            180 => 
            array (
                'id' => 181,
                'city' => 'Gijn',
                'country_id' => 87,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            181 => 
            array (
                'id' => 182,
                'city' => 'Gingoog',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            182 => 
            array (
                'id' => 183,
                'city' => 'Goinia',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            183 => 
            array (
                'id' => 184,
                'city' => 'Gorontalo',
                'country_id' => 45,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            184 => 
            array (
                'id' => 185,
                'city' => 'Grand Prairie',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            185 => 
            array (
                'id' => 186,
                'city' => 'Graz',
                'country_id' => 9,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            186 => 
            array (
                'id' => 187,
                'city' => 'Greensboro',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            187 => 
            array (
                'id' => 188,
                'city' => 'Guadalajara',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            188 => 
            array (
                'id' => 189,
                'city' => 'Guaruj',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            189 => 
            array (
                'id' => 190,
                'city' => 'guas Lindas de Gois',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            190 => 
            array (
                'id' => 191,
                'city' => 'Gulbarga',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            191 => 
            array (
                'id' => 192,
                'city' => 'Hagonoy',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            192 => 
            array (
                'id' => 193,
                'city' => 'Haining',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            193 => 
            array (
                'id' => 194,
                'city' => 'Haiphong',
                'country_id' => 105,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            194 => 
            array (
                'id' => 195,
                'city' => 'Haldia',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            195 => 
            array (
                'id' => 196,
                'city' => 'Halifax',
                'country_id' => 20,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            196 => 
            array (
                'id' => 197,
                'city' => 'Halisahar',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            197 => 
            array (
                'id' => 198,
                'city' => 'Halle/Saale',
                'country_id' => 38,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            198 => 
            array (
                'id' => 199,
                'city' => 'Hami',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            199 => 
            array (
                'id' => 200,
                'city' => 'Hamilton',
                'country_id' => 68,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            200 => 
            array (
                'id' => 201,
                'city' => 'Hanoi',
                'country_id' => 105,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            201 => 
            array (
                'id' => 202,
                'city' => 'Hidalgo',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            202 => 
            array (
                'id' => 203,
                'city' => 'Higashiosaka',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            203 => 
            array (
                'id' => 204,
                'city' => 'Hino',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            204 => 
            array (
                'id' => 205,
                'city' => 'Hiroshima',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            205 => 
            array (
                'id' => 206,
                'city' => 'Hodeida',
                'country_id' => 107,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            206 => 
            array (
                'id' => 207,
                'city' => 'Hohhot',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            207 => 
            array (
                'id' => 208,
                'city' => 'Hoshiarpur',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            208 => 
            array (
                'id' => 209,
                'city' => 'Hsichuh',
                'country_id' => 92,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            209 => 
            array (
                'id' => 210,
                'city' => 'Huaian',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            210 => 
            array (
                'id' => 211,
                'city' => 'Hubli-Dharwad',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            211 => 
            array (
                'id' => 212,
                'city' => 'Huejutla de Reyes',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            212 => 
            array (
                'id' => 213,
                'city' => 'Huixquilucan',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            213 => 
            array (
                'id' => 214,
                'city' => 'Hunuco',
                'country_id' => 74,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            214 => 
            array (
                'id' => 215,
                'city' => 'Ibirit',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            215 => 
            array (
                'id' => 216,
                'city' => 'Idfu',
                'country_id' => 29,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            216 => 
            array (
                'id' => 217,
                'city' => 'Ife',
                'country_id' => 69,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            217 => 
            array (
                'id' => 218,
                'city' => 'Ikerre',
                'country_id' => 69,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            218 => 
            array (
                'id' => 219,
                'city' => 'Iligan',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            219 => 
            array (
                'id' => 220,
                'city' => 'Ilorin',
                'country_id' => 69,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            220 => 
            array (
                'id' => 221,
                'city' => 'Imus',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            221 => 
            array (
                'id' => 222,
                'city' => 'Inegl',
                'country_id' => 97,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            222 => 
            array (
                'id' => 223,
                'city' => 'Ipoh',
                'country_id' => 59,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            223 => 
            array (
                'id' => 224,
                'city' => 'Isesaki',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            224 => 
            array (
                'id' => 225,
                'city' => 'Ivanovo',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            225 => 
            array (
                'id' => 226,
                'city' => 'Iwaki',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            226 => 
            array (
                'id' => 227,
                'city' => 'Iwakuni',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            227 => 
            array (
                'id' => 228,
                'city' => 'Iwatsuki',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            228 => 
            array (
                'id' => 229,
                'city' => 'Izumisano',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            229 => 
            array (
                'id' => 230,
                'city' => 'Jaffna',
                'country_id' => 88,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            230 => 
            array (
                'id' => 231,
                'city' => 'Jaipur',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            231 => 
            array (
                'id' => 232,
                'city' => 'Jakarta',
                'country_id' => 45,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            232 => 
            array (
                'id' => 233,
                'city' => 'Jalib al-Shuyukh',
                'country_id' => 53,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            233 => 
            array (
                'id' => 234,
                'city' => 'Jamalpur',
                'country_id' => 12,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            234 => 
            array (
                'id' => 235,
                'city' => 'Jaroslavl',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            235 => 
            array (
                'id' => 236,
                'city' => 'Jastrzebie-Zdrj',
                'country_id' => 76,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            236 => 
            array (
                'id' => 237,
                'city' => 'Jedda',
                'country_id' => 82,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            237 => 
            array (
                'id' => 238,
                'city' => 'Jelets',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            238 => 
            array (
                'id' => 239,
                'city' => 'Jhansi',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            239 => 
            array (
                'id' => 240,
                'city' => 'Jinchang',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            240 => 
            array (
                'id' => 241,
                'city' => 'Jining',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            241 => 
            array (
                'id' => 242,
                'city' => 'Jinzhou',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            242 => 
            array (
                'id' => 243,
                'city' => 'Jodhpur',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            243 => 
            array (
                'id' => 244,
                'city' => 'Johannesburg',
                'country_id' => 85,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            244 => 
            array (
                'id' => 245,
                'city' => 'Joliet',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            245 => 
            array (
                'id' => 246,
                'city' => 'Jos Azueta',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            246 => 
            array (
                'id' => 247,
                'city' => 'Juazeiro do Norte',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            247 => 
            array (
                'id' => 248,
                'city' => 'Juiz de Fora',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            248 => 
            array (
                'id' => 249,
                'city' => 'Junan',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            249 => 
            array (
                'id' => 250,
                'city' => 'Jurez',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            250 => 
            array (
                'id' => 251,
                'city' => 'Kabul',
                'country_id' => 1,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            251 => 
            array (
                'id' => 252,
                'city' => 'Kaduna',
                'country_id' => 69,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            252 => 
            array (
                'id' => 253,
                'city' => 'Kakamigahara',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            253 => 
            array (
                'id' => 254,
                'city' => 'Kaliningrad',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            254 => 
            array (
                'id' => 255,
                'city' => 'Kalisz',
                'country_id' => 76,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            255 => 
            array (
                'id' => 256,
                'city' => 'Kamakura',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            256 => 
            array (
                'id' => 257,
                'city' => 'Kamarhati',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            257 => 
            array (
                'id' => 258,
                'city' => 'Kamjanets-Podilskyi',
                'country_id' => 100,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            258 => 
            array (
                'id' => 259,
                'city' => 'Kamyin',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            259 => 
            array (
                'id' => 260,
                'city' => 'Kanazawa',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            260 => 
            array (
                'id' => 261,
                'city' => 'Kanchrapara',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            261 => 
            array (
                'id' => 262,
                'city' => 'Kansas City',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            262 => 
            array (
                'id' => 263,
                'city' => 'Karnal',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            263 => 
            array (
                'id' => 264,
                'city' => 'Katihar',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            264 => 
            array (
                'id' => 265,
                'city' => 'Kermanshah',
                'country_id' => 46,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            265 => 
            array (
                'id' => 266,
                'city' => 'Kilis',
                'country_id' => 97,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            266 => 
            array (
                'id' => 267,
                'city' => 'Kimberley',
                'country_id' => 85,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            267 => 
            array (
                'id' => 268,
                'city' => 'Kimchon',
                'country_id' => 86,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            268 => 
            array (
                'id' => 269,
                'city' => 'Kingstown',
                'country_id' => 81,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            269 => 
            array (
                'id' => 270,
                'city' => 'Kirovo-Tepetsk',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            270 => 
            array (
                'id' => 271,
                'city' => 'Kisumu',
                'country_id' => 52,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            271 => 
            array (
                'id' => 272,
                'city' => 'Kitwe',
                'country_id' => 109,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            272 => 
            array (
                'id' => 273,
                'city' => 'Klerksdorp',
                'country_id' => 85,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            273 => 
            array (
                'id' => 274,
                'city' => 'Kolpino',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            274 => 
            array (
                'id' => 275,
                'city' => 'Konotop',
                'country_id' => 100,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            275 => 
            array (
                'id' => 276,
                'city' => 'Koriyama',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            276 => 
            array (
                'id' => 277,
                'city' => 'Korla',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            277 => 
            array (
                'id' => 278,
                'city' => 'Korolev',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            278 => 
            array (
                'id' => 279,
                'city' => 'Kowloon and New Kowloon',
                'country_id' => 42,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            279 => 
            array (
                'id' => 280,
                'city' => 'Kragujevac',
                'country_id' => 108,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            280 => 
            array (
                'id' => 281,
                'city' => 'Ktahya',
                'country_id' => 97,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            281 => 
            array (
                'id' => 282,
                'city' => 'Kuching',
                'country_id' => 59,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            282 => 
            array (
                'id' => 283,
                'city' => 'Kumbakonam',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            283 => 
            array (
                'id' => 284,
                'city' => 'Kurashiki',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            284 => 
            array (
                'id' => 285,
                'city' => 'Kurgan',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            285 => 
            array (
                'id' => 286,
                'city' => 'Kursk',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            286 => 
            array (
                'id' => 287,
                'city' => 'Kuwana',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            287 => 
            array (
                'id' => 288,
                'city' => 'La Paz',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            288 => 
            array (
                'id' => 289,
                'city' => 'La Plata',
                'country_id' => 6,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            289 => 
            array (
                'id' => 290,
                'city' => 'La Romana',
                'country_id' => 27,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            290 => 
            array (
                'id' => 291,
                'city' => 'Laiwu',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            291 => 
            array (
                'id' => 292,
                'city' => 'Lancaster',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            292 => 
            array (
                'id' => 293,
                'city' => 'Laohekou',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            293 => 
            array (
                'id' => 294,
                'city' => 'Lapu-Lapu',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            294 => 
            array (
                'id' => 295,
                'city' => 'Laredo',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            295 => 
            array (
                'id' => 296,
                'city' => 'Lausanne',
                'country_id' => 91,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            296 => 
            array (
                'id' => 297,
                'city' => 'Le Mans',
                'country_id' => 34,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            297 => 
            array (
                'id' => 298,
                'city' => 'Lengshuijiang',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            298 => 
            array (
                'id' => 299,
                'city' => 'Leshan',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            299 => 
            array (
                'id' => 300,
                'city' => 'Lethbridge',
                'country_id' => 20,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            300 => 
            array (
                'id' => 301,
                'city' => 'Lhokseumawe',
                'country_id' => 45,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            301 => 
            array (
                'id' => 302,
                'city' => 'Liaocheng',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            302 => 
            array (
                'id' => 303,
                'city' => 'Liepaja',
                'country_id' => 54,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            303 => 
            array (
                'id' => 304,
                'city' => 'Lilongwe',
                'country_id' => 58,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            304 => 
            array (
                'id' => 305,
                'city' => 'Lima',
                'country_id' => 74,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            305 => 
            array (
                'id' => 306,
                'city' => 'Lincoln',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            306 => 
            array (
                'id' => 307,
                'city' => 'Linz',
                'country_id' => 9,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            307 => 
            array (
                'id' => 308,
                'city' => 'Lipetsk',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            308 => 
            array (
                'id' => 309,
                'city' => 'Livorno',
                'country_id' => 49,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            309 => 
            array (
                'id' => 310,
                'city' => 'Ljubertsy',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            310 => 
            array (
                'id' => 311,
                'city' => 'Loja',
                'country_id' => 28,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            311 => 
            array (
                'id' => 312,
                'city' => 'London',
                'country_id' => 102,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            312 => 
            array (
                'id' => 313,
                'city' => 'London',
                'country_id' => 20,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            313 => 
            array (
                'id' => 314,
                'city' => 'Lublin',
                'country_id' => 76,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            314 => 
            array (
                'id' => 315,
                'city' => 'Lubumbashi',
                'country_id' => 25,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            315 => 
            array (
                'id' => 316,
                'city' => 'Lungtan',
                'country_id' => 92,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            316 => 
            array (
                'id' => 317,
                'city' => 'Luzinia',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            317 => 
            array (
                'id' => 318,
                'city' => 'Madiun',
                'country_id' => 45,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            318 => 
            array (
                'id' => 319,
                'city' => 'Mahajanga',
                'country_id' => 57,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            319 => 
            array (
                'id' => 320,
                'city' => 'Maikop',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            320 => 
            array (
                'id' => 321,
                'city' => 'Malm',
                'country_id' => 90,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            321 => 
            array (
                'id' => 322,
                'city' => 'Manchester',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            322 => 
            array (
                'id' => 323,
                'city' => 'Mandaluyong',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            323 => 
            array (
                'id' => 324,
                'city' => 'Mandi Bahauddin',
                'country_id' => 72,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            324 => 
            array (
                'id' => 325,
                'city' => 'Mannheim',
                'country_id' => 38,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            325 => 
            array (
                'id' => 326,
                'city' => 'Maracabo',
                'country_id' => 104,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            326 => 
            array (
                'id' => 327,
                'city' => 'Mardan',
                'country_id' => 72,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            327 => 
            array (
                'id' => 328,
                'city' => 'Maring',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            328 => 
            array (
                'id' => 329,
                'city' => 'Masqat',
                'country_id' => 71,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            329 => 
            array (
                'id' => 330,
                'city' => 'Matamoros',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            330 => 
            array (
                'id' => 331,
                'city' => 'Matsue',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            331 => 
            array (
                'id' => 332,
                'city' => 'Meixian',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            332 => 
            array (
                'id' => 333,
                'city' => 'Memphis',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            333 => 
            array (
                'id' => 334,
                'city' => 'Merlo',
                'country_id' => 6,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            334 => 
            array (
                'id' => 335,
                'city' => 'Mexicali',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            335 => 
            array (
                'id' => 336,
                'city' => 'Miraj',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            336 => 
            array (
                'id' => 337,
                'city' => 'Mit Ghamr',
                'country_id' => 29,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            337 => 
            array (
                'id' => 338,
                'city' => 'Miyakonojo',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            338 => 
            array (
                'id' => 339,
                'city' => 'Mogiljov',
                'country_id' => 13,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            339 => 
            array (
                'id' => 340,
                'city' => 'Molodetno',
                'country_id' => 13,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            340 => 
            array (
                'id' => 341,
                'city' => 'Monclova',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            341 => 
            array (
                'id' => 342,
                'city' => 'Monywa',
                'country_id' => 64,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            342 => 
            array (
                'id' => 343,
                'city' => 'Moscow',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            343 => 
            array (
                'id' => 344,
                'city' => 'Mosul',
                'country_id' => 47,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            344 => 
            array (
                'id' => 345,
                'city' => 'Mukateve',
                'country_id' => 100,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            345 => 
            array (
                'id' => 346,
            'city' => 'Munger (Monghyr)',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            346 => 
            array (
                'id' => 347,
                'city' => 'Mwanza',
                'country_id' => 93,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            347 => 
            array (
                'id' => 348,
                'city' => 'Mwene-Ditu',
                'country_id' => 25,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            348 => 
            array (
                'id' => 349,
                'city' => 'Myingyan',
                'country_id' => 64,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            349 => 
            array (
                'id' => 350,
                'city' => 'Mysore',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            350 => 
            array (
                'id' => 351,
                'city' => 'Naala-Porto',
                'country_id' => 63,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            351 => 
            array (
                'id' => 352,
                'city' => 'Nabereznyje Telny',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            352 => 
            array (
                'id' => 353,
                'city' => 'Nador',
                'country_id' => 62,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            353 => 
            array (
                'id' => 354,
                'city' => 'Nagaon',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            354 => 
            array (
                'id' => 355,
                'city' => 'Nagareyama',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            355 => 
            array (
                'id' => 356,
                'city' => 'Najafabad',
                'country_id' => 46,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            356 => 
            array (
                'id' => 357,
                'city' => 'Naju',
                'country_id' => 86,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            357 => 
            array (
                'id' => 358,
                'city' => 'Nakhon Sawan',
                'country_id' => 94,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            358 => 
            array (
                'id' => 359,
                'city' => 'Nam Dinh',
                'country_id' => 105,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            359 => 
            array (
                'id' => 360,
                'city' => 'Namibe',
                'country_id' => 4,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            360 => 
            array (
                'id' => 361,
                'city' => 'Nantou',
                'country_id' => 92,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            361 => 
            array (
                'id' => 362,
                'city' => 'Nanyang',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            362 => 
            array (
                'id' => 363,
                'city' => 'NDjamna',
                'country_id' => 21,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            363 => 
            array (
                'id' => 364,
                'city' => 'Newcastle',
                'country_id' => 85,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            364 => 
            array (
                'id' => 365,
                'city' => 'Nezahualcyotl',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            365 => 
            array (
                'id' => 366,
                'city' => 'Nha Trang',
                'country_id' => 105,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            366 => 
            array (
                'id' => 367,
                'city' => 'Niznekamsk',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            367 => 
            array (
                'id' => 368,
                'city' => 'Novi Sad',
                'country_id' => 108,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            368 => 
            array (
                'id' => 369,
                'city' => 'Novoterkassk',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            369 => 
            array (
                'id' => 370,
                'city' => 'Nukualofa',
                'country_id' => 95,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            370 => 
            array (
                'id' => 371,
                'city' => 'Nuuk',
                'country_id' => 40,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            371 => 
            array (
                'id' => 372,
                'city' => 'Nyeri',
                'country_id' => 52,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            372 => 
            array (
                'id' => 373,
                'city' => 'Ocumare del Tuy',
                'country_id' => 104,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            373 => 
            array (
                'id' => 374,
                'city' => 'Ogbomosho',
                'country_id' => 69,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            374 => 
            array (
                'id' => 375,
                'city' => 'Okara',
                'country_id' => 72,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            375 => 
            array (
                'id' => 376,
                'city' => 'Okayama',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            376 => 
            array (
                'id' => 377,
                'city' => 'Okinawa',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            377 => 
            array (
                'id' => 378,
                'city' => 'Olomouc',
                'country_id' => 26,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            378 => 
            array (
                'id' => 379,
                'city' => 'Omdurman',
                'country_id' => 89,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            379 => 
            array (
                'id' => 380,
                'city' => 'Omiya',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            380 => 
            array (
                'id' => 381,
                'city' => 'Ondo',
                'country_id' => 69,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            381 => 
            array (
                'id' => 382,
                'city' => 'Onomichi',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            382 => 
            array (
                'id' => 383,
                'city' => 'Oshawa',
                'country_id' => 20,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            383 => 
            array (
                'id' => 384,
                'city' => 'Osmaniye',
                'country_id' => 97,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            384 => 
            array (
                'id' => 385,
                'city' => 'ostka',
                'country_id' => 100,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            385 => 
            array (
                'id' => 386,
                'city' => 'Otsu',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            386 => 
            array (
                'id' => 387,
                'city' => 'Oulu',
                'country_id' => 33,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            387 => 
            array (
                'id' => 388,
            'city' => 'Ourense (Orense)',
                'country_id' => 87,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            388 => 
            array (
                'id' => 389,
                'city' => 'Owo',
                'country_id' => 69,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            389 => 
            array (
                'id' => 390,
                'city' => 'Oyo',
                'country_id' => 69,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            390 => 
            array (
                'id' => 391,
                'city' => 'Ozamis',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            391 => 
            array (
                'id' => 392,
                'city' => 'Paarl',
                'country_id' => 85,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            392 => 
            array (
                'id' => 393,
                'city' => 'Pachuca de Soto',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            393 => 
            array (
                'id' => 394,
                'city' => 'Pak Kret',
                'country_id' => 94,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            394 => 
            array (
                'id' => 395,
            'city' => 'Palghat (Palakkad)',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            395 => 
            array (
                'id' => 396,
                'city' => 'Pangkal Pinang',
                'country_id' => 45,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            396 => 
            array (
                'id' => 397,
                'city' => 'Papeete',
                'country_id' => 36,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            397 => 
            array (
                'id' => 398,
                'city' => 'Parbhani',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            398 => 
            array (
                'id' => 399,
                'city' => 'Pathankot',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            399 => 
            array (
                'id' => 400,
                'city' => 'Patiala',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            400 => 
            array (
                'id' => 401,
                'city' => 'Patras',
                'country_id' => 39,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            401 => 
            array (
                'id' => 402,
                'city' => 'Pavlodar',
                'country_id' => 51,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            402 => 
            array (
                'id' => 403,
                'city' => 'Pemalang',
                'country_id' => 45,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            403 => 
            array (
                'id' => 404,
                'city' => 'Peoria',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            404 => 
            array (
                'id' => 405,
                'city' => 'Pereira',
                'country_id' => 24,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            405 => 
            array (
                'id' => 406,
                'city' => 'Phnom Penh',
                'country_id' => 18,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            406 => 
            array (
                'id' => 407,
                'city' => 'Pingxiang',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            407 => 
            array (
                'id' => 408,
                'city' => 'Pjatigorsk',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            408 => 
            array (
                'id' => 409,
                'city' => 'Plock',
                'country_id' => 76,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            409 => 
            array (
                'id' => 410,
                'city' => 'Po',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            410 => 
            array (
                'id' => 411,
                'city' => 'Ponce',
                'country_id' => 77,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            411 => 
            array (
                'id' => 412,
                'city' => 'Pontianak',
                'country_id' => 45,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            412 => 
            array (
                'id' => 413,
                'city' => 'Poos de Caldas',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            413 => 
            array (
                'id' => 414,
                'city' => 'Portoviejo',
                'country_id' => 28,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            414 => 
            array (
                'id' => 415,
                'city' => 'Probolinggo',
                'country_id' => 45,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            415 => 
            array (
                'id' => 416,
                'city' => 'Pudukkottai',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            416 => 
            array (
                'id' => 417,
                'city' => 'Pune',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            417 => 
            array (
                'id' => 418,
            'city' => 'Purnea (Purnia)',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            418 => 
            array (
                'id' => 419,
                'city' => 'Purwakarta',
                'country_id' => 45,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            419 => 
            array (
                'id' => 420,
                'city' => 'Pyongyang',
                'country_id' => 70,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            420 => 
            array (
                'id' => 421,
                'city' => 'Qalyub',
                'country_id' => 29,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            421 => 
            array (
                'id' => 422,
                'city' => 'Qinhuangdao',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            422 => 
            array (
                'id' => 423,
                'city' => 'Qomsheh',
                'country_id' => 46,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            423 => 
            array (
                'id' => 424,
                'city' => 'Quilmes',
                'country_id' => 6,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            424 => 
            array (
                'id' => 425,
                'city' => 'Rae Bareli',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            425 => 
            array (
                'id' => 426,
                'city' => 'Rajkot',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            426 => 
            array (
                'id' => 427,
                'city' => 'Rampur',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            427 => 
            array (
                'id' => 428,
                'city' => 'Rancagua',
                'country_id' => 22,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            428 => 
            array (
                'id' => 429,
                'city' => 'Ranchi',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            429 => 
            array (
                'id' => 430,
                'city' => 'Richmond Hill',
                'country_id' => 20,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            430 => 
            array (
                'id' => 431,
                'city' => 'Rio Claro',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            431 => 
            array (
                'id' => 432,
                'city' => 'Rizhao',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            432 => 
            array (
                'id' => 433,
                'city' => 'Roanoke',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            433 => 
            array (
                'id' => 434,
                'city' => 'Robamba',
                'country_id' => 28,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            434 => 
            array (
                'id' => 435,
                'city' => 'Rockford',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            435 => 
            array (
                'id' => 436,
                'city' => 'Ruse',
                'country_id' => 17,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            436 => 
            array (
                'id' => 437,
                'city' => 'Rustenburg',
                'country_id' => 85,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            437 => 
            array (
                'id' => 438,
                'city' => 's-Hertogenbosch',
                'country_id' => 67,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            438 => 
            array (
                'id' => 439,
                'city' => 'Saarbrcken',
                'country_id' => 38,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            439 => 
            array (
                'id' => 440,
                'city' => 'Sagamihara',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            440 => 
            array (
                'id' => 441,
                'city' => 'Saint Louis',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            441 => 
            array (
                'id' => 442,
                'city' => 'Saint-Denis',
                'country_id' => 79,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            442 => 
            array (
                'id' => 443,
                'city' => 'Sal',
                'country_id' => 62,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            443 => 
            array (
                'id' => 444,
                'city' => 'Salala',
                'country_id' => 71,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            444 => 
            array (
                'id' => 445,
                'city' => 'Salamanca',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            445 => 
            array (
                'id' => 446,
                'city' => 'Salinas',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            446 => 
            array (
                'id' => 447,
                'city' => 'Salzburg',
                'country_id' => 9,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            447 => 
            array (
                'id' => 448,
                'city' => 'Sambhal',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            448 => 
            array (
                'id' => 449,
                'city' => 'San Bernardino',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            449 => 
            array (
                'id' => 450,
                'city' => 'San Felipe de Puerto Plata',
                'country_id' => 27,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            450 => 
            array (
                'id' => 451,
                'city' => 'San Felipe del Progreso',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            451 => 
            array (
                'id' => 452,
                'city' => 'San Juan Bautista Tuxtepec',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            452 => 
            array (
                'id' => 453,
                'city' => 'San Lorenzo',
                'country_id' => 73,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            453 => 
            array (
                'id' => 454,
                'city' => 'San Miguel de Tucumn',
                'country_id' => 6,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            454 => 
            array (
                'id' => 455,
                'city' => 'Sanaa',
                'country_id' => 107,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            455 => 
            array (
                'id' => 456,
                'city' => 'Santa Brbara dOeste',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            456 => 
            array (
                'id' => 457,
                'city' => 'Santa F',
                'country_id' => 6,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            457 => 
            array (
                'id' => 458,
                'city' => 'Santa Rosa',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            458 => 
            array (
                'id' => 459,
                'city' => 'Santiago de Compostela',
                'country_id' => 87,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            459 => 
            array (
                'id' => 460,
                'city' => 'Santiago de los Caballeros',
                'country_id' => 27,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            460 => 
            array (
                'id' => 461,
                'city' => 'Santo Andr',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            461 => 
            array (
                'id' => 462,
                'city' => 'Sanya',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            462 => 
            array (
                'id' => 463,
                'city' => 'Sasebo',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            463 => 
            array (
                'id' => 464,
                'city' => 'Satna',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            464 => 
            array (
                'id' => 465,
                'city' => 'Sawhaj',
                'country_id' => 29,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            465 => 
            array (
                'id' => 466,
                'city' => 'Serpuhov',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            466 => 
            array (
                'id' => 467,
                'city' => 'Shahr-e Kord',
                'country_id' => 46,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            467 => 
            array (
                'id' => 468,
                'city' => 'Shanwei',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            468 => 
            array (
                'id' => 469,
                'city' => 'Shaoguan',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            469 => 
            array (
                'id' => 470,
                'city' => 'Sharja',
                'country_id' => 101,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            470 => 
            array (
                'id' => 471,
                'city' => 'Shenzhen',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            471 => 
            array (
                'id' => 472,
                'city' => 'Shikarpur',
                'country_id' => 72,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            472 => 
            array (
                'id' => 473,
                'city' => 'Shimoga',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            473 => 
            array (
                'id' => 474,
                'city' => 'Shimonoseki',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            474 => 
            array (
                'id' => 475,
                'city' => 'Shivapuri',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            475 => 
            array (
                'id' => 476,
                'city' => 'Shubra al-Khayma',
                'country_id' => 29,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            476 => 
            array (
                'id' => 477,
                'city' => 'Siegen',
                'country_id' => 38,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            477 => 
            array (
                'id' => 478,
            'city' => 'Siliguri (Shiliguri)',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            478 => 
            array (
                'id' => 479,
                'city' => 'Simferopol',
                'country_id' => 100,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            479 => 
            array (
                'id' => 480,
                'city' => 'Sincelejo',
                'country_id' => 24,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            480 => 
            array (
                'id' => 481,
                'city' => 'Sirjan',
                'country_id' => 46,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            481 => 
            array (
                'id' => 482,
                'city' => 'Sivas',
                'country_id' => 97,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            482 => 
            array (
                'id' => 483,
                'city' => 'Skikda',
                'country_id' => 2,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            483 => 
            array (
                'id' => 484,
                'city' => 'Smolensk',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            484 => 
            array (
                'id' => 485,
                'city' => 'So Bernardo do Campo',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            485 => 
            array (
                'id' => 486,
                'city' => 'So Leopoldo',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            486 => 
            array (
                'id' => 487,
                'city' => 'Sogamoso',
                'country_id' => 24,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            487 => 
            array (
                'id' => 488,
                'city' => 'Sokoto',
                'country_id' => 69,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            488 => 
            array (
                'id' => 489,
                'city' => 'Songkhla',
                'country_id' => 94,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            489 => 
            array (
                'id' => 490,
                'city' => 'Sorocaba',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            490 => 
            array (
                'id' => 491,
                'city' => 'Soshanguve',
                'country_id' => 85,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            491 => 
            array (
                'id' => 492,
                'city' => 'Sousse',
                'country_id' => 96,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            492 => 
            array (
                'id' => 493,
                'city' => 'South Hill',
                'country_id' => 5,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            493 => 
            array (
                'id' => 494,
                'city' => 'Southampton',
                'country_id' => 102,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            494 => 
            array (
                'id' => 495,
                'city' => 'Southend-on-Sea',
                'country_id' => 102,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            495 => 
            array (
                'id' => 496,
                'city' => 'Southport',
                'country_id' => 102,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            496 => 
            array (
                'id' => 497,
                'city' => 'Springs',
                'country_id' => 85,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            497 => 
            array (
                'id' => 498,
                'city' => 'Stara Zagora',
                'country_id' => 17,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            498 => 
            array (
                'id' => 499,
                'city' => 'Sterling Heights',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            499 => 
            array (
                'id' => 500,
                'city' => 'Stockport',
                'country_id' => 102,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 501,
                'city' => 'Sucre',
                'country_id' => 14,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            1 => 
            array (
                'id' => 502,
                'city' => 'Suihua',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            2 => 
            array (
                'id' => 503,
                'city' => 'Sullana',
                'country_id' => 74,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            3 => 
            array (
                'id' => 504,
                'city' => 'Sultanbeyli',
                'country_id' => 97,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            4 => 
            array (
                'id' => 505,
                'city' => 'Sumqayit',
                'country_id' => 10,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            5 => 
            array (
                'id' => 506,
                'city' => 'Sumy',
                'country_id' => 100,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            6 => 
            array (
                'id' => 507,
                'city' => 'Sungai Petani',
                'country_id' => 59,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            7 => 
            array (
                'id' => 508,
                'city' => 'Sunnyvale',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            8 => 
            array (
                'id' => 509,
                'city' => 'Surakarta',
                'country_id' => 45,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            9 => 
            array (
                'id' => 510,
                'city' => 'Syktyvkar',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            10 => 
            array (
                'id' => 511,
                'city' => 'Syrakusa',
                'country_id' => 49,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            11 => 
            array (
                'id' => 512,
                'city' => 'Szkesfehrvr',
                'country_id' => 43,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            12 => 
            array (
                'id' => 513,
                'city' => 'Tabora',
                'country_id' => 93,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            13 => 
            array (
                'id' => 514,
                'city' => 'Tabriz',
                'country_id' => 46,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            14 => 
            array (
                'id' => 515,
                'city' => 'Tabuk',
                'country_id' => 82,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            15 => 
            array (
                'id' => 516,
                'city' => 'Tafuna',
                'country_id' => 3,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            16 => 
            array (
                'id' => 517,
                'city' => 'Taguig',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            17 => 
            array (
                'id' => 518,
                'city' => 'Taizz',
                'country_id' => 107,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            18 => 
            array (
                'id' => 519,
                'city' => 'Talavera',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            19 => 
            array (
                'id' => 520,
                'city' => 'Tallahassee',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            20 => 
            array (
                'id' => 521,
                'city' => 'Tama',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            21 => 
            array (
                'id' => 522,
                'city' => 'Tambaram',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            22 => 
            array (
                'id' => 523,
                'city' => 'Tanauan',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            23 => 
            array (
                'id' => 524,
                'city' => 'Tandil',
                'country_id' => 6,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            24 => 
            array (
                'id' => 525,
                'city' => 'Tangail',
                'country_id' => 12,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            25 => 
            array (
                'id' => 526,
                'city' => 'Tanshui',
                'country_id' => 92,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            26 => 
            array (
                'id' => 527,
                'city' => 'Tanza',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            27 => 
            array (
                'id' => 528,
                'city' => 'Tarlac',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            28 => 
            array (
                'id' => 529,
                'city' => 'Tarsus',
                'country_id' => 97,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            29 => 
            array (
                'id' => 530,
                'city' => 'Tartu',
                'country_id' => 30,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            30 => 
            array (
                'id' => 531,
                'city' => 'Teboksary',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            31 => 
            array (
                'id' => 532,
                'city' => 'Tegal',
                'country_id' => 45,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            32 => 
            array (
                'id' => 533,
                'city' => 'Tel Aviv-Jaffa',
                'country_id' => 48,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            33 => 
            array (
                'id' => 534,
                'city' => 'Tete',
                'country_id' => 63,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            34 => 
            array (
                'id' => 535,
                'city' => 'Tianjin',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            35 => 
            array (
                'id' => 536,
                'city' => 'Tiefa',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            36 => 
            array (
                'id' => 537,
                'city' => 'Tieli',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            37 => 
            array (
                'id' => 538,
                'city' => 'Tokat',
                'country_id' => 97,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            38 => 
            array (
                'id' => 539,
                'city' => 'Tonghae',
                'country_id' => 86,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            39 => 
            array (
                'id' => 540,
                'city' => 'Tongliao',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            40 => 
            array (
                'id' => 541,
                'city' => 'Torren',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            41 => 
            array (
                'id' => 542,
                'city' => 'Touliu',
                'country_id' => 92,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            42 => 
            array (
                'id' => 543,
                'city' => 'Toulon',
                'country_id' => 34,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            43 => 
            array (
                'id' => 544,
                'city' => 'Toulouse',
                'country_id' => 34,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            44 => 
            array (
                'id' => 545,
                'city' => 'Trshavn',
                'country_id' => 32,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            45 => 
            array (
                'id' => 546,
                'city' => 'Tsaotun',
                'country_id' => 92,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            46 => 
            array (
                'id' => 547,
                'city' => 'Tsuyama',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            47 => 
            array (
                'id' => 548,
                'city' => 'Tuguegarao',
                'country_id' => 75,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            48 => 
            array (
                'id' => 549,
                'city' => 'Tychy',
                'country_id' => 76,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            49 => 
            array (
                'id' => 550,
                'city' => 'Udaipur',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            50 => 
            array (
                'id' => 551,
                'city' => 'Udine',
                'country_id' => 49,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            51 => 
            array (
                'id' => 552,
                'city' => 'Ueda',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            52 => 
            array (
                'id' => 553,
                'city' => 'Uijongbu',
                'country_id' => 86,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            53 => 
            array (
                'id' => 554,
                'city' => 'Uluberia',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            54 => 
            array (
                'id' => 555,
                'city' => 'Urawa',
                'country_id' => 50,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            55 => 
            array (
                'id' => 556,
                'city' => 'Uruapan',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            56 => 
            array (
                'id' => 557,
                'city' => 'Usak',
                'country_id' => 97,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            57 => 
            array (
                'id' => 558,
                'city' => 'Usolje-Sibirskoje',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            58 => 
            array (
                'id' => 559,
                'city' => 'Uttarpara-Kotrung',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            59 => 
            array (
                'id' => 560,
                'city' => 'Vaduz',
                'country_id' => 55,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            60 => 
            array (
                'id' => 561,
                'city' => 'Valencia',
                'country_id' => 104,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            61 => 
            array (
                'id' => 562,
                'city' => 'Valle de la Pascua',
                'country_id' => 104,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            62 => 
            array (
                'id' => 563,
                'city' => 'Valle de Santiago',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            63 => 
            array (
                'id' => 564,
                'city' => 'Valparai',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            64 => 
            array (
                'id' => 565,
                'city' => 'Vancouver',
                'country_id' => 20,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            65 => 
            array (
                'id' => 566,
            'city' => 'Varanasi (Benares)',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            66 => 
            array (
                'id' => 567,
                'city' => 'Vicente Lpez',
                'country_id' => 6,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            67 => 
            array (
                'id' => 568,
                'city' => 'Vijayawada',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            68 => 
            array (
                'id' => 569,
                'city' => 'Vila Velha',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            69 => 
            array (
                'id' => 570,
                'city' => 'Vilnius',
                'country_id' => 56,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            70 => 
            array (
                'id' => 571,
                'city' => 'Vinh',
                'country_id' => 105,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            71 => 
            array (
                'id' => 572,
                'city' => 'Vitria de Santo Anto',
                'country_id' => 15,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            72 => 
            array (
                'id' => 573,
                'city' => 'Warren',
                'country_id' => 103,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            73 => 
            array (
                'id' => 574,
                'city' => 'Weifang',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            74 => 
            array (
                'id' => 575,
                'city' => 'Witten',
                'country_id' => 38,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            75 => 
            array (
                'id' => 576,
                'city' => 'Woodridge',
                'country_id' => 8,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            76 => 
            array (
                'id' => 577,
                'city' => 'Wroclaw',
                'country_id' => 76,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            77 => 
            array (
                'id' => 578,
                'city' => 'Xiangfan',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            78 => 
            array (
                'id' => 579,
                'city' => 'Xiangtan',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            79 => 
            array (
                'id' => 580,
                'city' => 'Xintai',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            80 => 
            array (
                'id' => 581,
                'city' => 'Xinxiang',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            81 => 
            array (
                'id' => 582,
                'city' => 'Yamuna Nagar',
                'country_id' => 44,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            82 => 
            array (
                'id' => 583,
                'city' => 'Yangor',
                'country_id' => 65,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            83 => 
            array (
                'id' => 584,
                'city' => 'Yantai',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            84 => 
            array (
                'id' => 585,
                'city' => 'Yaound',
                'country_id' => 19,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            85 => 
            array (
                'id' => 586,
                'city' => 'Yerevan',
                'country_id' => 7,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            86 => 
            array (
                'id' => 587,
                'city' => 'Yinchuan',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            87 => 
            array (
                'id' => 588,
                'city' => 'Yingkou',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            88 => 
            array (
                'id' => 589,
                'city' => 'York',
                'country_id' => 102,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            89 => 
            array (
                'id' => 590,
                'city' => 'Yuncheng',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            90 => 
            array (
                'id' => 591,
                'city' => 'Yuzhou',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            91 => 
            array (
                'id' => 592,
                'city' => 'Zalantun',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            92 => 
            array (
                'id' => 593,
                'city' => 'Zanzibar',
                'country_id' => 93,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            93 => 
            array (
                'id' => 594,
                'city' => 'Zaoyang',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            94 => 
            array (
                'id' => 595,
                'city' => 'Zapopan',
                'country_id' => 60,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            95 => 
            array (
                'id' => 596,
                'city' => 'Zaria',
                'country_id' => 69,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            96 => 
            array (
                'id' => 597,
                'city' => 'Zeleznogorsk',
                'country_id' => 80,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            97 => 
            array (
                'id' => 598,
                'city' => 'Zhezqazghan',
                'country_id' => 51,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            98 => 
            array (
                'id' => 599,
                'city' => 'Zhoushan',
                'country_id' => 23,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
            99 => 
            array (
                'id' => 600,
                'city' => 'Ziguinchor',
                'country_id' => 83,
                'updated_at' => '2006-02-15 04:45:25',
                'created_at' => '2017-10-12 00:07:37',
            ),
        ));
        
        
    }
}