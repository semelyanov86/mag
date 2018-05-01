<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->string('short', 500);
            $table->text('content');
            $table->date('date');
            $table->string('status', 2);
            $table->timestamps();
        });
        
        Schema::create('news_photos', function (Blueprint $table) {
    $table->increments('id');
    $table->integer('news_id')->unsigned()->nullable();
    $table->foreign('news_id')->references('id')->on('news');
    $table->string('filename');
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
        Schema::dropIfExists('news');
    }
}
