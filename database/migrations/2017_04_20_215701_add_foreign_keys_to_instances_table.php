<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInstancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('instances', function(Blueprint $table)
		{
			$table->foreign('application_id', 'fk_instances_application')->references('id')->on('applications')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('client_id', 'fk_instances_clients')->references('id')->on('clients')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('instances', function(Blueprint $table)
		{
			$table->dropForeign('fk_instances_application');
			$table->dropForeign('fk_instances_clients');
		});
	}

}
