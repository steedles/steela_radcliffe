<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProfileValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('profile_values', function(Blueprint $table)
		{
			$table->foreign('profile_id', 'fk_pfv_profileid')->references('id')->on('profiles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('session_id', 'fk_pfv_session')->references('id')->on('analytics_sessions')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('profile_values', function(Blueprint $table)
		{
			$table->dropForeign('fk_pfv_profileid');
			$table->dropForeign('fk_pfv_session');
		});
	}

}
