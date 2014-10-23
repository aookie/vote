<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('votes', function($table)
		{
			$table->increments('id')->unique();
			$table->integer('user_id');
			$table->integer('player_id');
			$table->integer('match_id');
			$table->float('vote');
			$table->string('memo', 256);
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
		Schema::drop('votes');
	}



}
