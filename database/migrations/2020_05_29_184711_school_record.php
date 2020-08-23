<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SchoolRecord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolrecord', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('name_student');
            $table->tinyInteger('gender');
            $table->string('dob',46);
            $table->string('placeborn');
            $table->tinyInteger('folk');
            $table->string('address');
            $table->string('name_of_fa')->nullable(true);
            $table->string('name_of_mo')->nullable(true);
            $table->string('job_of_fa')->nullable(true);
            $table->string('job_of_mo')->nullable(true);
            $table->string('name_of_op')->nullable(true);
            $table->string('job_of_op')->nullable(true);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('schoolrecord', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('schoolrecord');
    }
}
