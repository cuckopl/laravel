<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArticleCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article_comments', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->text('content');
                        $table->integer('user_id')->unsigned()->index();
                        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                        $table->integer('article_id')->unsigned()->index();
                        $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('article_comments');
	}

}
