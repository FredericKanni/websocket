<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersFriends extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_friends', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            
            $table->unsignedBigInteger('id_friend')->unsigned();
            $table->foreign('id_friend')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('users_friends');
        Schema::enableForeignKeyConstraints();
    }
}
