<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCampaignPlansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('campaign_plans', function(Blueprint $table)
		{
			$table->foreign('publisher_id', 'fk_plan_publishers')->references('id')->on('campaign_publishers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('campaign_plans', function(Blueprint $table)
		{
			$table->dropForeign('fk_plan_publishers');
		});
	}

}
