<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentBodis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     **/
    public function up()
    {
        Schema::create('student_bodis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_student')->nullable(false);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('class_id');
            $table->tinyInteger('type');
            $table->text('content');
            $table->string('hinhthuc');
            $table->string('rate');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
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
        Schema::dropIfExists('student_bodis');
    }
}
