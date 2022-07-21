<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // create categories table
      Schema::create('categories', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->timestamps();
      });
    
         //now  create videos table
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('');
            $table->string('url')->default('');
    
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
    
            $table->string('img_url')->default('');
            $table->integer('views')->nullable();
            $table->integer('rating')->nullable();
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
        Schema::dropIfExists('videos');
    }
};
