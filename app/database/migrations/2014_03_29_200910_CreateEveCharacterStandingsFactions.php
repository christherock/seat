<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEveCharacterStandingsFactions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('character_standings_factions', function(Blueprint $table)
		{
		  $table->increments('id');

		  $table->integer('characterID');

		  $table->integer('fromID');
		  $table->string('fromName');
		  $table->float('standing');

		  // Indexes
		  $table->index('characterID');

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
		Schema::dropIfExists('character_standings_factions');
	}

}
