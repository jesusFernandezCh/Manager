<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('name');
        $table->string('identification');
        // $table->integer('account_category_id');
        // $table->foreign('account_category_id')->references('id')->on('account_category');
        $table->string('address');
        $table->unsignedBigInteger('country_id')->index();
        $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        $table->string('phone');
        $table->string('email');
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
        Schema::dropIfExists('accounts');
    }
}
