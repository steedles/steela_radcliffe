<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacebookArticleCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('facebook_article_categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 32)->nullable();
			$table->string('alias', 32)->nullable();
			$table->integer('parent_category_id')->unsigned()->nullable()->index('fk_fbacat_category');
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
		Schema::drop('facebook_article_categories');
	}

}
