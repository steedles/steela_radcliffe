<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfileIdentifiersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile_identifiers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('profile_id')->unsigned()->nullable()->index('fk_pid_profiles');
			$table->string('identifier_type', 32)->nullable()->index('idx_pid_type');
			$table->string('unique_identifier', 32)->nullable();
			$table->integer('session_id')->unsigned()->nullable()->index('idx_pid_session_id');
			$table->dateTime('date_created')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profile_identifiers');
	}

}
