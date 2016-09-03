<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
<<<<<<< HEAD:database/migrations/2016_09_02_203940_create_products_table.php
            $table->string('imagePath');
            $table->string('title');
            $table->text('description');
            $table->float('price');
            $table->string('gender');
            $table->string('type');
=======
>>>>>>> parent of a671b3a... Migrate data:database/migrations/2014_10_12_000000_create_users_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
