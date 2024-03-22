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
        Schema::create('detailsmovies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('details1');
            $table->string('title');
            $table->string('year');
            $table->string('details2');
            $table->string('genres1');
            $table->string('genres2');
            $table->string('audio');
            $table->string('subtitle');
            $table->string('actor');
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
        Schema::dropIfExists('detailsmovies');
    }
};
