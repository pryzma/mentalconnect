<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $fields = ['USERNAME','NAME','EMAIL','PASSWORD'];
        $createUser = new User();
        foreach($fields as $field){
          $fieldName = 'MENTALCONNECT_ADMIN_'.$field;
          if (!getenv($fieldName)) {
            throw new \Exception("Please provide '".$fieldName."' in your .env file.");
          }
          $val = getenv($fieldName);
          if ( $field === 'PASSWORD' ){
            $val = Hash::make( $val );
          }
          $createUser->createProperty(strtolower ( $field ),$val);
        }
        $createUser->profile_id = 1;
        $createUser->role_id = 1;
        $createUser->save();
        //
        $createTeam = new Team();
        $createTeam->user_id = $createUser->id;
        $createTeam->name = explode(' ', $createUser->name, 2)[0]."'s Team";
        $createTeam->personal_team = true;
        $createTeam->save();
    }
}
