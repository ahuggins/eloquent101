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
        $this->call(ActorTableSeeder::class);
        $this->call(AddressTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        $this->call(FilmTableSeeder::class);
        $this->call(FilmActorTableSeeder::class);
        $this->call(FilmCategoryTableSeeder::class);
        $this->call(FilmTextTableSeeder::class);
        $this->call(InventoryTableSeeder::class);
        $this->call(LanguageTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
        $this->call(RentalTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(StoreTableSeeder::class);
    }
}
