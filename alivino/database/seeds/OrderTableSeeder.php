<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        $status = ['geleverd','ongeleverd'];
        DB::table('orders')->insert([
            'user_id' => rand(2,4),
            'status' => $status[rand(0,1)],
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('orders')->insert([
            'user_id' => rand(2,4),
            'status' => $status[rand(0,1)],
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('orders')->insert([
            'user_id' => rand(2,4),
            'status' => $status[rand(0,1)],
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('orders')->insert([
            'user_id' => rand(2,4),
            'status' => $status[rand(0,1)],
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('orders')->insert([
            'user_id' => rand(2,4),
            'status' => $status[rand(0,1)],
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('orders')->insert([
            'user_id' => rand(2,4),
            'status' => $status[rand(0,1)],
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('orders')->insert([
            'user_id' => rand(2,4),
            'status' => $status[rand(0,1)],
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('orders')->insert([
            'user_id' => rand(2,4),
            'status' => $status[rand(0,1)],
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('orders')->insert([
            'user_id' => rand(2,4),
            'status' => $status[rand(0,1)],
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('orders')->insert([
            'user_id' => rand(2,4),
            'status' => $status[rand(0,1)],
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
    }
}
