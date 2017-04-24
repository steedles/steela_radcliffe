<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnalyticsSessionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('analytics_sessions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('instance_id')->unsigned()->nullable()->index('fk_sessions_instance');
			$table->integer('visitor_id')->unsigned()->nullable()->index('fk_sessions_visitor');
			$table->string('session_unique_identifier', 32)->nullable();
			$table->string('session_type', 32)->nullable()->index('idx_session_type');
			$table->integer('campaign_plan_id')->unsigned()->nullable();
			$table->integer('first_view_id')->unsigned()->nullable();
			$table->integer('last_view_id')->unsigned()->nullable();
			$table->string('entry_request')->nullable();
			$table->dateTime('date_created')->nullable();
			$table->char('ip_address', 15)->nullable();
			$table->text('utm_parameters', 65535)->nullable();
			$table->string('user_agent')->nullable();
			$table->text('device_details', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('analytics_sessions');
	}

}
