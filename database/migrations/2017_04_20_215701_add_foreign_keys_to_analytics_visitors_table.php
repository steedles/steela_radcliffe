<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAnalyticsVisitorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('analytics_visitors', function(Blueprint $table)
		{
			$table->foreign('instance_id', 'fk_visitors_instance')->references('id')->on('instances')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('analytics_visitors', function(Blueprint $table)
		{
			$table->dropForeign('fk_visitors_instance');
		});
	}

}
