<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('about');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('postal_code');
            $table->string('country');
            $table->string('date_of_birth');
            $table->string('place_of_birth');
            $table->string('place_of_residence');
            $table->string('hobbys');
            $table->string('interests');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
