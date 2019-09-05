<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->integer('transactionId');
            $table->string('date');
            $table->string('day');
            $table->string('month');
            $table->string('year');
            $table->integer('countTotalSales');
            $table->string('time');
            $table->string('dateTime');
            $table->double('discPercent');
            $table->integer('discPotongan');
            $table->integer('total');
            $table->integer('totalAfterDisc');
            $table->integer('customerPaid');
            $table->integer('remainingPayment');
            $table->boolean('haveSyncronized');
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
        Schema::dropIfExists('transactions');
    }
}
