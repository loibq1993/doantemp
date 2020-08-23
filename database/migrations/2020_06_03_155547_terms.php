<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Terms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_term')->nullable(false);
            $table->unsignedBigInteger('academic_id');
            $table->tinyInteger('status')->nullabe(false)->default(0);
            $table->foreign('academic_id')->references('id')->on('academic_years')->onDelete('cascade');
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
        Schema::table('terms', function (Blueprint $table) {
            $table->dropForeign(['academic_id']);
        });
        Schema::dropIfExists('terms');
    }
}
