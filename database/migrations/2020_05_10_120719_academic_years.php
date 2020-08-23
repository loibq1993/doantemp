<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AcademicYears extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        
    public function up()
    {
        Schema::create('academic_years', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('name_of_school_year')->nullable(false);
        $table->date('start_time')->nullable();
        $table->date('end_time')->nullable();
        $table->tinyInteger('status')->nullable(false)->default(0);
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
        Schema::dropIfExists('academic_years');
    }
}
