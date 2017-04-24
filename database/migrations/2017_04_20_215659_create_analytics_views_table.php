<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnalyticsViewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('analytics_views', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('session_id')->unsigned()->nullable()->index('fk_aviews_session');
			$table->integer('visitor_id')->unsigned()->nullable()->index('fk_aviews_visitor');
			$table->dateTime('view_datetime')->nullable();
			$table->string('view_request')->nullable();
			$table->string('page_name', 64)->nullable()->index('idx_aviews_pagename');
			$table->string('meta_data_model', 32)->nullable()->index('idx_aviews_metamodel');
			$table->string('meta_data_value', 32)->nullable();
			$table->string('meta_data_action', 32)->nullable()->index('idx_aviews_meta_action');
			$table->index(['meta_data_model','meta_data_value'], 'idx_aviews_meta');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('analytics_views');
	}

}
