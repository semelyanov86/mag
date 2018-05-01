<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleRubrikaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_rubrika', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('article_id')->unsigned()->index();
            $table->integer('rubrika_id')->unsigned()->index();
            $table->timestamps();
            
            $table->foreign('rubrika_id')
                    ->references('id')->on('rubrikas')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            
            $table->foreign('article_id')
                    ->references('id')->on('articles')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_rubrika');
    }
}
