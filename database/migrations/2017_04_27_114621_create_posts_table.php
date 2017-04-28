<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  /*  public function down()
    {
        Schema::dropIfExists('posts');
    }*/
    public function up()
    {
       /* Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });*/
        //Schema::dropIfExists('posts');
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('content');
            $table->timestamps();
           // $table->timestamp('published_at')->index();
            $table->timestamp('published_at')->index()->nullable();
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
