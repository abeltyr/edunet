<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_name');
            $table->string('school_code');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('grandfather');
            $table->integer('age');
            $table->string('sex');
            $table->string('student_id')->unique();
            $table->string('avatar')->default('/student/default.jpg');
            $table->string('email')->unique();
            $table->integer('phone')->unique();
            $table->string('password');
            $table->string('emg_contact');
            $table->integer('emg_cont_phone');
            $table->integer('grade');
            $table->string('section');
            $table->string('status')->default('0');
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
        Schema::dropIfExists('students');
    }
}
