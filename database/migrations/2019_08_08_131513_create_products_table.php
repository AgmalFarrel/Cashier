<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('id');
            $table->integer('productId');
            $table->string('name');
            $table->string('description');
            $table->string('kind');
            $table->integer('price');
            $table->double('discPercent');
            $table->integer('discPotongan');
            $table->string('countSales');
            $table->string('imageUrl');
            $table->integer('stock');
            $table->boolean('isSyncronized');
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
        Schema::dropIfExists('products');
    }
}
