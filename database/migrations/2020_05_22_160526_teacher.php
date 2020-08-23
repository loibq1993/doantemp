<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Teacher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_teacher',35)->nullable(false);
            $table->string('address',200)->nullable(false);
            $table->string('phone_number',10)->nullable(false);
            $table->string('e_mail',50)->nullable(false);
            $table->tinyInteger('gender')->nullable(false);
            $table->date('date_of_birth')->nullable(false);
            $table->unsignedBigInteger('specialize_id');
            $table->string('CMND',15)->nullable(false);
            $table->tinyInteger('teacher_status')->default(0)->nullable(false);
            $table->tinyInteger('level')->default(0)->nullable(true);
            $table->foreign('specialize_id')->references('id')->on('specialize')->onDelete('cascade');
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
        Schema::table('teacher', function (Blueprint $table) {
            $table->dropForeign(['specialize_id']);
        });
        Schema::dropIfExists('teacher');
    }
}
