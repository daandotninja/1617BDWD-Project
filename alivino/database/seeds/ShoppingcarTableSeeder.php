<?php

use Illuminate\Database\Seeder;

class ShoppingcarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('shoppingcars')->insert([
            'amount' => rand(1,11),
            'product_id' => 1,
            'user_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
         DB::table('shoppingcars')->insert([
            'amount' => rand(1,11),
            'product_id' => 11,
            'user_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('shoppingcars')->insert([
            'amount' => rand(1,11),
            'product_id' => 12,
            'user_id' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
         DB::table('shoppingcars')->insert([
            'amount' => rand(1,11),
            'product_id' =>1,
            'user_id' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
