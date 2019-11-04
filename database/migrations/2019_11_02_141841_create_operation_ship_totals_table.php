<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationShipTotalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operation_ship_totals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('operation_id')->index();
            $table->foreign('operation_id')->references('id')->on('operations')->onDelete('cascade');
            $table->string('decription')->nullable();
            $table->decimal('order_qty')->nullable();
            $table->decimal('nb_package')->nullable();
            $table->decimal('net_qty')->nullable();
            $table->decimal('gross_weight')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operation_ship_totals');
    }
}
