<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grades', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('student_id')->unsigned();
			$table->integer('subject_id')->unsigned();
			$table->integer('total');
			$table->string('slug');
			$table->timestamps();

				$table->foreign('student_id')
				->references('id')
				->on('students');

				$table->foreign('subject_id')
				->references('id')
				->on('subjects');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grades');
	}

}
