<?php

use Illuminate\Database\Seeder;
use App\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!getenv('MENTALCONNECT_ADMIN_FIRST_NAME')) {
            throw new Exception("Please provide 'MENTALCONNECT_ADMIN_FIRST_NAME' in your .env file.");
        }
        if (!getenv('MENTALCONNECT_ADMIN_LAST_NAME')) {
            throw new Exception("Please provide 'MENTALCONNECT_ADMIN_LAST_NAME' in your .env file.");
        }

        $firstUser = new Profile();

        $firstUser->first_name = getenv('MENTALCONNECT_ADMIN_FIRST_NAME');
        $firstUser->last_name = getenv('MENTALCONNECT_ADMIN_LAST_NAME');
        $firstUser->user_id = 1;

        $firstUser->save();

    }
}
