<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacebookUserStatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('facebook_user_states', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('instance_id')->unsigned()->nullable()->index('fk_fbus_instance');
			$table->integer('visitor_id')->unsigned()->nullable()->index('fk_fbus_visitor');
			$table->text('state_value', 65535)->nullable();
			$table->dateTime('state_created')->nullable();
			$table->dateTime('state_updated')->nullable();
			$table->dateTime('state_expired')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('facebook_user_states');
	}

}
