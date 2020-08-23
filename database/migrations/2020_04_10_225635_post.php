<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image_title'); // for showing title
            $table->string('posts_title')->nullable(false);
            $table->longText('posts_content')->nullable(false);
            $table->boolean('posts_status')->nullable(false)->default(0);
            $table->tinyInteger('type')->nullable(false)->default(0);
            $table->string('author')->nullable(false);
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
       Schema::dropIfExists('posts');
    }
}
