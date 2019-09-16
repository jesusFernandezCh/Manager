<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
        $table->bigIncrements('id')->unsigned();
        $table->string('code');
        $table->decimal('total_amount');
        $table->string('description');
        $table->unsignedBigInteger('account_id')->index();
        $table->foreign('account_id')->references('id')->on('accounts');
        $table->unsignedBigInteger('operator_id')->index();  
        $table->foreign('user_id')->references('id')->on('users');
        $table->unsignedBigInteger('operation_status_id')->index();
        $table->foreign('operation_status_id')->references('id')->on('operation_status');
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
        Schema::dropIfExists('operations');
    }
}
