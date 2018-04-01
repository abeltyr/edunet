<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolteachercommusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolteachercommus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_name');
            $table->string('school_code');
            $table->string('student_name');
            $table->string('student_id');
            $table->string('teacher');
            $table->string('teacher_id');
            $table->longtext('issue');
            $table->integer('cheaked')->default('0');
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
        Schema::dropIfExists('schoolteachercommus');
    }
}
