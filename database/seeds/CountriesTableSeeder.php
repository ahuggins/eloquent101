<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country' => 'Afghanistan',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            1 => 
            array (
                'id' => 2,
                'country' => 'Algeria',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            2 => 
            array (
                'id' => 3,
                'country' => 'American Samoa',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            3 => 
            array (
                'id' => 4,
                'country' => 'Angola',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            4 => 
            array (
                'id' => 5,
                'country' => 'Anguilla',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            5 => 
            array (
                'id' => 6,
                'country' => 'Argentina',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            6 => 
            array (
                'id' => 7,
                'country' => 'Armenia',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            7 => 
            array (
                'id' => 8,
                'country' => 'Australia',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            8 => 
            array (
                'id' => 9,
                'country' => 'Austria',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            9 => 
            array (
                'id' => 10,
                'country' => 'Azerbaijan',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            10 => 
            array (
                'id' => 11,
                'country' => 'Bahrain',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            11 => 
            array (
                'id' => 12,
                'country' => 'Bangladesh',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            12 => 
            array (
                'id' => 13,
                'country' => 'Belarus',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            13 => 
            array (
                'id' => 14,
                'country' => 'Bolivia',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            14 => 
            array (
                'id' => 15,
                'country' => 'Brazil',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            15 => 
            array (
                'id' => 16,
                'country' => 'Brunei',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            16 => 
            array (
                'id' => 17,
                'country' => 'Bulgaria',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            17 => 
            array (
                'id' => 18,
                'country' => 'Cambodia',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            18 => 
            array (
                'id' => 19,
                'country' => 'Cameroon',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            19 => 
            array (
                'id' => 20,
                'country' => 'Canada',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            20 => 
            array (
                'id' => 21,
                'country' => 'Chad',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            21 => 
            array (
                'id' => 22,
                'country' => 'Chile',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            22 => 
            array (
                'id' => 23,
                'country' => 'China',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            23 => 
            array (
                'id' => 24,
                'country' => 'Colombia',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            24 => 
            array (
                'id' => 25,
                'country' => 'Congo, The Democratic Republic of the',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            25 => 
            array (
                'id' => 26,
                'country' => 'Czech Republic',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            26 => 
            array (
                'id' => 27,
                'country' => 'Dominican Republic',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            27 => 
            array (
                'id' => 28,
                'country' => 'Ecuador',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            28 => 
            array (
                'id' => 29,
                'country' => 'Egypt',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            29 => 
            array (
                'id' => 30,
                'country' => 'Estonia',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            30 => 
            array (
                'id' => 31,
                'country' => 'Ethiopia',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            31 => 
            array (
                'id' => 32,
                'country' => 'Faroe Islands',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            32 => 
            array (
                'id' => 33,
                'country' => 'Finland',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            33 => 
            array (
                'id' => 34,
                'country' => 'France',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            34 => 
            array (
                'id' => 35,
                'country' => 'French Guiana',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            35 => 
            array (
                'id' => 36,
                'country' => 'French Polynesia',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            36 => 
            array (
                'id' => 37,
                'country' => 'Gambia',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            37 => 
            array (
                'id' => 38,
                'country' => 'Germany',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            38 => 
            array (
                'id' => 39,
                'country' => 'Greece',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            39 => 
            array (
                'id' => 40,
                'country' => 'Greenland',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            40 => 
            array (
                'id' => 41,
            'country' => 'Holy See (Vatican City State)',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            41 => 
            array (
                'id' => 42,
                'country' => 'Hong Kong',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            42 => 
            array (
                'id' => 43,
                'country' => 'Hungary',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            43 => 
            array (
                'id' => 44,
                'country' => 'India',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            44 => 
            array (
                'id' => 45,
                'country' => 'Indonesia',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            45 => 
            array (
                'id' => 46,
                'country' => 'Iran',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            46 => 
            array (
                'id' => 47,
                'country' => 'Iraq',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            47 => 
            array (
                'id' => 48,
                'country' => 'Israel',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            48 => 
            array (
                'id' => 49,
                'country' => 'Italy',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            49 => 
            array (
                'id' => 50,
                'country' => 'Japan',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            50 => 
            array (
                'id' => 51,
                'country' => 'Kazakstan',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            51 => 
            array (
                'id' => 52,
                'country' => 'Kenya',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            52 => 
            array (
                'id' => 53,
                'country' => 'Kuwait',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            53 => 
            array (
                'id' => 54,
                'country' => 'Latvia',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            54 => 
            array (
                'id' => 55,
                'country' => 'Liechtenstein',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            55 => 
            array (
                'id' => 56,
                'country' => 'Lithuania',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            56 => 
            array (
                'id' => 57,
                'country' => 'Madagascar',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            57 => 
            array (
                'id' => 58,
                'country' => 'Malawi',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            58 => 
            array (
                'id' => 59,
                'country' => 'Malaysia',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            59 => 
            array (
                'id' => 60,
                'country' => 'Mexico',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            60 => 
            array (
                'id' => 61,
                'country' => 'Moldova',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            61 => 
            array (
                'id' => 62,
                'country' => 'Morocco',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            62 => 
            array (
                'id' => 63,
                'country' => 'Mozambique',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            63 => 
            array (
                'id' => 64,
                'country' => 'Myanmar',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            64 => 
            array (
                'id' => 65,
                'country' => 'Nauru',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            65 => 
            array (
                'id' => 66,
                'country' => 'Nepal',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            66 => 
            array (
                'id' => 67,
                'country' => 'Netherlands',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            67 => 
            array (
                'id' => 68,
                'country' => 'New Zealand',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            68 => 
            array (
                'id' => 69,
                'country' => 'Nigeria',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            69 => 
            array (
                'id' => 70,
                'country' => 'North Korea',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            70 => 
            array (
                'id' => 71,
                'country' => 'Oman',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            71 => 
            array (
                'id' => 72,
                'country' => 'Pakistan',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            72 => 
            array (
                'id' => 73,
                'country' => 'Paraguay',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            73 => 
            array (
                'id' => 74,
                'country' => 'Peru',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            74 => 
            array (
                'id' => 75,
                'country' => 'Philippines',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            75 => 
            array (
                'id' => 76,
                'country' => 'Poland',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            76 => 
            array (
                'id' => 77,
                'country' => 'Puerto Rico',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            77 => 
            array (
                'id' => 78,
                'country' => 'Romania',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            78 => 
            array (
                'id' => 79,
                'country' => 'Runion',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            79 => 
            array (
                'id' => 80,
                'country' => 'Russian Federation',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            80 => 
            array (
                'id' => 81,
                'country' => 'Saint Vincent and the Grenadines',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            81 => 
            array (
                'id' => 82,
                'country' => 'Saudi Arabia',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            82 => 
            array (
                'id' => 83,
                'country' => 'Senegal',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            83 => 
            array (
                'id' => 84,
                'country' => 'Slovakia',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            84 => 
            array (
                'id' => 85,
                'country' => 'South Africa',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            85 => 
            array (
                'id' => 86,
                'country' => 'South Korea',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            86 => 
            array (
                'id' => 87,
                'country' => 'Spain',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            87 => 
            array (
                'id' => 88,
                'country' => 'Sri Lanka',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            88 => 
            array (
                'id' => 89,
                'country' => 'Sudan',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            89 => 
            array (
                'id' => 90,
                'country' => 'Sweden',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            90 => 
            array (
                'id' => 91,
                'country' => 'Switzerland',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            91 => 
            array (
                'id' => 92,
                'country' => 'Taiwan',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            92 => 
            array (
                'id' => 93,
                'country' => 'Tanzania',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            93 => 
            array (
                'id' => 94,
                'country' => 'Thailand',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            94 => 
            array (
                'id' => 95,
                'country' => 'Tonga',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            95 => 
            array (
                'id' => 96,
                'country' => 'Tunisia',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            96 => 
            array (
                'id' => 97,
                'country' => 'Turkey',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            97 => 
            array (
                'id' => 98,
                'country' => 'Turkmenistan',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            98 => 
            array (
                'id' => 99,
                'country' => 'Tuvalu',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            99 => 
            array (
                'id' => 100,
                'country' => 'Ukraine',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            100 => 
            array (
                'id' => 101,
                'country' => 'United Arab Emirates',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            101 => 
            array (
                'id' => 102,
                'country' => 'United Kingdom',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            102 => 
            array (
                'id' => 103,
                'country' => 'United States',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            103 => 
            array (
                'id' => 104,
                'country' => 'Venezuela',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            104 => 
            array (
                'id' => 105,
                'country' => 'Vietnam',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            105 => 
            array (
                'id' => 106,
                'country' => 'Virgin Islands, U.S.',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            106 => 
            array (
                'id' => 107,
                'country' => 'Yemen',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            107 => 
            array (
                'id' => 108,
                'country' => 'Yugoslavia',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
            108 => 
            array (
                'id' => 109,
                'country' => 'Zambia',
                'updated_at' => '2006-02-15 04:44:00',
                'created_at' => '2017-10-12 00:07:37',
            ),
        ));
        
        
    }
}