<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('imageUrl')->default('/images/default.png');
            $table->string('email')->unique()->index();
            $table->string('username')->unique()->index();
            $table->string('password');
            $table->string('mobile');
            $table->boolean('admin')->default(false);
            $table->boolean('editor')->default(false);
            $table->string('token')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
                array(
                    'name' => '',
                    'email' => '',
                    'password' => '',
                    'mobile' => '',

                    'verified' => true
                )
            );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
