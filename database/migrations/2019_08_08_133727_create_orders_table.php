<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('orderId');
            $table->integer('productId');
            $table->string('name');
            $table->string('description');
            $table->string('kind');
            $table->integer('price');
            $table->double('discPercent');
            $table->integer('discPotongan');
            $table->integer('total');
            $table->integer('countSales');
            $table->integer('transactionId');
            $table->string('imageUrl');
            $table->integer('stock');
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
        Schema::dropIfExists('orders');
    }
}
