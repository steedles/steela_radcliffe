<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAnalyticsViewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('analytics_views', function(Blueprint $table)
		{
			$table->foreign('session_id', 'fk_aviews_session')->references('id')->on('analytics_sessions')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('visitor_id', 'fk_aviews_visitor')->references('id')->on('analytics_visitors')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('analytics_views', function(Blueprint $table)
		{
			$table->dropForeign('fk_aviews_session');
			$table->dropForeign('fk_aviews_visitor');
		});
	}

}
