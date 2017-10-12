<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('city')->delete();
        
        \DB::table('city')->insert(array (
            0 => 
            array (
                'city_id' => 1,
            'city' => 'A Corua (La Corua)',
                'country_id' => 87,
                'last_update' => '2006-02-15 04:45:25',
            ),
            1 => 
            array (
                'city_id' => 2,
                'city' => 'Abha',
                'country_id' => 82,
                'last_update' => '2006-02-15 04:45:25',
            ),
            2 => 
            array (
                'city_id' => 3,
                'city' => 'Abu Dhabi',
                'country_id' => 101,
                'last_update' => '2006-02-15 04:45:25',
            ),
            3 => 
            array (
                'city_id' => 4,
                'city' => 'Acua',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            4 => 
            array (
                'city_id' => 5,
                'city' => 'Adana',
                'country_id' => 97,
                'last_update' => '2006-02-15 04:45:25',
            ),
            5 => 
            array (
                'city_id' => 6,
                'city' => 'Addis Abeba',
                'country_id' => 31,
                'last_update' => '2006-02-15 04:45:25',
            ),
            6 => 
            array (
                'city_id' => 7,
                'city' => 'Aden',
                'country_id' => 107,
                'last_update' => '2006-02-15 04:45:25',
            ),
            7 => 
            array (
                'city_id' => 8,
                'city' => 'Adoni',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            8 => 
            array (
                'city_id' => 9,
                'city' => 'Ahmadnagar',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            9 => 
            array (
                'city_id' => 10,
                'city' => 'Akishima',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            10 => 
            array (
                'city_id' => 11,
                'city' => 'Akron',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            11 => 
            array (
                'city_id' => 12,
                'city' => 'al-Ayn',
                'country_id' => 101,
                'last_update' => '2006-02-15 04:45:25',
            ),
            12 => 
            array (
                'city_id' => 13,
                'city' => 'al-Hawiya',
                'country_id' => 82,
                'last_update' => '2006-02-15 04:45:25',
            ),
            13 => 
            array (
                'city_id' => 14,
                'city' => 'al-Manama',
                'country_id' => 11,
                'last_update' => '2006-02-15 04:45:25',
            ),
            14 => 
            array (
                'city_id' => 15,
                'city' => 'al-Qadarif',
                'country_id' => 89,
                'last_update' => '2006-02-15 04:45:25',
            ),
            15 => 
            array (
                'city_id' => 16,
                'city' => 'al-Qatif',
                'country_id' => 82,
                'last_update' => '2006-02-15 04:45:25',
            ),
            16 => 
            array (
                'city_id' => 17,
                'city' => 'Alessandria',
                'country_id' => 49,
                'last_update' => '2006-02-15 04:45:25',
            ),
            17 => 
            array (
                'city_id' => 18,
            'city' => 'Allappuzha (Alleppey)',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            18 => 
            array (
                'city_id' => 19,
                'city' => 'Allende',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            19 => 
            array (
                'city_id' => 20,
                'city' => 'Almirante Brown',
                'country_id' => 6,
                'last_update' => '2006-02-15 04:45:25',
            ),
            20 => 
            array (
                'city_id' => 21,
                'city' => 'Alvorada',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            21 => 
            array (
                'city_id' => 22,
                'city' => 'Ambattur',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            22 => 
            array (
                'city_id' => 23,
                'city' => 'Amersfoort',
                'country_id' => 67,
                'last_update' => '2006-02-15 04:45:25',
            ),
            23 => 
            array (
                'city_id' => 24,
                'city' => 'Amroha',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            24 => 
            array (
                'city_id' => 25,
                'city' => 'Angra dos Reis',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            25 => 
            array (
                'city_id' => 26,
                'city' => 'Anpolis',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            26 => 
            array (
                'city_id' => 27,
                'city' => 'Antofagasta',
                'country_id' => 22,
                'last_update' => '2006-02-15 04:45:25',
            ),
            27 => 
            array (
                'city_id' => 28,
                'city' => 'Aparecida de Goinia',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            28 => 
            array (
                'city_id' => 29,
                'city' => 'Apeldoorn',
                'country_id' => 67,
                'last_update' => '2006-02-15 04:45:25',
            ),
            29 => 
            array (
                'city_id' => 30,
                'city' => 'Araatuba',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            30 => 
            array (
                'city_id' => 31,
                'city' => 'Arak',
                'country_id' => 46,
                'last_update' => '2006-02-15 04:45:25',
            ),
            31 => 
            array (
                'city_id' => 32,
                'city' => 'Arecibo',
                'country_id' => 77,
                'last_update' => '2006-02-15 04:45:25',
            ),
            32 => 
            array (
                'city_id' => 33,
                'city' => 'Arlington',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            33 => 
            array (
                'city_id' => 34,
                'city' => 'Ashdod',
                'country_id' => 48,
                'last_update' => '2006-02-15 04:45:25',
            ),
            34 => 
            array (
                'city_id' => 35,
                'city' => 'Ashgabat',
                'country_id' => 98,
                'last_update' => '2006-02-15 04:45:25',
            ),
            35 => 
            array (
                'city_id' => 36,
                'city' => 'Ashqelon',
                'country_id' => 48,
                'last_update' => '2006-02-15 04:45:25',
            ),
            36 => 
            array (
                'city_id' => 37,
                'city' => 'Asuncin',
                'country_id' => 73,
                'last_update' => '2006-02-15 04:45:25',
            ),
            37 => 
            array (
                'city_id' => 38,
                'city' => 'Athenai',
                'country_id' => 39,
                'last_update' => '2006-02-15 04:45:25',
            ),
            38 => 
            array (
                'city_id' => 39,
                'city' => 'Atinsk',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            39 => 
            array (
                'city_id' => 40,
                'city' => 'Atlixco',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            40 => 
            array (
                'city_id' => 41,
                'city' => 'Augusta-Richmond County',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            41 => 
            array (
                'city_id' => 42,
                'city' => 'Aurora',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            42 => 
            array (
                'city_id' => 43,
                'city' => 'Avellaneda',
                'country_id' => 6,
                'last_update' => '2006-02-15 04:45:25',
            ),
            43 => 
            array (
                'city_id' => 44,
                'city' => 'Bag',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            44 => 
            array (
                'city_id' => 45,
                'city' => 'Baha Blanca',
                'country_id' => 6,
                'last_update' => '2006-02-15 04:45:25',
            ),
            45 => 
            array (
                'city_id' => 46,
                'city' => 'Baicheng',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            46 => 
            array (
                'city_id' => 47,
                'city' => 'Baiyin',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            47 => 
            array (
                'city_id' => 48,
                'city' => 'Baku',
                'country_id' => 10,
                'last_update' => '2006-02-15 04:45:25',
            ),
            48 => 
            array (
                'city_id' => 49,
                'city' => 'Balaiha',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            49 => 
            array (
                'city_id' => 50,
                'city' => 'Balikesir',
                'country_id' => 97,
                'last_update' => '2006-02-15 04:45:25',
            ),
            50 => 
            array (
                'city_id' => 51,
                'city' => 'Balurghat',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            51 => 
            array (
                'city_id' => 52,
                'city' => 'Bamenda',
                'country_id' => 19,
                'last_update' => '2006-02-15 04:45:25',
            ),
            52 => 
            array (
                'city_id' => 53,
                'city' => 'Bandar Seri Begawan',
                'country_id' => 16,
                'last_update' => '2006-02-15 04:45:25',
            ),
            53 => 
            array (
                'city_id' => 54,
                'city' => 'Banjul',
                'country_id' => 37,
                'last_update' => '2006-02-15 04:45:25',
            ),
            54 => 
            array (
                'city_id' => 55,
                'city' => 'Barcelona',
                'country_id' => 104,
                'last_update' => '2006-02-15 04:45:25',
            ),
            55 => 
            array (
                'city_id' => 56,
                'city' => 'Basel',
                'country_id' => 91,
                'last_update' => '2006-02-15 04:45:25',
            ),
            56 => 
            array (
                'city_id' => 57,
                'city' => 'Bat Yam',
                'country_id' => 48,
                'last_update' => '2006-02-15 04:45:25',
            ),
            57 => 
            array (
                'city_id' => 58,
                'city' => 'Batman',
                'country_id' => 97,
                'last_update' => '2006-02-15 04:45:25',
            ),
            58 => 
            array (
                'city_id' => 59,
                'city' => 'Batna',
                'country_id' => 2,
                'last_update' => '2006-02-15 04:45:25',
            ),
            59 => 
            array (
                'city_id' => 60,
                'city' => 'Battambang',
                'country_id' => 18,
                'last_update' => '2006-02-15 04:45:25',
            ),
            60 => 
            array (
                'city_id' => 61,
                'city' => 'Baybay',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            61 => 
            array (
                'city_id' => 62,
                'city' => 'Bayugan',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            62 => 
            array (
                'city_id' => 63,
                'city' => 'Bchar',
                'country_id' => 2,
                'last_update' => '2006-02-15 04:45:25',
            ),
            63 => 
            array (
                'city_id' => 64,
                'city' => 'Beira',
                'country_id' => 63,
                'last_update' => '2006-02-15 04:45:25',
            ),
            64 => 
            array (
                'city_id' => 65,
                'city' => 'Bellevue',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            65 => 
            array (
                'city_id' => 66,
                'city' => 'Belm',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            66 => 
            array (
                'city_id' => 67,
                'city' => 'Benguela',
                'country_id' => 4,
                'last_update' => '2006-02-15 04:45:25',
            ),
            67 => 
            array (
                'city_id' => 68,
                'city' => 'Beni-Mellal',
                'country_id' => 62,
                'last_update' => '2006-02-15 04:45:25',
            ),
            68 => 
            array (
                'city_id' => 69,
                'city' => 'Benin City',
                'country_id' => 69,
                'last_update' => '2006-02-15 04:45:25',
            ),
            69 => 
            array (
                'city_id' => 70,
                'city' => 'Bergamo',
                'country_id' => 49,
                'last_update' => '2006-02-15 04:45:25',
            ),
            70 => 
            array (
                'city_id' => 71,
            'city' => 'Berhampore (Baharampur)',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            71 => 
            array (
                'city_id' => 72,
                'city' => 'Bern',
                'country_id' => 91,
                'last_update' => '2006-02-15 04:45:25',
            ),
            72 => 
            array (
                'city_id' => 73,
                'city' => 'Bhavnagar',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            73 => 
            array (
                'city_id' => 74,
                'city' => 'Bhilwara',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            74 => 
            array (
                'city_id' => 75,
                'city' => 'Bhimavaram',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            75 => 
            array (
                'city_id' => 76,
                'city' => 'Bhopal',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            76 => 
            array (
                'city_id' => 77,
                'city' => 'Bhusawal',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            77 => 
            array (
                'city_id' => 78,
                'city' => 'Bijapur',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            78 => 
            array (
                'city_id' => 79,
                'city' => 'Bilbays',
                'country_id' => 29,
                'last_update' => '2006-02-15 04:45:25',
            ),
            79 => 
            array (
                'city_id' => 80,
                'city' => 'Binzhou',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            80 => 
            array (
                'city_id' => 81,
                'city' => 'Birgunj',
                'country_id' => 66,
                'last_update' => '2006-02-15 04:45:25',
            ),
            81 => 
            array (
                'city_id' => 82,
                'city' => 'Bislig',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            82 => 
            array (
                'city_id' => 83,
                'city' => 'Blumenau',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            83 => 
            array (
                'city_id' => 84,
                'city' => 'Boa Vista',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            84 => 
            array (
                'city_id' => 85,
                'city' => 'Boksburg',
                'country_id' => 85,
                'last_update' => '2006-02-15 04:45:25',
            ),
            85 => 
            array (
                'city_id' => 86,
                'city' => 'Botosani',
                'country_id' => 78,
                'last_update' => '2006-02-15 04:45:25',
            ),
            86 => 
            array (
                'city_id' => 87,
                'city' => 'Botshabelo',
                'country_id' => 85,
                'last_update' => '2006-02-15 04:45:25',
            ),
            87 => 
            array (
                'city_id' => 88,
                'city' => 'Bradford',
                'country_id' => 102,
                'last_update' => '2006-02-15 04:45:25',
            ),
            88 => 
            array (
                'city_id' => 89,
                'city' => 'Braslia',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            89 => 
            array (
                'city_id' => 90,
                'city' => 'Bratislava',
                'country_id' => 84,
                'last_update' => '2006-02-15 04:45:25',
            ),
            90 => 
            array (
                'city_id' => 91,
                'city' => 'Brescia',
                'country_id' => 49,
                'last_update' => '2006-02-15 04:45:25',
            ),
            91 => 
            array (
                'city_id' => 92,
                'city' => 'Brest',
                'country_id' => 34,
                'last_update' => '2006-02-15 04:45:25',
            ),
            92 => 
            array (
                'city_id' => 93,
                'city' => 'Brindisi',
                'country_id' => 49,
                'last_update' => '2006-02-15 04:45:25',
            ),
            93 => 
            array (
                'city_id' => 94,
                'city' => 'Brockton',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            94 => 
            array (
                'city_id' => 95,
                'city' => 'Bucuresti',
                'country_id' => 78,
                'last_update' => '2006-02-15 04:45:25',
            ),
            95 => 
            array (
                'city_id' => 96,
                'city' => 'Buenaventura',
                'country_id' => 24,
                'last_update' => '2006-02-15 04:45:25',
            ),
            96 => 
            array (
                'city_id' => 97,
                'city' => 'Bydgoszcz',
                'country_id' => 76,
                'last_update' => '2006-02-15 04:45:25',
            ),
            97 => 
            array (
                'city_id' => 98,
                'city' => 'Cabuyao',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            98 => 
            array (
                'city_id' => 99,
                'city' => 'Callao',
                'country_id' => 74,
                'last_update' => '2006-02-15 04:45:25',
            ),
            99 => 
            array (
                'city_id' => 100,
                'city' => 'Cam Ranh',
                'country_id' => 105,
                'last_update' => '2006-02-15 04:45:25',
            ),
            100 => 
            array (
                'city_id' => 101,
                'city' => 'Cape Coral',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            101 => 
            array (
                'city_id' => 102,
                'city' => 'Caracas',
                'country_id' => 104,
                'last_update' => '2006-02-15 04:45:25',
            ),
            102 => 
            array (
                'city_id' => 103,
                'city' => 'Carmen',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            103 => 
            array (
                'city_id' => 104,
                'city' => 'Cavite',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            104 => 
            array (
                'city_id' => 105,
                'city' => 'Cayenne',
                'country_id' => 35,
                'last_update' => '2006-02-15 04:45:25',
            ),
            105 => 
            array (
                'city_id' => 106,
                'city' => 'Celaya',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            106 => 
            array (
                'city_id' => 107,
                'city' => 'Chandrapur',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            107 => 
            array (
                'city_id' => 108,
                'city' => 'Changhwa',
                'country_id' => 92,
                'last_update' => '2006-02-15 04:45:25',
            ),
            108 => 
            array (
                'city_id' => 109,
                'city' => 'Changzhou',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            109 => 
            array (
                'city_id' => 110,
                'city' => 'Chapra',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            110 => 
            array (
                'city_id' => 111,
                'city' => 'Charlotte Amalie',
                'country_id' => 106,
                'last_update' => '2006-02-15 04:45:25',
            ),
            111 => 
            array (
                'city_id' => 112,
                'city' => 'Chatsworth',
                'country_id' => 85,
                'last_update' => '2006-02-15 04:45:25',
            ),
            112 => 
            array (
                'city_id' => 113,
                'city' => 'Cheju',
                'country_id' => 86,
                'last_update' => '2006-02-15 04:45:25',
            ),
            113 => 
            array (
                'city_id' => 114,
                'city' => 'Chiayi',
                'country_id' => 92,
                'last_update' => '2006-02-15 04:45:25',
            ),
            114 => 
            array (
                'city_id' => 115,
                'city' => 'Chisinau',
                'country_id' => 61,
                'last_update' => '2006-02-15 04:45:25',
            ),
            115 => 
            array (
                'city_id' => 116,
                'city' => 'Chungho',
                'country_id' => 92,
                'last_update' => '2006-02-15 04:45:25',
            ),
            116 => 
            array (
                'city_id' => 117,
                'city' => 'Cianjur',
                'country_id' => 45,
                'last_update' => '2006-02-15 04:45:25',
            ),
            117 => 
            array (
                'city_id' => 118,
                'city' => 'Ciomas',
                'country_id' => 45,
                'last_update' => '2006-02-15 04:45:25',
            ),
            118 => 
            array (
                'city_id' => 119,
                'city' => 'Ciparay',
                'country_id' => 45,
                'last_update' => '2006-02-15 04:45:25',
            ),
            119 => 
            array (
                'city_id' => 120,
                'city' => 'Citrus Heights',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            120 => 
            array (
                'city_id' => 121,
                'city' => 'Citt del Vaticano',
                'country_id' => 41,
                'last_update' => '2006-02-15 04:45:25',
            ),
            121 => 
            array (
                'city_id' => 122,
                'city' => 'Ciudad del Este',
                'country_id' => 73,
                'last_update' => '2006-02-15 04:45:25',
            ),
            122 => 
            array (
                'city_id' => 123,
                'city' => 'Clarksville',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            123 => 
            array (
                'city_id' => 124,
                'city' => 'Coacalco de Berriozbal',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            124 => 
            array (
                'city_id' => 125,
                'city' => 'Coatzacoalcos',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            125 => 
            array (
                'city_id' => 126,
                'city' => 'Compton',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            126 => 
            array (
                'city_id' => 127,
                'city' => 'Coquimbo',
                'country_id' => 22,
                'last_update' => '2006-02-15 04:45:25',
            ),
            127 => 
            array (
                'city_id' => 128,
                'city' => 'Crdoba',
                'country_id' => 6,
                'last_update' => '2006-02-15 04:45:25',
            ),
            128 => 
            array (
                'city_id' => 129,
                'city' => 'Cuauhtmoc',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            129 => 
            array (
                'city_id' => 130,
                'city' => 'Cuautla',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            130 => 
            array (
                'city_id' => 131,
                'city' => 'Cuernavaca',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            131 => 
            array (
                'city_id' => 132,
                'city' => 'Cuman',
                'country_id' => 104,
                'last_update' => '2006-02-15 04:45:25',
            ),
            132 => 
            array (
                'city_id' => 133,
                'city' => 'Czestochowa',
                'country_id' => 76,
                'last_update' => '2006-02-15 04:45:25',
            ),
            133 => 
            array (
                'city_id' => 134,
                'city' => 'Dadu',
                'country_id' => 72,
                'last_update' => '2006-02-15 04:45:25',
            ),
            134 => 
            array (
                'city_id' => 135,
                'city' => 'Dallas',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            135 => 
            array (
                'city_id' => 136,
                'city' => 'Datong',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            136 => 
            array (
                'city_id' => 137,
                'city' => 'Daugavpils',
                'country_id' => 54,
                'last_update' => '2006-02-15 04:45:25',
            ),
            137 => 
            array (
                'city_id' => 138,
                'city' => 'Davao',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            138 => 
            array (
                'city_id' => 139,
                'city' => 'Daxian',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            139 => 
            array (
                'city_id' => 140,
                'city' => 'Dayton',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            140 => 
            array (
                'city_id' => 141,
                'city' => 'Deba Habe',
                'country_id' => 69,
                'last_update' => '2006-02-15 04:45:25',
            ),
            141 => 
            array (
                'city_id' => 142,
                'city' => 'Denizli',
                'country_id' => 97,
                'last_update' => '2006-02-15 04:45:25',
            ),
            142 => 
            array (
                'city_id' => 143,
                'city' => 'Dhaka',
                'country_id' => 12,
                'last_update' => '2006-02-15 04:45:25',
            ),
            143 => 
            array (
                'city_id' => 144,
            'city' => 'Dhule (Dhulia)',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            144 => 
            array (
                'city_id' => 145,
                'city' => 'Dongying',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            145 => 
            array (
                'city_id' => 146,
                'city' => 'Donostia-San Sebastin',
                'country_id' => 87,
                'last_update' => '2006-02-15 04:45:25',
            ),
            146 => 
            array (
                'city_id' => 147,
                'city' => 'Dos Quebradas',
                'country_id' => 24,
                'last_update' => '2006-02-15 04:45:25',
            ),
            147 => 
            array (
                'city_id' => 148,
                'city' => 'Duisburg',
                'country_id' => 38,
                'last_update' => '2006-02-15 04:45:25',
            ),
            148 => 
            array (
                'city_id' => 149,
                'city' => 'Dundee',
                'country_id' => 102,
                'last_update' => '2006-02-15 04:45:25',
            ),
            149 => 
            array (
                'city_id' => 150,
                'city' => 'Dzerzinsk',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            150 => 
            array (
                'city_id' => 151,
                'city' => 'Ede',
                'country_id' => 67,
                'last_update' => '2006-02-15 04:45:25',
            ),
            151 => 
            array (
                'city_id' => 152,
                'city' => 'Effon-Alaiye',
                'country_id' => 69,
                'last_update' => '2006-02-15 04:45:25',
            ),
            152 => 
            array (
                'city_id' => 153,
                'city' => 'El Alto',
                'country_id' => 14,
                'last_update' => '2006-02-15 04:45:25',
            ),
            153 => 
            array (
                'city_id' => 154,
                'city' => 'El Fuerte',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            154 => 
            array (
                'city_id' => 155,
                'city' => 'El Monte',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            155 => 
            array (
                'city_id' => 156,
                'city' => 'Elista',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            156 => 
            array (
                'city_id' => 157,
                'city' => 'Emeishan',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            157 => 
            array (
                'city_id' => 158,
                'city' => 'Emmen',
                'country_id' => 67,
                'last_update' => '2006-02-15 04:45:25',
            ),
            158 => 
            array (
                'city_id' => 159,
                'city' => 'Enshi',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            159 => 
            array (
                'city_id' => 160,
                'city' => 'Erlangen',
                'country_id' => 38,
                'last_update' => '2006-02-15 04:45:25',
            ),
            160 => 
            array (
                'city_id' => 161,
                'city' => 'Escobar',
                'country_id' => 6,
                'last_update' => '2006-02-15 04:45:25',
            ),
            161 => 
            array (
                'city_id' => 162,
                'city' => 'Esfahan',
                'country_id' => 46,
                'last_update' => '2006-02-15 04:45:25',
            ),
            162 => 
            array (
                'city_id' => 163,
                'city' => 'Eskisehir',
                'country_id' => 97,
                'last_update' => '2006-02-15 04:45:25',
            ),
            163 => 
            array (
                'city_id' => 164,
                'city' => 'Etawah',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            164 => 
            array (
                'city_id' => 165,
                'city' => 'Ezeiza',
                'country_id' => 6,
                'last_update' => '2006-02-15 04:45:25',
            ),
            165 => 
            array (
                'city_id' => 166,
                'city' => 'Ezhou',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            166 => 
            array (
                'city_id' => 167,
                'city' => 'Faaa',
                'country_id' => 36,
                'last_update' => '2006-02-15 04:45:25',
            ),
            167 => 
            array (
                'city_id' => 168,
                'city' => 'Fengshan',
                'country_id' => 92,
                'last_update' => '2006-02-15 04:45:25',
            ),
            168 => 
            array (
                'city_id' => 169,
                'city' => 'Firozabad',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            169 => 
            array (
                'city_id' => 170,
                'city' => 'Florencia',
                'country_id' => 24,
                'last_update' => '2006-02-15 04:45:25',
            ),
            170 => 
            array (
                'city_id' => 171,
                'city' => 'Fontana',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            171 => 
            array (
                'city_id' => 172,
                'city' => 'Fukuyama',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            172 => 
            array (
                'city_id' => 173,
                'city' => 'Funafuti',
                'country_id' => 99,
                'last_update' => '2006-02-15 04:45:25',
            ),
            173 => 
            array (
                'city_id' => 174,
                'city' => 'Fuyu',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            174 => 
            array (
                'city_id' => 175,
                'city' => 'Fuzhou',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            175 => 
            array (
                'city_id' => 176,
                'city' => 'Gandhinagar',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            176 => 
            array (
                'city_id' => 177,
                'city' => 'Garden Grove',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            177 => 
            array (
                'city_id' => 178,
                'city' => 'Garland',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            178 => 
            array (
                'city_id' => 179,
                'city' => 'Gatineau',
                'country_id' => 20,
                'last_update' => '2006-02-15 04:45:25',
            ),
            179 => 
            array (
                'city_id' => 180,
                'city' => 'Gaziantep',
                'country_id' => 97,
                'last_update' => '2006-02-15 04:45:25',
            ),
            180 => 
            array (
                'city_id' => 181,
                'city' => 'Gijn',
                'country_id' => 87,
                'last_update' => '2006-02-15 04:45:25',
            ),
            181 => 
            array (
                'city_id' => 182,
                'city' => 'Gingoog',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            182 => 
            array (
                'city_id' => 183,
                'city' => 'Goinia',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            183 => 
            array (
                'city_id' => 184,
                'city' => 'Gorontalo',
                'country_id' => 45,
                'last_update' => '2006-02-15 04:45:25',
            ),
            184 => 
            array (
                'city_id' => 185,
                'city' => 'Grand Prairie',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            185 => 
            array (
                'city_id' => 186,
                'city' => 'Graz',
                'country_id' => 9,
                'last_update' => '2006-02-15 04:45:25',
            ),
            186 => 
            array (
                'city_id' => 187,
                'city' => 'Greensboro',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            187 => 
            array (
                'city_id' => 188,
                'city' => 'Guadalajara',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            188 => 
            array (
                'city_id' => 189,
                'city' => 'Guaruj',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            189 => 
            array (
                'city_id' => 190,
                'city' => 'guas Lindas de Gois',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            190 => 
            array (
                'city_id' => 191,
                'city' => 'Gulbarga',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            191 => 
            array (
                'city_id' => 192,
                'city' => 'Hagonoy',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            192 => 
            array (
                'city_id' => 193,
                'city' => 'Haining',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            193 => 
            array (
                'city_id' => 194,
                'city' => 'Haiphong',
                'country_id' => 105,
                'last_update' => '2006-02-15 04:45:25',
            ),
            194 => 
            array (
                'city_id' => 195,
                'city' => 'Haldia',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            195 => 
            array (
                'city_id' => 196,
                'city' => 'Halifax',
                'country_id' => 20,
                'last_update' => '2006-02-15 04:45:25',
            ),
            196 => 
            array (
                'city_id' => 197,
                'city' => 'Halisahar',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            197 => 
            array (
                'city_id' => 198,
                'city' => 'Halle/Saale',
                'country_id' => 38,
                'last_update' => '2006-02-15 04:45:25',
            ),
            198 => 
            array (
                'city_id' => 199,
                'city' => 'Hami',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            199 => 
            array (
                'city_id' => 200,
                'city' => 'Hamilton',
                'country_id' => 68,
                'last_update' => '2006-02-15 04:45:25',
            ),
            200 => 
            array (
                'city_id' => 201,
                'city' => 'Hanoi',
                'country_id' => 105,
                'last_update' => '2006-02-15 04:45:25',
            ),
            201 => 
            array (
                'city_id' => 202,
                'city' => 'Hidalgo',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            202 => 
            array (
                'city_id' => 203,
                'city' => 'Higashiosaka',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            203 => 
            array (
                'city_id' => 204,
                'city' => 'Hino',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            204 => 
            array (
                'city_id' => 205,
                'city' => 'Hiroshima',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            205 => 
            array (
                'city_id' => 206,
                'city' => 'Hodeida',
                'country_id' => 107,
                'last_update' => '2006-02-15 04:45:25',
            ),
            206 => 
            array (
                'city_id' => 207,
                'city' => 'Hohhot',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            207 => 
            array (
                'city_id' => 208,
                'city' => 'Hoshiarpur',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            208 => 
            array (
                'city_id' => 209,
                'city' => 'Hsichuh',
                'country_id' => 92,
                'last_update' => '2006-02-15 04:45:25',
            ),
            209 => 
            array (
                'city_id' => 210,
                'city' => 'Huaian',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            210 => 
            array (
                'city_id' => 211,
                'city' => 'Hubli-Dharwad',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            211 => 
            array (
                'city_id' => 212,
                'city' => 'Huejutla de Reyes',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            212 => 
            array (
                'city_id' => 213,
                'city' => 'Huixquilucan',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            213 => 
            array (
                'city_id' => 214,
                'city' => 'Hunuco',
                'country_id' => 74,
                'last_update' => '2006-02-15 04:45:25',
            ),
            214 => 
            array (
                'city_id' => 215,
                'city' => 'Ibirit',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            215 => 
            array (
                'city_id' => 216,
                'city' => 'Idfu',
                'country_id' => 29,
                'last_update' => '2006-02-15 04:45:25',
            ),
            216 => 
            array (
                'city_id' => 217,
                'city' => 'Ife',
                'country_id' => 69,
                'last_update' => '2006-02-15 04:45:25',
            ),
            217 => 
            array (
                'city_id' => 218,
                'city' => 'Ikerre',
                'country_id' => 69,
                'last_update' => '2006-02-15 04:45:25',
            ),
            218 => 
            array (
                'city_id' => 219,
                'city' => 'Iligan',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            219 => 
            array (
                'city_id' => 220,
                'city' => 'Ilorin',
                'country_id' => 69,
                'last_update' => '2006-02-15 04:45:25',
            ),
            220 => 
            array (
                'city_id' => 221,
                'city' => 'Imus',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            221 => 
            array (
                'city_id' => 222,
                'city' => 'Inegl',
                'country_id' => 97,
                'last_update' => '2006-02-15 04:45:25',
            ),
            222 => 
            array (
                'city_id' => 223,
                'city' => 'Ipoh',
                'country_id' => 59,
                'last_update' => '2006-02-15 04:45:25',
            ),
            223 => 
            array (
                'city_id' => 224,
                'city' => 'Isesaki',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            224 => 
            array (
                'city_id' => 225,
                'city' => 'Ivanovo',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            225 => 
            array (
                'city_id' => 226,
                'city' => 'Iwaki',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            226 => 
            array (
                'city_id' => 227,
                'city' => 'Iwakuni',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            227 => 
            array (
                'city_id' => 228,
                'city' => 'Iwatsuki',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            228 => 
            array (
                'city_id' => 229,
                'city' => 'Izumisano',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            229 => 
            array (
                'city_id' => 230,
                'city' => 'Jaffna',
                'country_id' => 88,
                'last_update' => '2006-02-15 04:45:25',
            ),
            230 => 
            array (
                'city_id' => 231,
                'city' => 'Jaipur',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            231 => 
            array (
                'city_id' => 232,
                'city' => 'Jakarta',
                'country_id' => 45,
                'last_update' => '2006-02-15 04:45:25',
            ),
            232 => 
            array (
                'city_id' => 233,
                'city' => 'Jalib al-Shuyukh',
                'country_id' => 53,
                'last_update' => '2006-02-15 04:45:25',
            ),
            233 => 
            array (
                'city_id' => 234,
                'city' => 'Jamalpur',
                'country_id' => 12,
                'last_update' => '2006-02-15 04:45:25',
            ),
            234 => 
            array (
                'city_id' => 235,
                'city' => 'Jaroslavl',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            235 => 
            array (
                'city_id' => 236,
                'city' => 'Jastrzebie-Zdrj',
                'country_id' => 76,
                'last_update' => '2006-02-15 04:45:25',
            ),
            236 => 
            array (
                'city_id' => 237,
                'city' => 'Jedda',
                'country_id' => 82,
                'last_update' => '2006-02-15 04:45:25',
            ),
            237 => 
            array (
                'city_id' => 238,
                'city' => 'Jelets',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            238 => 
            array (
                'city_id' => 239,
                'city' => 'Jhansi',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            239 => 
            array (
                'city_id' => 240,
                'city' => 'Jinchang',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            240 => 
            array (
                'city_id' => 241,
                'city' => 'Jining',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            241 => 
            array (
                'city_id' => 242,
                'city' => 'Jinzhou',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            242 => 
            array (
                'city_id' => 243,
                'city' => 'Jodhpur',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            243 => 
            array (
                'city_id' => 244,
                'city' => 'Johannesburg',
                'country_id' => 85,
                'last_update' => '2006-02-15 04:45:25',
            ),
            244 => 
            array (
                'city_id' => 245,
                'city' => 'Joliet',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            245 => 
            array (
                'city_id' => 246,
                'city' => 'Jos Azueta',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            246 => 
            array (
                'city_id' => 247,
                'city' => 'Juazeiro do Norte',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            247 => 
            array (
                'city_id' => 248,
                'city' => 'Juiz de Fora',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            248 => 
            array (
                'city_id' => 249,
                'city' => 'Junan',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            249 => 
            array (
                'city_id' => 250,
                'city' => 'Jurez',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            250 => 
            array (
                'city_id' => 251,
                'city' => 'Kabul',
                'country_id' => 1,
                'last_update' => '2006-02-15 04:45:25',
            ),
            251 => 
            array (
                'city_id' => 252,
                'city' => 'Kaduna',
                'country_id' => 69,
                'last_update' => '2006-02-15 04:45:25',
            ),
            252 => 
            array (
                'city_id' => 253,
                'city' => 'Kakamigahara',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            253 => 
            array (
                'city_id' => 254,
                'city' => 'Kaliningrad',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            254 => 
            array (
                'city_id' => 255,
                'city' => 'Kalisz',
                'country_id' => 76,
                'last_update' => '2006-02-15 04:45:25',
            ),
            255 => 
            array (
                'city_id' => 256,
                'city' => 'Kamakura',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            256 => 
            array (
                'city_id' => 257,
                'city' => 'Kamarhati',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            257 => 
            array (
                'city_id' => 258,
                'city' => 'Kamjanets-Podilskyi',
                'country_id' => 100,
                'last_update' => '2006-02-15 04:45:25',
            ),
            258 => 
            array (
                'city_id' => 259,
                'city' => 'Kamyin',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            259 => 
            array (
                'city_id' => 260,
                'city' => 'Kanazawa',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            260 => 
            array (
                'city_id' => 261,
                'city' => 'Kanchrapara',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            261 => 
            array (
                'city_id' => 262,
                'city' => 'Kansas City',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            262 => 
            array (
                'city_id' => 263,
                'city' => 'Karnal',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            263 => 
            array (
                'city_id' => 264,
                'city' => 'Katihar',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            264 => 
            array (
                'city_id' => 265,
                'city' => 'Kermanshah',
                'country_id' => 46,
                'last_update' => '2006-02-15 04:45:25',
            ),
            265 => 
            array (
                'city_id' => 266,
                'city' => 'Kilis',
                'country_id' => 97,
                'last_update' => '2006-02-15 04:45:25',
            ),
            266 => 
            array (
                'city_id' => 267,
                'city' => 'Kimberley',
                'country_id' => 85,
                'last_update' => '2006-02-15 04:45:25',
            ),
            267 => 
            array (
                'city_id' => 268,
                'city' => 'Kimchon',
                'country_id' => 86,
                'last_update' => '2006-02-15 04:45:25',
            ),
            268 => 
            array (
                'city_id' => 269,
                'city' => 'Kingstown',
                'country_id' => 81,
                'last_update' => '2006-02-15 04:45:25',
            ),
            269 => 
            array (
                'city_id' => 270,
                'city' => 'Kirovo-Tepetsk',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            270 => 
            array (
                'city_id' => 271,
                'city' => 'Kisumu',
                'country_id' => 52,
                'last_update' => '2006-02-15 04:45:25',
            ),
            271 => 
            array (
                'city_id' => 272,
                'city' => 'Kitwe',
                'country_id' => 109,
                'last_update' => '2006-02-15 04:45:25',
            ),
            272 => 
            array (
                'city_id' => 273,
                'city' => 'Klerksdorp',
                'country_id' => 85,
                'last_update' => '2006-02-15 04:45:25',
            ),
            273 => 
            array (
                'city_id' => 274,
                'city' => 'Kolpino',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            274 => 
            array (
                'city_id' => 275,
                'city' => 'Konotop',
                'country_id' => 100,
                'last_update' => '2006-02-15 04:45:25',
            ),
            275 => 
            array (
                'city_id' => 276,
                'city' => 'Koriyama',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            276 => 
            array (
                'city_id' => 277,
                'city' => 'Korla',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            277 => 
            array (
                'city_id' => 278,
                'city' => 'Korolev',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            278 => 
            array (
                'city_id' => 279,
                'city' => 'Kowloon and New Kowloon',
                'country_id' => 42,
                'last_update' => '2006-02-15 04:45:25',
            ),
            279 => 
            array (
                'city_id' => 280,
                'city' => 'Kragujevac',
                'country_id' => 108,
                'last_update' => '2006-02-15 04:45:25',
            ),
            280 => 
            array (
                'city_id' => 281,
                'city' => 'Ktahya',
                'country_id' => 97,
                'last_update' => '2006-02-15 04:45:25',
            ),
            281 => 
            array (
                'city_id' => 282,
                'city' => 'Kuching',
                'country_id' => 59,
                'last_update' => '2006-02-15 04:45:25',
            ),
            282 => 
            array (
                'city_id' => 283,
                'city' => 'Kumbakonam',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            283 => 
            array (
                'city_id' => 284,
                'city' => 'Kurashiki',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            284 => 
            array (
                'city_id' => 285,
                'city' => 'Kurgan',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            285 => 
            array (
                'city_id' => 286,
                'city' => 'Kursk',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            286 => 
            array (
                'city_id' => 287,
                'city' => 'Kuwana',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            287 => 
            array (
                'city_id' => 288,
                'city' => 'La Paz',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            288 => 
            array (
                'city_id' => 289,
                'city' => 'La Plata',
                'country_id' => 6,
                'last_update' => '2006-02-15 04:45:25',
            ),
            289 => 
            array (
                'city_id' => 290,
                'city' => 'La Romana',
                'country_id' => 27,
                'last_update' => '2006-02-15 04:45:25',
            ),
            290 => 
            array (
                'city_id' => 291,
                'city' => 'Laiwu',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            291 => 
            array (
                'city_id' => 292,
                'city' => 'Lancaster',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            292 => 
            array (
                'city_id' => 293,
                'city' => 'Laohekou',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            293 => 
            array (
                'city_id' => 294,
                'city' => 'Lapu-Lapu',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            294 => 
            array (
                'city_id' => 295,
                'city' => 'Laredo',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            295 => 
            array (
                'city_id' => 296,
                'city' => 'Lausanne',
                'country_id' => 91,
                'last_update' => '2006-02-15 04:45:25',
            ),
            296 => 
            array (
                'city_id' => 297,
                'city' => 'Le Mans',
                'country_id' => 34,
                'last_update' => '2006-02-15 04:45:25',
            ),
            297 => 
            array (
                'city_id' => 298,
                'city' => 'Lengshuijiang',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            298 => 
            array (
                'city_id' => 299,
                'city' => 'Leshan',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            299 => 
            array (
                'city_id' => 300,
                'city' => 'Lethbridge',
                'country_id' => 20,
                'last_update' => '2006-02-15 04:45:25',
            ),
            300 => 
            array (
                'city_id' => 301,
                'city' => 'Lhokseumawe',
                'country_id' => 45,
                'last_update' => '2006-02-15 04:45:25',
            ),
            301 => 
            array (
                'city_id' => 302,
                'city' => 'Liaocheng',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            302 => 
            array (
                'city_id' => 303,
                'city' => 'Liepaja',
                'country_id' => 54,
                'last_update' => '2006-02-15 04:45:25',
            ),
            303 => 
            array (
                'city_id' => 304,
                'city' => 'Lilongwe',
                'country_id' => 58,
                'last_update' => '2006-02-15 04:45:25',
            ),
            304 => 
            array (
                'city_id' => 305,
                'city' => 'Lima',
                'country_id' => 74,
                'last_update' => '2006-02-15 04:45:25',
            ),
            305 => 
            array (
                'city_id' => 306,
                'city' => 'Lincoln',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            306 => 
            array (
                'city_id' => 307,
                'city' => 'Linz',
                'country_id' => 9,
                'last_update' => '2006-02-15 04:45:25',
            ),
            307 => 
            array (
                'city_id' => 308,
                'city' => 'Lipetsk',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            308 => 
            array (
                'city_id' => 309,
                'city' => 'Livorno',
                'country_id' => 49,
                'last_update' => '2006-02-15 04:45:25',
            ),
            309 => 
            array (
                'city_id' => 310,
                'city' => 'Ljubertsy',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            310 => 
            array (
                'city_id' => 311,
                'city' => 'Loja',
                'country_id' => 28,
                'last_update' => '2006-02-15 04:45:25',
            ),
            311 => 
            array (
                'city_id' => 312,
                'city' => 'London',
                'country_id' => 102,
                'last_update' => '2006-02-15 04:45:25',
            ),
            312 => 
            array (
                'city_id' => 313,
                'city' => 'London',
                'country_id' => 20,
                'last_update' => '2006-02-15 04:45:25',
            ),
            313 => 
            array (
                'city_id' => 314,
                'city' => 'Lublin',
                'country_id' => 76,
                'last_update' => '2006-02-15 04:45:25',
            ),
            314 => 
            array (
                'city_id' => 315,
                'city' => 'Lubumbashi',
                'country_id' => 25,
                'last_update' => '2006-02-15 04:45:25',
            ),
            315 => 
            array (
                'city_id' => 316,
                'city' => 'Lungtan',
                'country_id' => 92,
                'last_update' => '2006-02-15 04:45:25',
            ),
            316 => 
            array (
                'city_id' => 317,
                'city' => 'Luzinia',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            317 => 
            array (
                'city_id' => 318,
                'city' => 'Madiun',
                'country_id' => 45,
                'last_update' => '2006-02-15 04:45:25',
            ),
            318 => 
            array (
                'city_id' => 319,
                'city' => 'Mahajanga',
                'country_id' => 57,
                'last_update' => '2006-02-15 04:45:25',
            ),
            319 => 
            array (
                'city_id' => 320,
                'city' => 'Maikop',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            320 => 
            array (
                'city_id' => 321,
                'city' => 'Malm',
                'country_id' => 90,
                'last_update' => '2006-02-15 04:45:25',
            ),
            321 => 
            array (
                'city_id' => 322,
                'city' => 'Manchester',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            322 => 
            array (
                'city_id' => 323,
                'city' => 'Mandaluyong',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            323 => 
            array (
                'city_id' => 324,
                'city' => 'Mandi Bahauddin',
                'country_id' => 72,
                'last_update' => '2006-02-15 04:45:25',
            ),
            324 => 
            array (
                'city_id' => 325,
                'city' => 'Mannheim',
                'country_id' => 38,
                'last_update' => '2006-02-15 04:45:25',
            ),
            325 => 
            array (
                'city_id' => 326,
                'city' => 'Maracabo',
                'country_id' => 104,
                'last_update' => '2006-02-15 04:45:25',
            ),
            326 => 
            array (
                'city_id' => 327,
                'city' => 'Mardan',
                'country_id' => 72,
                'last_update' => '2006-02-15 04:45:25',
            ),
            327 => 
            array (
                'city_id' => 328,
                'city' => 'Maring',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            328 => 
            array (
                'city_id' => 329,
                'city' => 'Masqat',
                'country_id' => 71,
                'last_update' => '2006-02-15 04:45:25',
            ),
            329 => 
            array (
                'city_id' => 330,
                'city' => 'Matamoros',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            330 => 
            array (
                'city_id' => 331,
                'city' => 'Matsue',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            331 => 
            array (
                'city_id' => 332,
                'city' => 'Meixian',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            332 => 
            array (
                'city_id' => 333,
                'city' => 'Memphis',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            333 => 
            array (
                'city_id' => 334,
                'city' => 'Merlo',
                'country_id' => 6,
                'last_update' => '2006-02-15 04:45:25',
            ),
            334 => 
            array (
                'city_id' => 335,
                'city' => 'Mexicali',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            335 => 
            array (
                'city_id' => 336,
                'city' => 'Miraj',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            336 => 
            array (
                'city_id' => 337,
                'city' => 'Mit Ghamr',
                'country_id' => 29,
                'last_update' => '2006-02-15 04:45:25',
            ),
            337 => 
            array (
                'city_id' => 338,
                'city' => 'Miyakonojo',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            338 => 
            array (
                'city_id' => 339,
                'city' => 'Mogiljov',
                'country_id' => 13,
                'last_update' => '2006-02-15 04:45:25',
            ),
            339 => 
            array (
                'city_id' => 340,
                'city' => 'Molodetno',
                'country_id' => 13,
                'last_update' => '2006-02-15 04:45:25',
            ),
            340 => 
            array (
                'city_id' => 341,
                'city' => 'Monclova',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            341 => 
            array (
                'city_id' => 342,
                'city' => 'Monywa',
                'country_id' => 64,
                'last_update' => '2006-02-15 04:45:25',
            ),
            342 => 
            array (
                'city_id' => 343,
                'city' => 'Moscow',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            343 => 
            array (
                'city_id' => 344,
                'city' => 'Mosul',
                'country_id' => 47,
                'last_update' => '2006-02-15 04:45:25',
            ),
            344 => 
            array (
                'city_id' => 345,
                'city' => 'Mukateve',
                'country_id' => 100,
                'last_update' => '2006-02-15 04:45:25',
            ),
            345 => 
            array (
                'city_id' => 346,
            'city' => 'Munger (Monghyr)',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            346 => 
            array (
                'city_id' => 347,
                'city' => 'Mwanza',
                'country_id' => 93,
                'last_update' => '2006-02-15 04:45:25',
            ),
            347 => 
            array (
                'city_id' => 348,
                'city' => 'Mwene-Ditu',
                'country_id' => 25,
                'last_update' => '2006-02-15 04:45:25',
            ),
            348 => 
            array (
                'city_id' => 349,
                'city' => 'Myingyan',
                'country_id' => 64,
                'last_update' => '2006-02-15 04:45:25',
            ),
            349 => 
            array (
                'city_id' => 350,
                'city' => 'Mysore',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            350 => 
            array (
                'city_id' => 351,
                'city' => 'Naala-Porto',
                'country_id' => 63,
                'last_update' => '2006-02-15 04:45:25',
            ),
            351 => 
            array (
                'city_id' => 352,
                'city' => 'Nabereznyje Telny',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            352 => 
            array (
                'city_id' => 353,
                'city' => 'Nador',
                'country_id' => 62,
                'last_update' => '2006-02-15 04:45:25',
            ),
            353 => 
            array (
                'city_id' => 354,
                'city' => 'Nagaon',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            354 => 
            array (
                'city_id' => 355,
                'city' => 'Nagareyama',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            355 => 
            array (
                'city_id' => 356,
                'city' => 'Najafabad',
                'country_id' => 46,
                'last_update' => '2006-02-15 04:45:25',
            ),
            356 => 
            array (
                'city_id' => 357,
                'city' => 'Naju',
                'country_id' => 86,
                'last_update' => '2006-02-15 04:45:25',
            ),
            357 => 
            array (
                'city_id' => 358,
                'city' => 'Nakhon Sawan',
                'country_id' => 94,
                'last_update' => '2006-02-15 04:45:25',
            ),
            358 => 
            array (
                'city_id' => 359,
                'city' => 'Nam Dinh',
                'country_id' => 105,
                'last_update' => '2006-02-15 04:45:25',
            ),
            359 => 
            array (
                'city_id' => 360,
                'city' => 'Namibe',
                'country_id' => 4,
                'last_update' => '2006-02-15 04:45:25',
            ),
            360 => 
            array (
                'city_id' => 361,
                'city' => 'Nantou',
                'country_id' => 92,
                'last_update' => '2006-02-15 04:45:25',
            ),
            361 => 
            array (
                'city_id' => 362,
                'city' => 'Nanyang',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            362 => 
            array (
                'city_id' => 363,
                'city' => 'NDjamna',
                'country_id' => 21,
                'last_update' => '2006-02-15 04:45:25',
            ),
            363 => 
            array (
                'city_id' => 364,
                'city' => 'Newcastle',
                'country_id' => 85,
                'last_update' => '2006-02-15 04:45:25',
            ),
            364 => 
            array (
                'city_id' => 365,
                'city' => 'Nezahualcyotl',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            365 => 
            array (
                'city_id' => 366,
                'city' => 'Nha Trang',
                'country_id' => 105,
                'last_update' => '2006-02-15 04:45:25',
            ),
            366 => 
            array (
                'city_id' => 367,
                'city' => 'Niznekamsk',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            367 => 
            array (
                'city_id' => 368,
                'city' => 'Novi Sad',
                'country_id' => 108,
                'last_update' => '2006-02-15 04:45:25',
            ),
            368 => 
            array (
                'city_id' => 369,
                'city' => 'Novoterkassk',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            369 => 
            array (
                'city_id' => 370,
                'city' => 'Nukualofa',
                'country_id' => 95,
                'last_update' => '2006-02-15 04:45:25',
            ),
            370 => 
            array (
                'city_id' => 371,
                'city' => 'Nuuk',
                'country_id' => 40,
                'last_update' => '2006-02-15 04:45:25',
            ),
            371 => 
            array (
                'city_id' => 372,
                'city' => 'Nyeri',
                'country_id' => 52,
                'last_update' => '2006-02-15 04:45:25',
            ),
            372 => 
            array (
                'city_id' => 373,
                'city' => 'Ocumare del Tuy',
                'country_id' => 104,
                'last_update' => '2006-02-15 04:45:25',
            ),
            373 => 
            array (
                'city_id' => 374,
                'city' => 'Ogbomosho',
                'country_id' => 69,
                'last_update' => '2006-02-15 04:45:25',
            ),
            374 => 
            array (
                'city_id' => 375,
                'city' => 'Okara',
                'country_id' => 72,
                'last_update' => '2006-02-15 04:45:25',
            ),
            375 => 
            array (
                'city_id' => 376,
                'city' => 'Okayama',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            376 => 
            array (
                'city_id' => 377,
                'city' => 'Okinawa',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            377 => 
            array (
                'city_id' => 378,
                'city' => 'Olomouc',
                'country_id' => 26,
                'last_update' => '2006-02-15 04:45:25',
            ),
            378 => 
            array (
                'city_id' => 379,
                'city' => 'Omdurman',
                'country_id' => 89,
                'last_update' => '2006-02-15 04:45:25',
            ),
            379 => 
            array (
                'city_id' => 380,
                'city' => 'Omiya',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            380 => 
            array (
                'city_id' => 381,
                'city' => 'Ondo',
                'country_id' => 69,
                'last_update' => '2006-02-15 04:45:25',
            ),
            381 => 
            array (
                'city_id' => 382,
                'city' => 'Onomichi',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            382 => 
            array (
                'city_id' => 383,
                'city' => 'Oshawa',
                'country_id' => 20,
                'last_update' => '2006-02-15 04:45:25',
            ),
            383 => 
            array (
                'city_id' => 384,
                'city' => 'Osmaniye',
                'country_id' => 97,
                'last_update' => '2006-02-15 04:45:25',
            ),
            384 => 
            array (
                'city_id' => 385,
                'city' => 'ostka',
                'country_id' => 100,
                'last_update' => '2006-02-15 04:45:25',
            ),
            385 => 
            array (
                'city_id' => 386,
                'city' => 'Otsu',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            386 => 
            array (
                'city_id' => 387,
                'city' => 'Oulu',
                'country_id' => 33,
                'last_update' => '2006-02-15 04:45:25',
            ),
            387 => 
            array (
                'city_id' => 388,
            'city' => 'Ourense (Orense)',
                'country_id' => 87,
                'last_update' => '2006-02-15 04:45:25',
            ),
            388 => 
            array (
                'city_id' => 389,
                'city' => 'Owo',
                'country_id' => 69,
                'last_update' => '2006-02-15 04:45:25',
            ),
            389 => 
            array (
                'city_id' => 390,
                'city' => 'Oyo',
                'country_id' => 69,
                'last_update' => '2006-02-15 04:45:25',
            ),
            390 => 
            array (
                'city_id' => 391,
                'city' => 'Ozamis',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            391 => 
            array (
                'city_id' => 392,
                'city' => 'Paarl',
                'country_id' => 85,
                'last_update' => '2006-02-15 04:45:25',
            ),
            392 => 
            array (
                'city_id' => 393,
                'city' => 'Pachuca de Soto',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            393 => 
            array (
                'city_id' => 394,
                'city' => 'Pak Kret',
                'country_id' => 94,
                'last_update' => '2006-02-15 04:45:25',
            ),
            394 => 
            array (
                'city_id' => 395,
            'city' => 'Palghat (Palakkad)',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            395 => 
            array (
                'city_id' => 396,
                'city' => 'Pangkal Pinang',
                'country_id' => 45,
                'last_update' => '2006-02-15 04:45:25',
            ),
            396 => 
            array (
                'city_id' => 397,
                'city' => 'Papeete',
                'country_id' => 36,
                'last_update' => '2006-02-15 04:45:25',
            ),
            397 => 
            array (
                'city_id' => 398,
                'city' => 'Parbhani',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            398 => 
            array (
                'city_id' => 399,
                'city' => 'Pathankot',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            399 => 
            array (
                'city_id' => 400,
                'city' => 'Patiala',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            400 => 
            array (
                'city_id' => 401,
                'city' => 'Patras',
                'country_id' => 39,
                'last_update' => '2006-02-15 04:45:25',
            ),
            401 => 
            array (
                'city_id' => 402,
                'city' => 'Pavlodar',
                'country_id' => 51,
                'last_update' => '2006-02-15 04:45:25',
            ),
            402 => 
            array (
                'city_id' => 403,
                'city' => 'Pemalang',
                'country_id' => 45,
                'last_update' => '2006-02-15 04:45:25',
            ),
            403 => 
            array (
                'city_id' => 404,
                'city' => 'Peoria',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            404 => 
            array (
                'city_id' => 405,
                'city' => 'Pereira',
                'country_id' => 24,
                'last_update' => '2006-02-15 04:45:25',
            ),
            405 => 
            array (
                'city_id' => 406,
                'city' => 'Phnom Penh',
                'country_id' => 18,
                'last_update' => '2006-02-15 04:45:25',
            ),
            406 => 
            array (
                'city_id' => 407,
                'city' => 'Pingxiang',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            407 => 
            array (
                'city_id' => 408,
                'city' => 'Pjatigorsk',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            408 => 
            array (
                'city_id' => 409,
                'city' => 'Plock',
                'country_id' => 76,
                'last_update' => '2006-02-15 04:45:25',
            ),
            409 => 
            array (
                'city_id' => 410,
                'city' => 'Po',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            410 => 
            array (
                'city_id' => 411,
                'city' => 'Ponce',
                'country_id' => 77,
                'last_update' => '2006-02-15 04:45:25',
            ),
            411 => 
            array (
                'city_id' => 412,
                'city' => 'Pontianak',
                'country_id' => 45,
                'last_update' => '2006-02-15 04:45:25',
            ),
            412 => 
            array (
                'city_id' => 413,
                'city' => 'Poos de Caldas',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            413 => 
            array (
                'city_id' => 414,
                'city' => 'Portoviejo',
                'country_id' => 28,
                'last_update' => '2006-02-15 04:45:25',
            ),
            414 => 
            array (
                'city_id' => 415,
                'city' => 'Probolinggo',
                'country_id' => 45,
                'last_update' => '2006-02-15 04:45:25',
            ),
            415 => 
            array (
                'city_id' => 416,
                'city' => 'Pudukkottai',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            416 => 
            array (
                'city_id' => 417,
                'city' => 'Pune',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            417 => 
            array (
                'city_id' => 418,
            'city' => 'Purnea (Purnia)',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            418 => 
            array (
                'city_id' => 419,
                'city' => 'Purwakarta',
                'country_id' => 45,
                'last_update' => '2006-02-15 04:45:25',
            ),
            419 => 
            array (
                'city_id' => 420,
                'city' => 'Pyongyang',
                'country_id' => 70,
                'last_update' => '2006-02-15 04:45:25',
            ),
            420 => 
            array (
                'city_id' => 421,
                'city' => 'Qalyub',
                'country_id' => 29,
                'last_update' => '2006-02-15 04:45:25',
            ),
            421 => 
            array (
                'city_id' => 422,
                'city' => 'Qinhuangdao',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            422 => 
            array (
                'city_id' => 423,
                'city' => 'Qomsheh',
                'country_id' => 46,
                'last_update' => '2006-02-15 04:45:25',
            ),
            423 => 
            array (
                'city_id' => 424,
                'city' => 'Quilmes',
                'country_id' => 6,
                'last_update' => '2006-02-15 04:45:25',
            ),
            424 => 
            array (
                'city_id' => 425,
                'city' => 'Rae Bareli',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            425 => 
            array (
                'city_id' => 426,
                'city' => 'Rajkot',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            426 => 
            array (
                'city_id' => 427,
                'city' => 'Rampur',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            427 => 
            array (
                'city_id' => 428,
                'city' => 'Rancagua',
                'country_id' => 22,
                'last_update' => '2006-02-15 04:45:25',
            ),
            428 => 
            array (
                'city_id' => 429,
                'city' => 'Ranchi',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            429 => 
            array (
                'city_id' => 430,
                'city' => 'Richmond Hill',
                'country_id' => 20,
                'last_update' => '2006-02-15 04:45:25',
            ),
            430 => 
            array (
                'city_id' => 431,
                'city' => 'Rio Claro',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            431 => 
            array (
                'city_id' => 432,
                'city' => 'Rizhao',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            432 => 
            array (
                'city_id' => 433,
                'city' => 'Roanoke',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            433 => 
            array (
                'city_id' => 434,
                'city' => 'Robamba',
                'country_id' => 28,
                'last_update' => '2006-02-15 04:45:25',
            ),
            434 => 
            array (
                'city_id' => 435,
                'city' => 'Rockford',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            435 => 
            array (
                'city_id' => 436,
                'city' => 'Ruse',
                'country_id' => 17,
                'last_update' => '2006-02-15 04:45:25',
            ),
            436 => 
            array (
                'city_id' => 437,
                'city' => 'Rustenburg',
                'country_id' => 85,
                'last_update' => '2006-02-15 04:45:25',
            ),
            437 => 
            array (
                'city_id' => 438,
                'city' => 's-Hertogenbosch',
                'country_id' => 67,
                'last_update' => '2006-02-15 04:45:25',
            ),
            438 => 
            array (
                'city_id' => 439,
                'city' => 'Saarbrcken',
                'country_id' => 38,
                'last_update' => '2006-02-15 04:45:25',
            ),
            439 => 
            array (
                'city_id' => 440,
                'city' => 'Sagamihara',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            440 => 
            array (
                'city_id' => 441,
                'city' => 'Saint Louis',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            441 => 
            array (
                'city_id' => 442,
                'city' => 'Saint-Denis',
                'country_id' => 79,
                'last_update' => '2006-02-15 04:45:25',
            ),
            442 => 
            array (
                'city_id' => 443,
                'city' => 'Sal',
                'country_id' => 62,
                'last_update' => '2006-02-15 04:45:25',
            ),
            443 => 
            array (
                'city_id' => 444,
                'city' => 'Salala',
                'country_id' => 71,
                'last_update' => '2006-02-15 04:45:25',
            ),
            444 => 
            array (
                'city_id' => 445,
                'city' => 'Salamanca',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            445 => 
            array (
                'city_id' => 446,
                'city' => 'Salinas',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            446 => 
            array (
                'city_id' => 447,
                'city' => 'Salzburg',
                'country_id' => 9,
                'last_update' => '2006-02-15 04:45:25',
            ),
            447 => 
            array (
                'city_id' => 448,
                'city' => 'Sambhal',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            448 => 
            array (
                'city_id' => 449,
                'city' => 'San Bernardino',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            449 => 
            array (
                'city_id' => 450,
                'city' => 'San Felipe de Puerto Plata',
                'country_id' => 27,
                'last_update' => '2006-02-15 04:45:25',
            ),
            450 => 
            array (
                'city_id' => 451,
                'city' => 'San Felipe del Progreso',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            451 => 
            array (
                'city_id' => 452,
                'city' => 'San Juan Bautista Tuxtepec',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            452 => 
            array (
                'city_id' => 453,
                'city' => 'San Lorenzo',
                'country_id' => 73,
                'last_update' => '2006-02-15 04:45:25',
            ),
            453 => 
            array (
                'city_id' => 454,
                'city' => 'San Miguel de Tucumn',
                'country_id' => 6,
                'last_update' => '2006-02-15 04:45:25',
            ),
            454 => 
            array (
                'city_id' => 455,
                'city' => 'Sanaa',
                'country_id' => 107,
                'last_update' => '2006-02-15 04:45:25',
            ),
            455 => 
            array (
                'city_id' => 456,
                'city' => 'Santa Brbara dOeste',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            456 => 
            array (
                'city_id' => 457,
                'city' => 'Santa F',
                'country_id' => 6,
                'last_update' => '2006-02-15 04:45:25',
            ),
            457 => 
            array (
                'city_id' => 458,
                'city' => 'Santa Rosa',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            458 => 
            array (
                'city_id' => 459,
                'city' => 'Santiago de Compostela',
                'country_id' => 87,
                'last_update' => '2006-02-15 04:45:25',
            ),
            459 => 
            array (
                'city_id' => 460,
                'city' => 'Santiago de los Caballeros',
                'country_id' => 27,
                'last_update' => '2006-02-15 04:45:25',
            ),
            460 => 
            array (
                'city_id' => 461,
                'city' => 'Santo Andr',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            461 => 
            array (
                'city_id' => 462,
                'city' => 'Sanya',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            462 => 
            array (
                'city_id' => 463,
                'city' => 'Sasebo',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            463 => 
            array (
                'city_id' => 464,
                'city' => 'Satna',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            464 => 
            array (
                'city_id' => 465,
                'city' => 'Sawhaj',
                'country_id' => 29,
                'last_update' => '2006-02-15 04:45:25',
            ),
            465 => 
            array (
                'city_id' => 466,
                'city' => 'Serpuhov',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            466 => 
            array (
                'city_id' => 467,
                'city' => 'Shahr-e Kord',
                'country_id' => 46,
                'last_update' => '2006-02-15 04:45:25',
            ),
            467 => 
            array (
                'city_id' => 468,
                'city' => 'Shanwei',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            468 => 
            array (
                'city_id' => 469,
                'city' => 'Shaoguan',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            469 => 
            array (
                'city_id' => 470,
                'city' => 'Sharja',
                'country_id' => 101,
                'last_update' => '2006-02-15 04:45:25',
            ),
            470 => 
            array (
                'city_id' => 471,
                'city' => 'Shenzhen',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            471 => 
            array (
                'city_id' => 472,
                'city' => 'Shikarpur',
                'country_id' => 72,
                'last_update' => '2006-02-15 04:45:25',
            ),
            472 => 
            array (
                'city_id' => 473,
                'city' => 'Shimoga',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            473 => 
            array (
                'city_id' => 474,
                'city' => 'Shimonoseki',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            474 => 
            array (
                'city_id' => 475,
                'city' => 'Shivapuri',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            475 => 
            array (
                'city_id' => 476,
                'city' => 'Shubra al-Khayma',
                'country_id' => 29,
                'last_update' => '2006-02-15 04:45:25',
            ),
            476 => 
            array (
                'city_id' => 477,
                'city' => 'Siegen',
                'country_id' => 38,
                'last_update' => '2006-02-15 04:45:25',
            ),
            477 => 
            array (
                'city_id' => 478,
            'city' => 'Siliguri (Shiliguri)',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            478 => 
            array (
                'city_id' => 479,
                'city' => 'Simferopol',
                'country_id' => 100,
                'last_update' => '2006-02-15 04:45:25',
            ),
            479 => 
            array (
                'city_id' => 480,
                'city' => 'Sincelejo',
                'country_id' => 24,
                'last_update' => '2006-02-15 04:45:25',
            ),
            480 => 
            array (
                'city_id' => 481,
                'city' => 'Sirjan',
                'country_id' => 46,
                'last_update' => '2006-02-15 04:45:25',
            ),
            481 => 
            array (
                'city_id' => 482,
                'city' => 'Sivas',
                'country_id' => 97,
                'last_update' => '2006-02-15 04:45:25',
            ),
            482 => 
            array (
                'city_id' => 483,
                'city' => 'Skikda',
                'country_id' => 2,
                'last_update' => '2006-02-15 04:45:25',
            ),
            483 => 
            array (
                'city_id' => 484,
                'city' => 'Smolensk',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            484 => 
            array (
                'city_id' => 485,
                'city' => 'So Bernardo do Campo',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            485 => 
            array (
                'city_id' => 486,
                'city' => 'So Leopoldo',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            486 => 
            array (
                'city_id' => 487,
                'city' => 'Sogamoso',
                'country_id' => 24,
                'last_update' => '2006-02-15 04:45:25',
            ),
            487 => 
            array (
                'city_id' => 488,
                'city' => 'Sokoto',
                'country_id' => 69,
                'last_update' => '2006-02-15 04:45:25',
            ),
            488 => 
            array (
                'city_id' => 489,
                'city' => 'Songkhla',
                'country_id' => 94,
                'last_update' => '2006-02-15 04:45:25',
            ),
            489 => 
            array (
                'city_id' => 490,
                'city' => 'Sorocaba',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            490 => 
            array (
                'city_id' => 491,
                'city' => 'Soshanguve',
                'country_id' => 85,
                'last_update' => '2006-02-15 04:45:25',
            ),
            491 => 
            array (
                'city_id' => 492,
                'city' => 'Sousse',
                'country_id' => 96,
                'last_update' => '2006-02-15 04:45:25',
            ),
            492 => 
            array (
                'city_id' => 493,
                'city' => 'South Hill',
                'country_id' => 5,
                'last_update' => '2006-02-15 04:45:25',
            ),
            493 => 
            array (
                'city_id' => 494,
                'city' => 'Southampton',
                'country_id' => 102,
                'last_update' => '2006-02-15 04:45:25',
            ),
            494 => 
            array (
                'city_id' => 495,
                'city' => 'Southend-on-Sea',
                'country_id' => 102,
                'last_update' => '2006-02-15 04:45:25',
            ),
            495 => 
            array (
                'city_id' => 496,
                'city' => 'Southport',
                'country_id' => 102,
                'last_update' => '2006-02-15 04:45:25',
            ),
            496 => 
            array (
                'city_id' => 497,
                'city' => 'Springs',
                'country_id' => 85,
                'last_update' => '2006-02-15 04:45:25',
            ),
            497 => 
            array (
                'city_id' => 498,
                'city' => 'Stara Zagora',
                'country_id' => 17,
                'last_update' => '2006-02-15 04:45:25',
            ),
            498 => 
            array (
                'city_id' => 499,
                'city' => 'Sterling Heights',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            499 => 
            array (
                'city_id' => 500,
                'city' => 'Stockport',
                'country_id' => 102,
                'last_update' => '2006-02-15 04:45:25',
            ),
        ));
        \DB::table('city')->insert(array (
            0 => 
            array (
                'city_id' => 501,
                'city' => 'Sucre',
                'country_id' => 14,
                'last_update' => '2006-02-15 04:45:25',
            ),
            1 => 
            array (
                'city_id' => 502,
                'city' => 'Suihua',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            2 => 
            array (
                'city_id' => 503,
                'city' => 'Sullana',
                'country_id' => 74,
                'last_update' => '2006-02-15 04:45:25',
            ),
            3 => 
            array (
                'city_id' => 504,
                'city' => 'Sultanbeyli',
                'country_id' => 97,
                'last_update' => '2006-02-15 04:45:25',
            ),
            4 => 
            array (
                'city_id' => 505,
                'city' => 'Sumqayit',
                'country_id' => 10,
                'last_update' => '2006-02-15 04:45:25',
            ),
            5 => 
            array (
                'city_id' => 506,
                'city' => 'Sumy',
                'country_id' => 100,
                'last_update' => '2006-02-15 04:45:25',
            ),
            6 => 
            array (
                'city_id' => 507,
                'city' => 'Sungai Petani',
                'country_id' => 59,
                'last_update' => '2006-02-15 04:45:25',
            ),
            7 => 
            array (
                'city_id' => 508,
                'city' => 'Sunnyvale',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            8 => 
            array (
                'city_id' => 509,
                'city' => 'Surakarta',
                'country_id' => 45,
                'last_update' => '2006-02-15 04:45:25',
            ),
            9 => 
            array (
                'city_id' => 510,
                'city' => 'Syktyvkar',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            10 => 
            array (
                'city_id' => 511,
                'city' => 'Syrakusa',
                'country_id' => 49,
                'last_update' => '2006-02-15 04:45:25',
            ),
            11 => 
            array (
                'city_id' => 512,
                'city' => 'Szkesfehrvr',
                'country_id' => 43,
                'last_update' => '2006-02-15 04:45:25',
            ),
            12 => 
            array (
                'city_id' => 513,
                'city' => 'Tabora',
                'country_id' => 93,
                'last_update' => '2006-02-15 04:45:25',
            ),
            13 => 
            array (
                'city_id' => 514,
                'city' => 'Tabriz',
                'country_id' => 46,
                'last_update' => '2006-02-15 04:45:25',
            ),
            14 => 
            array (
                'city_id' => 515,
                'city' => 'Tabuk',
                'country_id' => 82,
                'last_update' => '2006-02-15 04:45:25',
            ),
            15 => 
            array (
                'city_id' => 516,
                'city' => 'Tafuna',
                'country_id' => 3,
                'last_update' => '2006-02-15 04:45:25',
            ),
            16 => 
            array (
                'city_id' => 517,
                'city' => 'Taguig',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            17 => 
            array (
                'city_id' => 518,
                'city' => 'Taizz',
                'country_id' => 107,
                'last_update' => '2006-02-15 04:45:25',
            ),
            18 => 
            array (
                'city_id' => 519,
                'city' => 'Talavera',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            19 => 
            array (
                'city_id' => 520,
                'city' => 'Tallahassee',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            20 => 
            array (
                'city_id' => 521,
                'city' => 'Tama',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            21 => 
            array (
                'city_id' => 522,
                'city' => 'Tambaram',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            22 => 
            array (
                'city_id' => 523,
                'city' => 'Tanauan',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            23 => 
            array (
                'city_id' => 524,
                'city' => 'Tandil',
                'country_id' => 6,
                'last_update' => '2006-02-15 04:45:25',
            ),
            24 => 
            array (
                'city_id' => 525,
                'city' => 'Tangail',
                'country_id' => 12,
                'last_update' => '2006-02-15 04:45:25',
            ),
            25 => 
            array (
                'city_id' => 526,
                'city' => 'Tanshui',
                'country_id' => 92,
                'last_update' => '2006-02-15 04:45:25',
            ),
            26 => 
            array (
                'city_id' => 527,
                'city' => 'Tanza',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            27 => 
            array (
                'city_id' => 528,
                'city' => 'Tarlac',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            28 => 
            array (
                'city_id' => 529,
                'city' => 'Tarsus',
                'country_id' => 97,
                'last_update' => '2006-02-15 04:45:25',
            ),
            29 => 
            array (
                'city_id' => 530,
                'city' => 'Tartu',
                'country_id' => 30,
                'last_update' => '2006-02-15 04:45:25',
            ),
            30 => 
            array (
                'city_id' => 531,
                'city' => 'Teboksary',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            31 => 
            array (
                'city_id' => 532,
                'city' => 'Tegal',
                'country_id' => 45,
                'last_update' => '2006-02-15 04:45:25',
            ),
            32 => 
            array (
                'city_id' => 533,
                'city' => 'Tel Aviv-Jaffa',
                'country_id' => 48,
                'last_update' => '2006-02-15 04:45:25',
            ),
            33 => 
            array (
                'city_id' => 534,
                'city' => 'Tete',
                'country_id' => 63,
                'last_update' => '2006-02-15 04:45:25',
            ),
            34 => 
            array (
                'city_id' => 535,
                'city' => 'Tianjin',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            35 => 
            array (
                'city_id' => 536,
                'city' => 'Tiefa',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            36 => 
            array (
                'city_id' => 537,
                'city' => 'Tieli',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            37 => 
            array (
                'city_id' => 538,
                'city' => 'Tokat',
                'country_id' => 97,
                'last_update' => '2006-02-15 04:45:25',
            ),
            38 => 
            array (
                'city_id' => 539,
                'city' => 'Tonghae',
                'country_id' => 86,
                'last_update' => '2006-02-15 04:45:25',
            ),
            39 => 
            array (
                'city_id' => 540,
                'city' => 'Tongliao',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            40 => 
            array (
                'city_id' => 541,
                'city' => 'Torren',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            41 => 
            array (
                'city_id' => 542,
                'city' => 'Touliu',
                'country_id' => 92,
                'last_update' => '2006-02-15 04:45:25',
            ),
            42 => 
            array (
                'city_id' => 543,
                'city' => 'Toulon',
                'country_id' => 34,
                'last_update' => '2006-02-15 04:45:25',
            ),
            43 => 
            array (
                'city_id' => 544,
                'city' => 'Toulouse',
                'country_id' => 34,
                'last_update' => '2006-02-15 04:45:25',
            ),
            44 => 
            array (
                'city_id' => 545,
                'city' => 'Trshavn',
                'country_id' => 32,
                'last_update' => '2006-02-15 04:45:25',
            ),
            45 => 
            array (
                'city_id' => 546,
                'city' => 'Tsaotun',
                'country_id' => 92,
                'last_update' => '2006-02-15 04:45:25',
            ),
            46 => 
            array (
                'city_id' => 547,
                'city' => 'Tsuyama',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            47 => 
            array (
                'city_id' => 548,
                'city' => 'Tuguegarao',
                'country_id' => 75,
                'last_update' => '2006-02-15 04:45:25',
            ),
            48 => 
            array (
                'city_id' => 549,
                'city' => 'Tychy',
                'country_id' => 76,
                'last_update' => '2006-02-15 04:45:25',
            ),
            49 => 
            array (
                'city_id' => 550,
                'city' => 'Udaipur',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            50 => 
            array (
                'city_id' => 551,
                'city' => 'Udine',
                'country_id' => 49,
                'last_update' => '2006-02-15 04:45:25',
            ),
            51 => 
            array (
                'city_id' => 552,
                'city' => 'Ueda',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            52 => 
            array (
                'city_id' => 553,
                'city' => 'Uijongbu',
                'country_id' => 86,
                'last_update' => '2006-02-15 04:45:25',
            ),
            53 => 
            array (
                'city_id' => 554,
                'city' => 'Uluberia',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            54 => 
            array (
                'city_id' => 555,
                'city' => 'Urawa',
                'country_id' => 50,
                'last_update' => '2006-02-15 04:45:25',
            ),
            55 => 
            array (
                'city_id' => 556,
                'city' => 'Uruapan',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            56 => 
            array (
                'city_id' => 557,
                'city' => 'Usak',
                'country_id' => 97,
                'last_update' => '2006-02-15 04:45:25',
            ),
            57 => 
            array (
                'city_id' => 558,
                'city' => 'Usolje-Sibirskoje',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            58 => 
            array (
                'city_id' => 559,
                'city' => 'Uttarpara-Kotrung',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            59 => 
            array (
                'city_id' => 560,
                'city' => 'Vaduz',
                'country_id' => 55,
                'last_update' => '2006-02-15 04:45:25',
            ),
            60 => 
            array (
                'city_id' => 561,
                'city' => 'Valencia',
                'country_id' => 104,
                'last_update' => '2006-02-15 04:45:25',
            ),
            61 => 
            array (
                'city_id' => 562,
                'city' => 'Valle de la Pascua',
                'country_id' => 104,
                'last_update' => '2006-02-15 04:45:25',
            ),
            62 => 
            array (
                'city_id' => 563,
                'city' => 'Valle de Santiago',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            63 => 
            array (
                'city_id' => 564,
                'city' => 'Valparai',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            64 => 
            array (
                'city_id' => 565,
                'city' => 'Vancouver',
                'country_id' => 20,
                'last_update' => '2006-02-15 04:45:25',
            ),
            65 => 
            array (
                'city_id' => 566,
            'city' => 'Varanasi (Benares)',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            66 => 
            array (
                'city_id' => 567,
                'city' => 'Vicente Lpez',
                'country_id' => 6,
                'last_update' => '2006-02-15 04:45:25',
            ),
            67 => 
            array (
                'city_id' => 568,
                'city' => 'Vijayawada',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            68 => 
            array (
                'city_id' => 569,
                'city' => 'Vila Velha',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            69 => 
            array (
                'city_id' => 570,
                'city' => 'Vilnius',
                'country_id' => 56,
                'last_update' => '2006-02-15 04:45:25',
            ),
            70 => 
            array (
                'city_id' => 571,
                'city' => 'Vinh',
                'country_id' => 105,
                'last_update' => '2006-02-15 04:45:25',
            ),
            71 => 
            array (
                'city_id' => 572,
                'city' => 'Vitria de Santo Anto',
                'country_id' => 15,
                'last_update' => '2006-02-15 04:45:25',
            ),
            72 => 
            array (
                'city_id' => 573,
                'city' => 'Warren',
                'country_id' => 103,
                'last_update' => '2006-02-15 04:45:25',
            ),
            73 => 
            array (
                'city_id' => 574,
                'city' => 'Weifang',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            74 => 
            array (
                'city_id' => 575,
                'city' => 'Witten',
                'country_id' => 38,
                'last_update' => '2006-02-15 04:45:25',
            ),
            75 => 
            array (
                'city_id' => 576,
                'city' => 'Woodridge',
                'country_id' => 8,
                'last_update' => '2006-02-15 04:45:25',
            ),
            76 => 
            array (
                'city_id' => 577,
                'city' => 'Wroclaw',
                'country_id' => 76,
                'last_update' => '2006-02-15 04:45:25',
            ),
            77 => 
            array (
                'city_id' => 578,
                'city' => 'Xiangfan',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            78 => 
            array (
                'city_id' => 579,
                'city' => 'Xiangtan',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            79 => 
            array (
                'city_id' => 580,
                'city' => 'Xintai',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            80 => 
            array (
                'city_id' => 581,
                'city' => 'Xinxiang',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            81 => 
            array (
                'city_id' => 582,
                'city' => 'Yamuna Nagar',
                'country_id' => 44,
                'last_update' => '2006-02-15 04:45:25',
            ),
            82 => 
            array (
                'city_id' => 583,
                'city' => 'Yangor',
                'country_id' => 65,
                'last_update' => '2006-02-15 04:45:25',
            ),
            83 => 
            array (
                'city_id' => 584,
                'city' => 'Yantai',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            84 => 
            array (
                'city_id' => 585,
                'city' => 'Yaound',
                'country_id' => 19,
                'last_update' => '2006-02-15 04:45:25',
            ),
            85 => 
            array (
                'city_id' => 586,
                'city' => 'Yerevan',
                'country_id' => 7,
                'last_update' => '2006-02-15 04:45:25',
            ),
            86 => 
            array (
                'city_id' => 587,
                'city' => 'Yinchuan',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            87 => 
            array (
                'city_id' => 588,
                'city' => 'Yingkou',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            88 => 
            array (
                'city_id' => 589,
                'city' => 'York',
                'country_id' => 102,
                'last_update' => '2006-02-15 04:45:25',
            ),
            89 => 
            array (
                'city_id' => 590,
                'city' => 'Yuncheng',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            90 => 
            array (
                'city_id' => 591,
                'city' => 'Yuzhou',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            91 => 
            array (
                'city_id' => 592,
                'city' => 'Zalantun',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            92 => 
            array (
                'city_id' => 593,
                'city' => 'Zanzibar',
                'country_id' => 93,
                'last_update' => '2006-02-15 04:45:25',
            ),
            93 => 
            array (
                'city_id' => 594,
                'city' => 'Zaoyang',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            94 => 
            array (
                'city_id' => 595,
                'city' => 'Zapopan',
                'country_id' => 60,
                'last_update' => '2006-02-15 04:45:25',
            ),
            95 => 
            array (
                'city_id' => 596,
                'city' => 'Zaria',
                'country_id' => 69,
                'last_update' => '2006-02-15 04:45:25',
            ),
            96 => 
            array (
                'city_id' => 597,
                'city' => 'Zeleznogorsk',
                'country_id' => 80,
                'last_update' => '2006-02-15 04:45:25',
            ),
            97 => 
            array (
                'city_id' => 598,
                'city' => 'Zhezqazghan',
                'country_id' => 51,
                'last_update' => '2006-02-15 04:45:25',
            ),
            98 => 
            array (
                'city_id' => 599,
                'city' => 'Zhoushan',
                'country_id' => 23,
                'last_update' => '2006-02-15 04:45:25',
            ),
            99 => 
            array (
                'city_id' => 600,
                'city' => 'Ziguinchor',
                'country_id' => 83,
                'last_update' => '2006-02-15 04:45:25',
            ),
        ));
        
        
    }
}