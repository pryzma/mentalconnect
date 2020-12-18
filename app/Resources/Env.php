<?php
namespace App\Resources;

class Env {
    public static function Seed($modelInstance,$prefix,$fields){
        foreach($fields as $field){
            $fieldName = $prefix.strtoupper ( $field );
            if (!getenv($fieldName)) {
                throw new \Exception("Please provide '".$fieldName."' in your .env file.");
            }
            $val = getenv($fieldName);
            if ( $field === 'password' ){
              $val = Hash::make( $val );
            }
            $modelInstance->{strtolower( $field )} = $val;
        }
        $modelInstance->save();
    }
}