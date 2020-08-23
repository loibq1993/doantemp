<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Teachers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_teacher')->nullable(false);
            $table->string('address')->nullable(false);
            $table->string('phone_number')->nullable(false);
            $table->tinyInteger('gender')->nullable(false);
            $table->date('date_of_birth')->nullable(false);
            $table->string('profession')->nullable(false);
            $table->string('CMND')->nullable(false);
            $table->tinyInteger('leader_subject')->nullable(false); 
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
        Schema::dropIfExists('teachers');
    }
}
