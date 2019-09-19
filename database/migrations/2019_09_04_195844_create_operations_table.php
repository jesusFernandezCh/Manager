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
        $table->string('date_order');
        $table->unsignedBigInteger('operation_status_id')->index();
        $table->foreign('operation_status_id')->references('id')->on('operation_status');
        $table->unsignedBigInteger('business_line_id')->index();
        $table->foreign('business_line_id')->references('id')->on('business_line');
        $table->unsignedBigInteger('principal_id')->index();
        $table->foreign('account_id')->references('id')->on('accounts');
        $table->unsignedBigInteger('supplier_id')->index();
        $table->foreign('account_id')->references('id')->on('accounts');
        $table->integer('supplier_commercial')->nullable();
        $table->string('proforma')->nullable();
        $table->integer('cus_commercial_id')->nullable();
        $table->integer('cus_ref')->nullable();
        $table->unsignedBigInteger('purchase_by')->index();  
        $table->foreign('user_id')->references('id')->on('users');
        $table->tinyInteger('su_po_signed')->nullable(); 
        $table->integer('sale_by')->nullable(); 
        $table->tinyInteger('cu_po_signed')->nullable();
        $table->integer('purchase_broker_id')->nullable();  
        $table->string('p_broker_com_mt')->nullable();
        $table->integer('sale_broker_id')->nullable();  
        $table->string('s_broker_com_mt')->nullable();
        $table->integer('supplier_bank_id')->nullable();
        $table->integer('customer_bank_id')->nullable();
        $table->integer('p_modality')->nullable();  
        $table->string('p_advanced')->nullable();
        $table->string('p_days')->nullable();
        $table->integer('payment')->nullable();
        $table->string('s_advanced')->nullable();  
        $table->string('s_days')->nullable();
        $table->integer('purchase_incoterm')->nullable();
        $table->integer('purchase_curr')->nullable();
        $table->integer('p_incoterm_place')->nullable();
        $table->integer('sale_incoterm')->nullable();
        $table->integer('sale_curr')->nullable();
        $table->integer('s_incoterm_place')->nullable();
        $table->date('ship_from')->nullable();
        $table->date('dead_line_ship')->nullable();
        $table->integer('cargo_unit')->nullable();
        $table->integer('log_unit')->nullable();
        $table->integer('nb_log_units')->nullable();
        $table->integer('pol_id')->nullable();
        $table->integer('origin')->nullable();
        $table->integer('pod_id')->nullable();
        $table->integer('final_destination')->nullable();
        $table->string('est_freight_u')->nullable();
        $table->string('est_inland_u')->nullable();
        $table->string('est_legal_u')->nullable();
        $table->string('add_instructions')->nullable();
        $table->text('comments')->nullable();
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
