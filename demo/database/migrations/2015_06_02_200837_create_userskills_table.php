<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserskillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userSkills', function(Blueprint $table)
		{
			$table->engine ='InnoDB';			
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index();
			$table->integer('rwriter');
			$table->integer('rillustrator');
			$table->integer('reditor');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
		Schema::drop('userSkills');
	}

}
