<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLowerpersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowerpers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_name');
            $table->string('school_code');
            $table->string('student_name');
            $table->string('student_id');
            $table->string('email');
            $table->string('phone');
            $table->integer('grade');
            $table->string('section');
            $table->string('subject');
            $table->integer('per_test');
            $table->integer('test_no');
            $table->string('semister');
            $table->integer('per_semister')->default('0');
            $table->longtext('text');
            $table->integer('checked')->default('0');
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
        Schema::dropIfExists('lowerpers');
    }
}
