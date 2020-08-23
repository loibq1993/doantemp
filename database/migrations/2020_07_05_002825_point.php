<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Point extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable(true);
            $table->unsignedBigInteger('class_id')->nullable(true);
            $table->unsignedBigInteger('subject_id')->nullable(true);
            $table->unsignedBigInteger('term_id')->nullable(true);
            $table->unique(['user_id','class_id','subject_id','term_id']);
            
            $table->float('dm')->nullable(true);
            $table->float('d15')->nullable(true);
            $table->float('d45')->nullable(true);
            $table->float('dhk')->nullable(true);
            $table->float('dtbhk')->nullable(true);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->foreign('term_id')->references('id')->on('terms')->onDelete('cascade');
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
        Schema::dropIfExists('point');
    }
}

