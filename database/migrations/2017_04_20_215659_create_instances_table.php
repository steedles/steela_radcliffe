<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('instances', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 32)->nullable()->index('idx_title');
			$table->string('alias', 32)->nullable();
			$table->string('description')->nullable();
			$table->string('instance_identifier', 128)->nullable()->unique('idx_instance_identifier');
			$table->integer('application_id')->unsigned()->nullable()->index('fk_instances_application');
			$table->integer('client_id')->unsigned()->nullable()->index('fk_instances_clients');
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
		Schema::drop('instances');
	}

}
