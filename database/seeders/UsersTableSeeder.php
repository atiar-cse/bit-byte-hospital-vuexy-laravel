<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Atiar Rahman',
                'email' => 'atiar.cse@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8lxpWFnVV1RZEfhljGKqY.W9Z4B2W0EEpnu0tAjfTgSQjB2VBasdm',
                'remember_token' => NULL,
                'created_at' => '2020-05-13 08:33:31',
                'updated_at' => NULL,
            ),
        ));


    }
}
