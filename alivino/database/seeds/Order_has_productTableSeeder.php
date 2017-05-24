<?php

use Illuminate\Database\Seeder;

class Order_has_productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 1,
            'order_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 2,
            'order_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 6,
            'order_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 11,
            'order_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 15,
            'order_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,16),
            'price' => rand(1, 200) / 10,
            'product_id' => 1,
            'order_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 1,
            'order_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 12,
            'order_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 19,
            'order_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 11,
            'order_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 1,
            'order_id' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 1,
            'order_id' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 11,
            'order_id' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 12,
            'order_id' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 13,
            'order_id' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 1,
            'order_id' => 5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 2,
            'order_id' => 5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 1,
            'order_id' => 6,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 2,
            'order_id' => 6,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 17,
            'order_id' => 6,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 13,
            'order_id' => 7,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 1,
            'order_id' => 8,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 1,
            'order_id' => 9,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('orders_has_products')->insert([
            'amount' => rand(1,11),
            'price' => rand(1, 200) / 10,
            'product_id' => 12,
            'order_id' => 10,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
