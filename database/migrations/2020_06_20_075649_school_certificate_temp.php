<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SchoolCertificateTemp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('school_certificate_temp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('user_name');
            $table->string('DOB');
            $table->tinyInteger('folk')->nullable(false);
            $table->tinyInteger('gender')->nullable(false);
            $table->string('address')->nullable(false);
            $table->string('year')->nullable(false);
            $table->string('council_test')->nullable(false);
            $table->string('SBD')->nullable(false);
            $table->string('ĐTN')->nullable(false);
            $table->string('ĐTB12')->nullable(false);
            $table->float('math')->nullable(false);
            $table->float('liter')->nullable(false);
            $table->float('other_languague')->nullable(true);
            $table->float('BTTH')->nullable(false);
            $table->string('name_of_BTTH')->nullable(false);
            $table->float('ĐKK')->nullable(true);
            $table->tinyInteger('DXTN')->nullable(true);
            $table->string('note')->nullable(true);
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
        Schema::table('school_certificate_temp', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('school_certificate_temp');
    }
}
