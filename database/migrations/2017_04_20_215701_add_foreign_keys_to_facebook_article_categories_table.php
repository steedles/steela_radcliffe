<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFacebookArticleCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('facebook_article_categories', function(Blueprint $table)
		{
			$table->foreign('parent_category_id', 'fk_fbacat_category')->references('id')->on('facebook_article_categories')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('facebook_article_categories', function(Blueprint $table)
		{
			$table->dropForeign('fk_fbacat_category');
		});
	}

}
