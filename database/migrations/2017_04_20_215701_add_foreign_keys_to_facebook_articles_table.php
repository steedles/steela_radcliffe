<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFacebookArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('facebook_articles', function(Blueprint $table)
		{
			$table->foreign('article_category_id', 'fk_fbart_category')->references('id')->on('facebook_article_categories')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('instance_id', 'fk_fbart_instance')->references('id')->on('instances')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('facebook_articles', function(Blueprint $table)
		{
			$table->dropForeign('fk_fbart_category');
			$table->dropForeign('fk_fbart_instance');
		});
	}

}
