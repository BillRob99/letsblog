<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_profile', function (Blueprint $table) {
            $table->primary(['group_id', 'profile_id']);
            $table->unsignedInteger('group_id');
            $table->unsignedInteger('profile_id');
            $table->timestamps();
    
            $table->foreign('group_id')->references('id')->on('groups')->
            onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('group_profile');
    }
}
