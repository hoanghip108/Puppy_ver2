<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Puppy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Breed', function (Blueprint $table) {
            $table->increments('Bid');
            $table->string('Breed');
        });
        Schema::create('Puppy', function (Blueprint $table) {
            $table->increments('Pid');
            $table->string('PName');
            $table->string('Area');
            $table->boolean('Gender');
            $table->text('Detail');
            $table->text('Image');
            $table->integer('Bid')->unsigned();
            $table->string('color', 50);
        });
        Schema::table('Puppy', function (Blueprint $table) {
            $table->foreign('Bid')->references('Bid')->on('Breed');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
