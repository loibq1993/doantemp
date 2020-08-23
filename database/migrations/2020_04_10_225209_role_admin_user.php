<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RoleAdminUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_admin_users', function (Blueprint $table) {
            $table->unsignedBigInteger('admin_user_id');
            $table->unsignedBigInteger('role_id');
            $table->unique(['admin_user_id','role_id']);
            $table->foreign('admin_user_id')->references('id')->on('admin_user')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
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
        Schema::table('role_admin_users', function (Blueprint $table) {
            $table->dropForeign(['admin_user_id']);
            $table->dropForeign(['role_id']);
        });
        Schema::dropIfExists('role_admin_users');
    }
}
