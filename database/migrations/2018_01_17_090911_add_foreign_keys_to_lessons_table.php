<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLessonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lessons', function(Blueprint $table)
		{
			$table->foreign('course_id', 'course_lessons_FK')->references('id')->on('courses')->onUpdate('NO ACTION')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lessons', function(Blueprint $table)
		{
			$table->dropForeign('course_lessons_FK');
		});
	}

}
