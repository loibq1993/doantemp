<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',35)->nullable(false);
            $table->string('e_mail',50)->nullable(false);
            $table->tinyInteger('gender')->nullable(false);
            $table->date('date_of_birth')->nullable(false);
            $table->string('address',200)->nullable(false);
            $table->string('born_place',100)->nullable(false);
            $table->string('phone_of_parents',10)->nullable(false);
            $table->string('name_of_dad',35)->nullable(true);
            $table->string('father_job',50)->nullable(true);
            $table->string('name_of_mom',35)->nullable(true);
            $table->string('mother_job',50)->nullable(true);
            $table->unsignedBigInteger('folk_id');
            $table->tinyInteger('veteran')->nullable(false)->default(0);
            $table->tinyInteger('new')->nullable(false)->defautl(0);
            $table->tinyInteger('status')->nullable(false)->defautl(0);
            $table->foreign('folk_id')->references('id')->on('folk')->onDelete('cascade');
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['folk_id']);
        });
        Schema::dropIfExists('users');
    }
}
