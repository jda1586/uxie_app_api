<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('score', 2, 1);
            $table->text('description');
            $table->integer('city_id');
            $table->integer('state_id');
            $table->integer('country_id');
            $table->string('category');
            $table->float('latitude', 10, 5);
            $table->float('longitude', 10, 5);
            $table->integer('cost');
            $table->string('status');
            $table->string('type');
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
        Schema::drop('shops');
    }
}
