<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBooksForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->integer('author_id')->unsigned();
            $table->foreign('author_id')->references('id')->on('authors');
            $table->integer('genre_id')->unsigned();
            $table->foreign('genre_id')->references('id')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign('books_author_id_foreign');
            $table->dropForeign('books_genre_id_foreign');
        });
    }
}
