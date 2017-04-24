<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfileValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile_values', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('profile_id')->unsigned()->nullable()->index('fk_pfv_profileid');
			$table->string('profile_key', 32)->nullable()->index('idx_pfv_key');
			$table->string('profile_value')->nullable();
			$table->dateTime('date_created')->nullable();
			$table->dateTime('date_updated')->nullable();
			$table->integer('session_id')->unsigned()->nullable()->index('fk_pfv_session');
			$table->index(['profile_key','profile_value'], 'idx_pfv_keyvalue');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profile_values');
	}

}
