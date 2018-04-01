<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolteachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolteachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_name');
            $table->string('school_code');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('user_id')->unique();
            $table->string('avatar')->default('/teacher/default.jpg');
            $table->string('email')->unique();
            $table->integer('phone')->unique();
            $table->string('password');
            $table->integer('pin');
            $table->integer('grade');
            $table->string('subject');
            $table->integer('No_section');
            $table->integer('rank');
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
        Schema::dropIfExists('schoolteachers');
    }
}
