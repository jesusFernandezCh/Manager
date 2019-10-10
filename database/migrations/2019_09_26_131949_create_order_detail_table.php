<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('operetion_id')->index()->nullable();
            $table->foreign('operetion_id')->references('id')->on('operations')->onDelete('cascade');
            $table->decimal('order_quantity')->nullable();
            $table->integer('product')->nullable();
            $table->string('specifications')->nullable();
            $table->string('packaging')->nullable();
            $table->string('brand')->nullable();
            $table->string('plant')->nullable();
            $table->unsignedBigInteger('shelflife_id')->index()->nullable();
            $table->foreign('shelflife_id')->references('id')->on('shelf_lives')->onDelete('cascade');
            $table->decimal('purchase_price')->nullable();
            $table->decimal('est_purchase_sale')->nullable();
            $table->decimal('sale_price')->nullable();
            $table->decimal('est_sale')->nullable();
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
        Schema::dropIfExists('order_detail');
    }
}
