<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChaptersTable extends Migration {

    private $table_name = 'chapters';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        $this->down();
        Schema::create( $this->table_name, function(Blueprint $table){  	
            $table->increments('id');
            $table->integer('book_id')->index()->unsigned();
            $table->string('title');
            $table->text('content');
            $table->enum( 'status', [ 'writing', 'published' ] )->default( 'writing' );

            $table->timestamps();
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
        Schema::dropIfExists( $this->table_name );
	}

}
