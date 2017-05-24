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
        // call seeders in right order
        $this->call(UserTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(OrderTableSeeder::class); 
        $this->call(Order_has_productTableSeeder::class); 
        $this->call(ShoppingcarTableSeeder::class); 
        $this->call(AboutshopTableSeeder::class); 

    }
}
