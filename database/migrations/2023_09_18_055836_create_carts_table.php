<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('carts', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('userId')->nullable();
        $table->unsignedBigInteger('productId')->nullable();
        $table->integer('quantity')->nullable();
        $table->timestamps();

        // Define the foreign key constraints with matching data types
        $table->foreign('productId')->references('id')->on('product'); // Use 'product' (singular) instead of 'products'
        $table->foreign('userId')->references('id')->on('users');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
