<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacebookKeywordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('facebook_keywords', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 32)->nullable();
			$table->string('alias', 32)->nullable();
			$table->integer('facebook_article_id')->unsigned()->nullable()->index('fk_fbkw_article');
			$table->text('destination_params', 65535)->nullable();
			$table->string('keywords')->nullable();
			$table->integer('hit_count')->nullable();
			$table->dateTime('last_hit_date')->nullable();
			$table->dateTime('publish_up')->nullable();
			$table->dateTime('publish_down')->nullable();
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
		Schema::drop('facebook_keywords');
	}

}
