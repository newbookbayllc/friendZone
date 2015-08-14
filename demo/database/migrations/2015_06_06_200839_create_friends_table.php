<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFriendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('friends', function(Blueprint $table)
		{
			$table->engine ='InnoDB';			
			$table->integer('friend_one')->unsigned()->index();	
			$table->integer('friend_two')->unsigned()->index();
			//$table->integer('book_id')->unsigned()->index();
			$table->integer('book_id');
			$table->string('nick_name',48);
			$table->string('friend_type',32);// friends type can be divided into default friends or Book_n friends
			$table->foreign('friend_one')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('friend_two')->references('id')->on('users')->onDelete('cascade');
			$table->softDeletes();
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
		Schema::drop('friends');
	}

}
