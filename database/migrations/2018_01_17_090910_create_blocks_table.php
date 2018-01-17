<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlocksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blocks', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title', 45)->nullable();
			$table->string('description')->nullable();
			$table->string('type', 45)->nullable();
			$table->string('link')->nullable();
			$table->integer('page_id')->index('page_block_idx');
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
		Schema::drop('blocks');
	}

}
