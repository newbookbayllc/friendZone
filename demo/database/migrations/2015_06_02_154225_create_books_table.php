<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {
    private $table_name = 'books';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        $this->down();
        Schema::create($this->table_name, function(Blueprint $table){   
            $table->increments('id');

			$table->integer('author_id')->unsigned()->index();
			$table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('editer_id')->unsigned()->index()->nullable();
			$table->foreign('editer_id')->references('id')->on('users')->onDelete('set null');
			$table->integer('illustrator_id')->unsigned()->index()->nullable();
			$table->foreign('illustrator_id')->references('id')->on('users')->onDelete('set null');

            $table->integer('num_read')    ->default( 0 );
            $table->integer('num_star')    ->default( 0 );
            $table->integer('num_comment') ->default( 0 );

            $table->string('title');
            $table->string('image');
            $table->text('about');
            $table->text('tags');
            $table->text('desc');

            $table->enum( 'status', [ 'writing', 'published' ] )->default( 'writing' );

            $table->text('roles');

            $table->timestamps();
            $table->softDeletes();

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down(){
        Schema::dropIfExists($this->table_name);
    }
    
}
