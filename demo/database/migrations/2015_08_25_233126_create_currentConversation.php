<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrentConversation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('currentConversation', function(Blueprint $table){
            $table->increments('id');
			$table->integer('from_id')->unsigned()->index();	
			$table->integer('to_id')->unsigned()->index();
            $table->string('content');
            $table->timestamps();
			$table->foreign('from_id')->references('id')->on('users')->onDelete('cascade');             
            $table->foreign('to_id')->references('id')->on('users')->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
