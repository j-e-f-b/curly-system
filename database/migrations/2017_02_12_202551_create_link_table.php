<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('school_user', function(Blueprint $table)
      {
        $table->increments('id');
        $table->integer('school_id')->unsigned();
        $table->foreign('school_id')->references('id')->on('schools');
        $table->integer('user_id')->unsigned()->index();
        $table->foreign('user_id')->references('id')->on('users');
        $table->unique(['user_id', 'school_id']);
      });
      Schema::create('group_user', function(Blueprint $table)
      {
        $table->increments('id');
        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users');
        $table->integer('group_id')->unsigned();
        $table->foreign('group_id')->references('id')->on('groups');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('school_user');
      Schema::drop('group_user');
    }
}
