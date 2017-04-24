<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFacebookKeywordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('facebook_keywords', function(Blueprint $table)
		{
			$table->foreign('facebook_article_id', 'fk_fbkw_article')->references('id')->on('facebook_articles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('facebook_keywords', function(Blueprint $table)
		{
			$table->dropForeign('fk_fbkw_article');
		});
	}

}
