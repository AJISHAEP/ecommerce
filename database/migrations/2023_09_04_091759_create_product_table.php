<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catagories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('price', 15, 2);
            $table->unsignedBigInteger('catagory_id')->nullable();
            $table->foreign('catagory_id')->references('id')->on('catagories');
            $table->string('image')->nullable();
            $table->boolean('status')->comment('1:Active,2:Inactive')->default(1);
            $table->boolean('favourite')->comment('1:Yes,0:No')->default(0);
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
        Schema::dropIfExists('product');
        Schema::dropIfExists('catagories');
    }
}
