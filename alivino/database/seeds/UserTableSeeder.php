<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Daan',
            'lastname' => 'Zwaenepoel',
            'email' => 'admin@alivino.be',
            'password' => bcrypt('Azerty123'),
            'address' => 'Kaaistraat 10',
            'city' => '1790 Affligem',
            'country' => 'Belgie',
            'admin' => true,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'firstname' => 'Kaat',
            'lastname' => 'Zwaenepoel',
            'email' => 'testuser.1@alivino.be',
            'password' => bcrypt('Azerty123'),
            'address' => 'Kaaistraat 10',
            'city' => '1790 Affligem',
            'country' => 'Belgie',
            'admin' => false,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
         DB::table('users')->insert([
            'firstname' => 'Hubert',
            'lastname' => 'De vos',
            'email' => 'testuser.2@alivino.be',
            'password' => bcrypt('Azerty123'),
            'address' => 'Maaimeerstraat 26',
            'city' => '1790 Affligem',
            'country' => 'Belgie',
            'admin' => false,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
          DB::table('users')->insert([
            'firstname' => 'Annick',
            'lastname' => 'De vos',
            'email' => 'testuser.3@alivino.be',
            'password' => bcrypt('Azerty123'),
            'address' => 'watermolenstraat 2',
            'city' => '1790 Affligem',
            'country' => 'Belgie',
            'admin' => false,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
