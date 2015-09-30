<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstanceRequest extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('instanceRequest', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('requestType');
            $table->string('requestMSG');
			$table->integer('from_id')->unsigned()->index();	
			$table->integer('to_id')->unsigned()->index();
            //0:means the request has not been processed
            //1:means the request has been processed by from_id;
            $table->boolean('mark');
            $table->timestamps();
			$table->foreign('from_id')->references('id')->on('users')->onDelete('cascade');             $table->foreign('to_id')->references('id')->on('users')->onDelete('cascade');
        });        
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('instanceRequest');
	}

}
