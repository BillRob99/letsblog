<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            //Textual content of the comment.
            $table->string('text');
            //ID of the profile that created the comment.
            $table->unsignedInteger('profile_id');
            //ID of the post that the comment belongs to.
            $table->unsignedInteger('post_id');
            $table->timestamps();

            //Adds one to many relationship to the 'profiles' table.
            $table->foreign('profile_id')->references('id')->on('profiles')->
            onDelete('cascade')->onUpdate('cascade');
            //Adds one to many relationship to the 'posts' table.
            $table->foreign('post_id')->references('id')->on('posts')->
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
        Schema::dropIfExists('comments');
    }
}
