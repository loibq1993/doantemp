<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransformStudentSchool extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('transform_student_school', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('name_user');
            $table->unsignedBigInteger('class_id_current');
            $table->string('name_of_new_school');
            $table->string('address_of_new_school');
            $table->string('reason_of_transform');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('class_id_current')->references('id')->on('classes')->onDelete('cascade');
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
        Schema::table('transformtransform_student_school_form', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['class_id']);
        });
        Schema::dropIfExists('transform_student_school');
    }
}
