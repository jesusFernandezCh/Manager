<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationBudgetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operation_budget', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('operetion_id')->index();
            $table->foreign('operetion_id')->references('id')->on('operations')->onDelete('cascade');
            $table->decimal('order_quantity')->nullable();
            $table->decimal('order_sale')->nullable();
            $table->unsignedBigInteger('order_sale_currency_id')->index()->nullable();
            $table->foreign('order_sale_currency_id')->references('id')->on('currencies')->onDelete('cascade');
            $table->decimal('order_sale_currency_change')->nullable();
            $table->decimal('order_sale_usd')->nullable();
            $table->decimal('order_purchase')->nullable();
            $table->unsignedBigInteger('order_purchase_currency_id')->index()->nullable();
            $table->foreign('order_purchase_currency_id')->references('id')->on('currencies')->onDelete('cascade');
            $table->decimal('order_purchase_change')->nullable();
            $table->decimal('order_purchase_usd')->nullable();
            $table->decimal('total_est_charges')->nullable();
            $table->decimal('est_charges')->nullable();
            $table->decimal('comtopay')->nullable();
            $table->decimal('comtoreceive')->nullable();
            $table->decimal('usd_budget')->nullable();
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
        Schema::dropIfExists('operation_budget');
    }
}