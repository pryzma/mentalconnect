<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!getenv('MENTALCONNECT_ADMIN_USERNAME')) {
            throw new Exception("Please provide 'MENTALCONNECT_ADMIN_USERNAME' in your .env file.");
        }
        if (!getenv('MENTALCONNECT_ADMIN_NAME')) {
            throw new Exception("Please provide 'MENTALCONNECT_ADMIN_NAME' in your .env file.");
        }
        if (!getenv('MENTALCONNECT_ADMIN_EMAIL')) {
            throw new Exception("Please provide 'MENTALCONNECT_ADMIN_EMAIL' in your .env file.");
        }
        if (!getenv('MENTALCONNECT_ADMIN_PASSWORD')) {
            throw new Exception("Please provide 'MENTALCONNECT_ADMIN_PASSWORD' in your .env file.");
        }

        $firstUser = new User();

        $firstUser->username = getenv('MENTALCONNECT_ADMIN_USERNAME');
        $firstUser->name = getenv('MENTALCONNECT_ADMIN_NAME');
        $firstUser->email = getenv('MENTALCONNECT_ADMIN_EMAIL');
        $firstUser->password = Hash::make(getenv('MENTALCONNECT_ADMIN_PASSWORD'));

        $firstUser->save();

    }
}
