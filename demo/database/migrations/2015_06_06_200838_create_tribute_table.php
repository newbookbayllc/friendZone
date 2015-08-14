<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTributeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tribute', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index();
			$table->integer('book_id')->unsigned()->index();
			$table->integer('chapter_id')->unsigned()->index();
			$table->text('description');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
			$table->foreign('chapter_id')->references('id')->on('chapters')->onDelete('cascade');
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
		Schema::drop('tribute');
 	}
}	
