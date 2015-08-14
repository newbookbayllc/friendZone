<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FriendCycle extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('friendCycle', function (Blueprint $table) { 
            $table->increments('id'); 
			$table->Integer('userId')->unique;
			$table->string('friendType');
			$table->Integer('friendID');
			$table->string('record');
        });		
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('friendCycle');
	}

}
