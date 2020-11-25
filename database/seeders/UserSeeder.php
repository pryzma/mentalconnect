<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
          if (!getenv('ADMIN_'.$field)) {
            throw new Exception("Please provide 'ADMIN_".$field."' in your .env file.");
          }
          $val = getenv('ADMIN_'.$field);
          if ( $field === 'PASSWORD' ){
            $val = Hash::make( $val );
          }
          $createUser->createProperty(strtolower ( $field ),$val);
        }
        //$createUser->username = getenv('ADMIN_USERNAME');
        //$createUser->password = Hash::make(getenv('ADMIN_PASSWORD'));
        //$createUser->name = getenv('ADMIN_NAME');
        //$createUser->email = getenv('ADMIN_EMAIL');
        $createUser->profile_id = 1;
        $createUser->role_id = 1;
        $createUser->save();
        

    }
}
