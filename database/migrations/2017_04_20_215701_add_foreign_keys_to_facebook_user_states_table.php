<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFacebookUserStatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('facebook_user_states', function(Blueprint $table)
		{
			$table->foreign('instance_id', 'fk_fbus_instance')->references('id')->on('instances')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('visitor_id', 'fk_fbus_visitor')->references('id')->on('analytics_visitors')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('facebook_user_states', function(Blueprint $table)
		{
			$table->dropForeign('fk_fbus_instance');
			$table->dropForeign('fk_fbus_visitor');
		});
	}

}
