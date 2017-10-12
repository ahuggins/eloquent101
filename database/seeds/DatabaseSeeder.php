<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ActorsTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(FilmsTableSeeder::class);
        $this->call(FilmActorTableSeeder::class);
        $this->call(FilmCategoryTableSeeder::class);
        $this->call(FilmTextTableSeeder::class);
        $this->call(InventoryTableSeeder::class);
        $this->call(LanguageTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(RentalsTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(StoresTableSeeder::class);
    }
}
