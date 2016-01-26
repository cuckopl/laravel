<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMultimediaTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('multimedia', function(Blueprint $table) {
            $table->increments('id')->index();
            $table->string('path');
            $table->integer('type')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('article_id')->unsigned();
             $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
              $table->foreign('article_id')
                    ->references('id')
                    ->on('articles');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('multimedia');
    }

}
