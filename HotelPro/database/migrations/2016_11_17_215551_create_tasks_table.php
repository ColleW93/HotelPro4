<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   	
	public function up()
	{
	    Schema::create('tasks', function (Blueprint $table) {
	        $table->increments('id');
	        $table->string('task_name');
	        $table->integer('room_no');
	        /*$table->integer('user_id')->unsigned();
	        $table->foreign('user_id')->references('id')->on('users');
	        $table->string('user_name')->unsigned();
	        $table->foreign('user_name')->references('name')->on('users');*/
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
        Schema::drop('tasks');
    }
}
