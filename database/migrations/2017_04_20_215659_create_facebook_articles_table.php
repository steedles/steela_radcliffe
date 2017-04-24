<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacebookArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('facebook_articles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 32)->nullable();
			$table->string('alias', 32)->nullable();
			$table->integer('instance_id')->unsigned()->nullable()->index('fk_fbart_instance');
			$table->integer('article_category_id')->unsigned()->nullable()->index('fk_fbart_category');
			$table->text('content', 65535)->nullable();
			$table->boolean('state')->nullable();
			$table->boolean('home')->nullable();
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
		Schema::drop('facebook_articles');
	}

}
