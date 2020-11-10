<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firstProfile = new Role();

        $firstProfile->name = "Administrator";

        $firstProfile->save();

    }
}
