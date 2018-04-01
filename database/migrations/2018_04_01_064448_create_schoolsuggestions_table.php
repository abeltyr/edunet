<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsuggestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolsuggestions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_name');
            $table->string('school_code');
            $table->longtext('info');
            $table->integer('cheaked')->default('0');
            $table->string('cheaker')->default('none');
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
        Schema::dropIfExists('schoolsuggestions');
    }
}
