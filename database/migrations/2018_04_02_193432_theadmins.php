<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Theadmins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('theadmins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('avatar')->default('/theadmin/default.jpg');
            $table->integer('Role_id')->default('0');
            $table->integer('user_id')->unique();
            $table->string('email')->unique();
            $table->integer('phone')->unique();
            $table->string('password');
            $table->integer('pin');
            $table->rememberToken();
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
        //
        Schema::dropIfExists('theadmins');
    }
}
