<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiftReceived extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gift_received', function(Blueprint $table)
		{
			$table->integer('userId')->unsigned()->index();
            $table->integer('giftId')->unsigned()->index();
            $table->integer('fromId')->unsigned()->index();
            $table->timestamps();
			$table->foreign('userId')->references('id')->on('users')->onDelete('cascade'); 
			$table->foreign('fromId')->references('id')->on('users')->onDelete('cascade');             
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('gift_received');
	}

}
