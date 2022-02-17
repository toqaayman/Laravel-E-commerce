<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_order_returns', function (Blueprint $table) {
            $table->id();
            $table->integer('Order_return_order_id');
            $table->integer('Order_return_quantity');
            $table->dateTime('Order_return_date');
            $table->text('Order_return_description');
            $table->foreignId('orders_id')->constrained('orders')->onDelete('cascade');
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
        Schema::dropIfExists('_order_returns');
    }
}
