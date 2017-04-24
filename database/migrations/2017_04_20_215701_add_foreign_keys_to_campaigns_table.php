<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCampaignsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('campaigns', function(Blueprint $table)
		{
			$table->foreign('instance_id', 'fk_campaigns_instance')->references('id')->on('instances')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('campaigns', function(Blueprint $table)
		{
			$table->dropForeign('fk_campaigns_instance');
		});
	}

}
