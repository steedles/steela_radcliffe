<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfileInstancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile_instances', function(Blueprint $table)
		{
			$table->integer('instance_id')->unsigned();
			$table->integer('profile_id')->unsigned();
			$table->primary(['instance_id','profile_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profile_instances');
	}

}
