<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('imei_product');
            $table->string('label')->nullable();
            $table->string('model')->nullable();
            $table->date('enabled_date')->nullable();
            $table->string('state')->nullable();
            $table->string('status')->nullable();
            $table->integer('movement_id')->unsigned();
            $table->string('observtion')->nullable();
            $table->integer('user_id')->unsigned();
            
            });
        Schema::table('products', function($table)
           {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('movement_id')->references('id')->on('movements')->onDelete('cascade');

           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
