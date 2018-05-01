<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 140);
            $table->smallInteger('status')->default(0);
            $table->date('date');
            $table->string('short');
            $table->text('description');
            $table->decimal('price', 12, 2);
            $table->string('author', 150);
            $table->tinyInteger('discount')->default(0);
            $table->date('disdate')->nullable;
            $table->string('image');
            $table->smallInteger('quantity')->default(100);
            $table->smallInteger('shopcat_id');
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
        Schema::dropIfExists('shop');
    }
}
