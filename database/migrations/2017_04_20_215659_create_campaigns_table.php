<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCampaignsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('campaigns', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 32)->nullable();
			$table->string('alias', 32)->nullable();
			$table->string('description')->nullable();
			$table->integer('instance_id')->unsigned()->nullable()->index('fk_campaigns_instance');
			$table->dateTime('publish_up')->nullable();
			$table->dateTime('publish_down')->nullable();
			$table->boolean('state')->nullable();
			$table->integer('hit_count')->unsigned()->nullable();
			$table->dateTime('last_hit_date')->nullable();
			$table->dateTime('date_created')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('campaigns');
	}

}
