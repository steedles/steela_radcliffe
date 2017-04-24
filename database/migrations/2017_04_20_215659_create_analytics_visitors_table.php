<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnalyticsVisitorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('analytics_visitors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('unique_identifier', 32)->nullable()->index('idx_visitor_unid');
			$table->integer('instance_id')->unsigned()->index('fk_visitors_instance');
			$table->integer('profile_id')->unsigned()->nullable()->index('idx_visitor_profileid');
			$table->dateTime('first_datetime')->nullable();
			$table->dateTime('last_datetime')->nullable();
			$table->integer('session_count')->unsigned()->nullable()->default(0);
			$table->integer('originating_session_id')->nullable()->index('idx_visitor_sessionid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('analytics_visitors');
	}

}
