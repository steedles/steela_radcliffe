<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAnalyticsSessionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('analytics_sessions', function(Blueprint $table)
		{
			$table->foreign('instance_id', 'fk_sessions_instance')->references('id')->on('instances')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('visitor_id', 'fk_sessions_visitor')->references('id')->on('analytics_visitors')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('analytics_sessions', function(Blueprint $table)
		{
			$table->dropForeign('fk_sessions_instance');
			$table->dropForeign('fk_sessions_visitor');
		});
	}

}
