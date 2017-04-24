<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProfileIdentifiersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('profile_identifiers', function(Blueprint $table)
		{
			$table->foreign('profile_id', 'fk_pid_profiles')->references('id')->on('profiles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('profile_identifiers', function(Blueprint $table)
		{
			$table->dropForeign('fk_pid_profiles');
		});
	}

}
