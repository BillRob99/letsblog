<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            //Textual content of the post.
            $table->string('text');
            //ID of the profile that created the post.
            $table->unsignedInteger('profile_id');
            $table->timestamps();

            //Adds relationship to the 'profiles' table.
            $table->foreign('profile_id')->references('id')->on('profiles')->
            onDelete('cascade')->onUpdate('cascade');
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
