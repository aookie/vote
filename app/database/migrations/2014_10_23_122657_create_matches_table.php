<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('matches', function($table)
		{
			$table->increments('id')->unique();
			$table->integer('home_team_id');
			$table->integer('away_team_id');
			$table->date('date');
			$table->string('score', 16);
			$table->string('place', 64);
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
		//
		Schema::drop('matches');
	}
}
