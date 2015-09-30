<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table)
		{
			$table->increments('CommentId');
			$table->Integer('userId')->unsigned()->index();	;
			$table->Integer('BookId')->unsigned()->index();	;
			$table->string('Content');
            $table->string('Comment');
			$table->timestamps();
			
			$table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('BookId')->references('id')->on('books')->onDelete('cascade');			
		});
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comments');
	}

}
