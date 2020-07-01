<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('user1'),
        ]);

        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('user2'),
        ]);

        DB::table('users')->insert([
            'name' => 'user3',
            'email' => 'user3@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('user3'),
        ]);

        DB::table('users')->insert([
            'name' => 'user4',
            'email' => 'user4@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('user4'),
        ]);

        DB::table('users')->insert([
            'name' => 'user5',
            'email' => 'user5@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('user5'),
        ]);

        DB::table('users')->insert([
            'name' => 'user6',
            'email' => 'user6@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('user6'),
        ]);

        DB::table('users')->insert([
            'name' => 'user7',
            'email' => 'user7@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('user7'),
        ]);

        DB::table('users')->insert([
            'name' => 'user8',
            'email' => 'user8@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('user8'),
        ]);

      

    }
}