<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilePreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_preferences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_id');
            $table->string('color_theme');
            $table->string('font');
            $table->string('profile_picture')->nullable();
            $table->string('header_image')->nullable();
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
        Schema::dropIfExists('profile_preferences');
    }
}
