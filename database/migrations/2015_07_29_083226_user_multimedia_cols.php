<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserMultimediaCols extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('multimedia', function(Blueprint $table) {
            $table->string('url', 255);
            $table->string('name', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('multimedia', function(Blueprint $table) {
            //
        });
    }

}
