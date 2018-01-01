<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('provider');
            $table->string('order_ref');
            $table->string('plan');
            $table->date('date_arrived');
            $table->string('state');
            $table->string('observtion');
            $table->string('quantity');
            $table->integer('category');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('movements');
    }
}
