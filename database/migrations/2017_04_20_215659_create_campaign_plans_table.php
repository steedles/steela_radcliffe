<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCampaignPlansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('campaign_plans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('campaign_id')->unsigned()->nullable();
			$table->string('plan_type', 32)->nullable();
			$table->string('title', 32)->nullable();
			$table->string('alias', 32)->nullable();
			$table->integer('destination')->unsigned()->nullable()->index('idx_plan_destination');
			$table->text('destination_params', 65535)->nullable();
			$table->dateTime('publish_up')->nullable();
			$table->dateTime('publish_down')->nullable();
			$table->string('url_params')->nullable();
			$table->integer('publisher_id')->unsigned()->nullable()->index('fk_plan_publishers');
			$table->boolean('state')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('campaign_plans');
	}

}
