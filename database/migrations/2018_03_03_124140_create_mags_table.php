<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no')->nullable();
            $table->string('title', 255);
            $table->string('intro', 500);
            $table->text('content');
            $table->string('image', 50);
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('mags');
    }
}
