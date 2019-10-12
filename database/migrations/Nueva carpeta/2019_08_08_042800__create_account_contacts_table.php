<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_contact', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->unsignedBigInteger('account_id')->index();
            $table->foreign('account_id')->references('id')->on('account')->onDelete('cascade');
            $table->string('phone_company');
            $table->string('phone_mobile');
            $table->string('email');
            $table->string('departament');
            $table->unsignedBigInteger('country_id')->index();
            $table->foreign('country_id')->references('id')->on('country')->onDelete('cascade');
            $table->string('address');
            $table->string('comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('account_contact');
    }
}
