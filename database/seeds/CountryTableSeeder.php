<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('country')->delete();
        
        \DB::table('country')->insert(array (
            0 => 
            array (
                'country_id' => 1,
                'country' => 'Afghanistan',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            1 => 
            array (
                'country_id' => 2,
                'country' => 'Algeria',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            2 => 
            array (
                'country_id' => 3,
                'country' => 'American Samoa',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            3 => 
            array (
                'country_id' => 4,
                'country' => 'Angola',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            4 => 
            array (
                'country_id' => 5,
                'country' => 'Anguilla',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            5 => 
            array (
                'country_id' => 6,
                'country' => 'Argentina',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            6 => 
            array (
                'country_id' => 7,
                'country' => 'Armenia',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            7 => 
            array (
                'country_id' => 8,
                'country' => 'Australia',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            8 => 
            array (
                'country_id' => 9,
                'country' => 'Austria',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            9 => 
            array (
                'country_id' => 10,
                'country' => 'Azerbaijan',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            10 => 
            array (
                'country_id' => 11,
                'country' => 'Bahrain',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            11 => 
            array (
                'country_id' => 12,
                'country' => 'Bangladesh',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            12 => 
            array (
                'country_id' => 13,
                'country' => 'Belarus',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            13 => 
            array (
                'country_id' => 14,
                'country' => 'Bolivia',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            14 => 
            array (
                'country_id' => 15,
                'country' => 'Brazil',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            15 => 
            array (
                'country_id' => 16,
                'country' => 'Brunei',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            16 => 
            array (
                'country_id' => 17,
                'country' => 'Bulgaria',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            17 => 
            array (
                'country_id' => 18,
                'country' => 'Cambodia',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            18 => 
            array (
                'country_id' => 19,
                'country' => 'Cameroon',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            19 => 
            array (
                'country_id' => 20,
                'country' => 'Canada',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            20 => 
            array (
                'country_id' => 21,
                'country' => 'Chad',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            21 => 
            array (
                'country_id' => 22,
                'country' => 'Chile',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            22 => 
            array (
                'country_id' => 23,
                'country' => 'China',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            23 => 
            array (
                'country_id' => 24,
                'country' => 'Colombia',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            24 => 
            array (
                'country_id' => 25,
                'country' => 'Congo, The Democratic Republic of the',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            25 => 
            array (
                'country_id' => 26,
                'country' => 'Czech Republic',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            26 => 
            array (
                'country_id' => 27,
                'country' => 'Dominican Republic',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            27 => 
            array (
                'country_id' => 28,
                'country' => 'Ecuador',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            28 => 
            array (
                'country_id' => 29,
                'country' => 'Egypt',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            29 => 
            array (
                'country_id' => 30,
                'country' => 'Estonia',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            30 => 
            array (
                'country_id' => 31,
                'country' => 'Ethiopia',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            31 => 
            array (
                'country_id' => 32,
                'country' => 'Faroe Islands',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            32 => 
            array (
                'country_id' => 33,
                'country' => 'Finland',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            33 => 
            array (
                'country_id' => 34,
                'country' => 'France',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            34 => 
            array (
                'country_id' => 35,
                'country' => 'French Guiana',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            35 => 
            array (
                'country_id' => 36,
                'country' => 'French Polynesia',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            36 => 
            array (
                'country_id' => 37,
                'country' => 'Gambia',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            37 => 
            array (
                'country_id' => 38,
                'country' => 'Germany',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            38 => 
            array (
                'country_id' => 39,
                'country' => 'Greece',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            39 => 
            array (
                'country_id' => 40,
                'country' => 'Greenland',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            40 => 
            array (
                'country_id' => 41,
            'country' => 'Holy See (Vatican City State)',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            41 => 
            array (
                'country_id' => 42,
                'country' => 'Hong Kong',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            42 => 
            array (
                'country_id' => 43,
                'country' => 'Hungary',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            43 => 
            array (
                'country_id' => 44,
                'country' => 'India',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            44 => 
            array (
                'country_id' => 45,
                'country' => 'Indonesia',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            45 => 
            array (
                'country_id' => 46,
                'country' => 'Iran',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            46 => 
            array (
                'country_id' => 47,
                'country' => 'Iraq',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            47 => 
            array (
                'country_id' => 48,
                'country' => 'Israel',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            48 => 
            array (
                'country_id' => 49,
                'country' => 'Italy',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            49 => 
            array (
                'country_id' => 50,
                'country' => 'Japan',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            50 => 
            array (
                'country_id' => 51,
                'country' => 'Kazakstan',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            51 => 
            array (
                'country_id' => 52,
                'country' => 'Kenya',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            52 => 
            array (
                'country_id' => 53,
                'country' => 'Kuwait',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            53 => 
            array (
                'country_id' => 54,
                'country' => 'Latvia',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            54 => 
            array (
                'country_id' => 55,
                'country' => 'Liechtenstein',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            55 => 
            array (
                'country_id' => 56,
                'country' => 'Lithuania',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            56 => 
            array (
                'country_id' => 57,
                'country' => 'Madagascar',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            57 => 
            array (
                'country_id' => 58,
                'country' => 'Malawi',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            58 => 
            array (
                'country_id' => 59,
                'country' => 'Malaysia',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            59 => 
            array (
                'country_id' => 60,
                'country' => 'Mexico',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            60 => 
            array (
                'country_id' => 61,
                'country' => 'Moldova',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            61 => 
            array (
                'country_id' => 62,
                'country' => 'Morocco',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            62 => 
            array (
                'country_id' => 63,
                'country' => 'Mozambique',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            63 => 
            array (
                'country_id' => 64,
                'country' => 'Myanmar',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            64 => 
            array (
                'country_id' => 65,
                'country' => 'Nauru',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            65 => 
            array (
                'country_id' => 66,
                'country' => 'Nepal',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            66 => 
            array (
                'country_id' => 67,
                'country' => 'Netherlands',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            67 => 
            array (
                'country_id' => 68,
                'country' => 'New Zealand',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            68 => 
            array (
                'country_id' => 69,
                'country' => 'Nigeria',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            69 => 
            array (
                'country_id' => 70,
                'country' => 'North Korea',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            70 => 
            array (
                'country_id' => 71,
                'country' => 'Oman',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            71 => 
            array (
                'country_id' => 72,
                'country' => 'Pakistan',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            72 => 
            array (
                'country_id' => 73,
                'country' => 'Paraguay',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            73 => 
            array (
                'country_id' => 74,
                'country' => 'Peru',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            74 => 
            array (
                'country_id' => 75,
                'country' => 'Philippines',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            75 => 
            array (
                'country_id' => 76,
                'country' => 'Poland',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            76 => 
            array (
                'country_id' => 77,
                'country' => 'Puerto Rico',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            77 => 
            array (
                'country_id' => 78,
                'country' => 'Romania',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            78 => 
            array (
                'country_id' => 79,
                'country' => 'Runion',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            79 => 
            array (
                'country_id' => 80,
                'country' => 'Russian Federation',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            80 => 
            array (
                'country_id' => 81,
                'country' => 'Saint Vincent and the Grenadines',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            81 => 
            array (
                'country_id' => 82,
                'country' => 'Saudi Arabia',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            82 => 
            array (
                'country_id' => 83,
                'country' => 'Senegal',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            83 => 
            array (
                'country_id' => 84,
                'country' => 'Slovakia',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            84 => 
            array (
                'country_id' => 85,
                'country' => 'South Africa',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            85 => 
            array (
                'country_id' => 86,
                'country' => 'South Korea',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            86 => 
            array (
                'country_id' => 87,
                'country' => 'Spain',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            87 => 
            array (
                'country_id' => 88,
                'country' => 'Sri Lanka',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            88 => 
            array (
                'country_id' => 89,
                'country' => 'Sudan',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            89 => 
            array (
                'country_id' => 90,
                'country' => 'Sweden',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            90 => 
            array (
                'country_id' => 91,
                'country' => 'Switzerland',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            91 => 
            array (
                'country_id' => 92,
                'country' => 'Taiwan',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            92 => 
            array (
                'country_id' => 93,
                'country' => 'Tanzania',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            93 => 
            array (
                'country_id' => 94,
                'country' => 'Thailand',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            94 => 
            array (
                'country_id' => 95,
                'country' => 'Tonga',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            95 => 
            array (
                'country_id' => 96,
                'country' => 'Tunisia',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            96 => 
            array (
                'country_id' => 97,
                'country' => 'Turkey',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            97 => 
            array (
                'country_id' => 98,
                'country' => 'Turkmenistan',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            98 => 
            array (
                'country_id' => 99,
                'country' => 'Tuvalu',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            99 => 
            array (
                'country_id' => 100,
                'country' => 'Ukraine',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            100 => 
            array (
                'country_id' => 101,
                'country' => 'United Arab Emirates',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            101 => 
            array (
                'country_id' => 102,
                'country' => 'United Kingdom',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            102 => 
            array (
                'country_id' => 103,
                'country' => 'United States',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            103 => 
            array (
                'country_id' => 104,
                'country' => 'Venezuela',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            104 => 
            array (
                'country_id' => 105,
                'country' => 'Vietnam',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            105 => 
            array (
                'country_id' => 106,
                'country' => 'Virgin Islands, U.S.',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            106 => 
            array (
                'country_id' => 107,
                'country' => 'Yemen',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            107 => 
            array (
                'country_id' => 108,
                'country' => 'Yugoslavia',
                'updated_at' => '2006-02-15 04:44:00',
            ),
            108 => 
            array (
                'country_id' => 109,
                'country' => 'Zambia',
                'updated_at' => '2006-02-15 04:44:00',
            ),
        ));
        
        
    }
}
