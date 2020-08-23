<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('admin_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name', 80)->default('');
            $table->string('email', 80)->nullable(false)->unique();
            $table->date('birthday')->nullable(true);;
            $table->string('password', 200)->nullable(false);
            $table->string('password_origin', 100)->nullable(false);
            $table->tinyInteger('status')->default(2)->nullable(true);;
            $table->string('manage_place', 255)->default('')->nullable(true);
            $table->string('phone')->nullable(true);;
            $table->tinyInteger('gender')->default(2)->nullable(true);;
            $table->string('register_token')->default('');
            $table->string('remember_token',255)->nullable();
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
       Schema::dropIfExists('admin_user');
    }
}
