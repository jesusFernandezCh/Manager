<div class="form-row">
	<div class="col-md-2">
		@if (isset($operation))
		<div class="" id="proforma_group">
			{!! Form::label('code', 'Order Name *', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('code', $operation->code, ['class'=>'form-control r-0 light s-12', 'id'=>'_code']) !!}
			<span class="code_span"></span>
		</div>
		@endif
	</div>
	<div class="col-md-2">
		<div class="form-group" id="date_order_group">
			{!! Form::label('date', 'Order date *', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('date_order', isset($date) ? $date : null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_date_order', 'onclick'=>'inputClear(this.id)']) !!}
			<span class="date_order_span"></span>
		</div>
	</div>
	<div class="col-md-2">
		<div class="" id="status_id_group">
			<i class=""></i>
			{!! Form::label('status_id', 'Status *', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('operation_status_id', $status, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_operation_status_id']) !!}
			<span class="_status_id_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="principal_id">
			<i class=""></i>
			{!! Form::label('business_line_id', 'Business Line *', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('business_line_id', $business, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_business_line_id_id']) !!}
			<span class="business_line_id_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group" id="principal_id">
			<i class=""></i>
			{!! Form::label('principal_id', 'Principal *', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('principal_id', $parther, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_principal_id']) !!}
			<span class="principal_id_span"></span>
		</div>
	</div>
	<div class="col-6 alert-info text-center" style="border-radius: 50px"><b>PURCHASE</b></div>
	<div class="col-6 alert-info text-center" style="border-radius: 50px"><b>SALE</b></div>
	<div class="col-md-6">
		<div class="" id="suplier_id_group">
			<i class=""></i>
			{!! Form::label('supplier_id', 'Supplier *', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('supplier_id', $supplier, null, ['class'=>'form-control r-0 light s-12 combo', 'id'=>'_supplier_id', 'data-route'=> route('supplierComercial'), 'data-r1'=>'_supplier_commercial_id', 'data-r2'=>'_cus_commercial_id']) !!}
			<span class="supplier_id_span"></span>
		</div>
	</div>
	<div class="col-md-6">
		<div class="" id="customer_id_group">
			<i class=""></i>
			{!! Form::label('customer_id', 'Customer', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('customer_id', $accounts, null, ['class'=>'form-control r-0 light s-12 combo', 'id'=>'_customer_id', 'data-route'=> route('comboCustomerBank'), 'data-r1'=>'_supplier_bank_id', 'data-r2'=>'_customer_bank_id']) !!}
			<span class="customer_id_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="suplier_commercial_id_group">
			<i class=""></i>
			{!! Form::label('suplier_commercial_id', 'Supplier Commercial', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('supplier_commercial_id', $contacts, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_supplier_commercial_id']) !!}
			<span class="supplier_commercial_id_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="proforma_group">
			{!! Form::label('proforma', 'Proforma', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
			{!! Form::text('proforma', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_proforma']) !!}
			<span class="proforma_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="custom_commercial_id_group">
			<i class=""></i>
			{!! Form::label('custom_commercial_id', 'Customer  Commercial', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('cus_commercial_id', $contacts, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_cus_commercial_id']) !!}
			<span class="cus_commercial_id_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="cus_ref_group">
			{!! Form::label('custom_ref', 'Custom Ref', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
			{!! Form::text('cus_ref', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_cus_ref_id']) !!}
			<span class="cus_ref_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		@if (isset($operation))
		<div class="" id="purchase_by_group">
			<i class=""></i>
			{!! Form::label('purchase_by', 'Purchase By ', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('purchase_by', $operators, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_purchase_by_id']) !!}
			<span class="purchase_by_span"></span>
		</div>
		@endif
	</div>
	<div class="col-md-3">
		<div class="" id="po_signed_group">
			{!! Form::label('po_signed', 'PO Signed', ['class'=>'col-form-label s-12']) !!}
			<div class="material-switch ">
                <input id="_su_po_signed" name="su_po_signed" type="checkbox" value="1" @if(isset($operation))&& @if($operation->su_po_signed == 1){{'checked'}}@endif @endif/>
                <label for="_su_po_signed" class="bg-secondary"></label>
            </div>
			<span class="po_signed_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="sale_by_group">
			<i class=""></i>
			{!! Form::label('sale_by', 'Sale By', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('sale_by', $operators, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_sale_by_id']) !!}
			<span class="sale_by_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="so_signed_group">
			{!! Form::label('so_signed', 'SO Signed', ['class'=>'col-form-label s-12']) !!}
			<div class="material-switch">
                <input id="_cu_po_signed" name="cu_po_signed" type="checkbox" value="1" @if(isset($operation))&& @if($operation->cu_po_signed == 1){{'checked'}}@endif @endif/>
                <label for="_cu_po_signed" class="bg-secondary"></label>
            </div>
			<span class="so_signed_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="purchase_broker_id_group">
			<i class=""></i>
			{!! Form::label('purchase_broker_id', 'Purchase Broker *', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('purchase_broker_id', $parther, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_purchase_broker_id_id']) !!}
			<span class="purchase_broker_id_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="p_broker_com_mt_group">
			{!! Form::label('p_broker_com_mt', 'PBrokerComMT', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('p_broker_com_mt', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_p_broker_com_mt_id', 'onclick'=>'inputClear(this.id)']) !!}
			<span class="p_broker_com_mt_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="sale_broker">
			<i class=""></i>
			{!! Form::label('sale_broker', 'Sale Broker', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('sale_broker', $parther, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_sale_broker_id']) !!}
			<span class="sale_by_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="s_broker_com_mt_group">
			{!! Form::label('s_broker_com_mt', 'SBrokerComMt', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
			{!! Form::text('s_broker_com_mt', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_s_broker_com_mt']) !!}
			<span class="s_broker_com_mt_span"></span>
		</div>
	</div>
	<div class="col-md-6">
		<div class="" id="supplier_bank_id">
			<i class=""></i>
			{!! Form::label('supplier_bank_id', 'Supplier Bank', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('supplier_bank_id', $banks, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_supplier_bank_id']) !!}
			<span class="supplier_bank_id_span"></span>
		</div>
	</div>
	<div class="col-md-6">
		<div class="" id="customer_bank_id">
			<i class=""></i>
			{!! Form::label('customer_bank_id', 'Customer Bank', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('customer_bank_id', $banks, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_customer_bank_id']) !!}
			<span class="customer_bank_id_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="p_modality_id">
			<i class=""></i>
			{!! Form::label('p_modality_id', 'PModality', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('p_modality_id', $payment_terms, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_p_modality_id']) !!}
			<span class="p_modality_id_span"></span>
		</div>
	</div>
	<div class="col-md-1">
		<div class="" id="s_advanced_group">
			{!! Form::label('s_advanced', '% avc', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
			{!! Form::text('s_advanced', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_s_advanced']) !!}
			<span class="s_advanced_span"></span>
		</div>
	</div>
	<div class="col-md-2">
		<div class="" id="p_days_group">
			{!! Form::label('p_days', 'P Days', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
			{!! Form::text('p_days', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_p_advanced']) !!}
			<span class="p_days_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="s_modality">
			<i class=""></i>
			{!! Form::label('s_modality', 'SModality', ['class'=>'col-form-label s-12']) !!}	
			{!! Form::select('s_modality', $payment_terms, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_s_modality']) !!}
			<span class="s_modality_span"></span>
		</div>
	</div>
	<div class="col-md-1">
		<div class="" id="s_advanced_group">
			{!! Form::label('s_advanced', '% avc', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
			{!! Form::text('s_advanced', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_s_advanced']) !!}
			<span class="s_advanced_span"></span>
		</div>
	</div>
	<div class="col-md-2">
		<div class="" id="p_days_group">
			{!! Form::label('p_days', 'S Days', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
			{!! Form::text('p_days', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_p_advanced']) !!}
			<span class="p_days_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="p_incoterm">
			<i class=""></i>
			{!! Form::label('p_incoterm', 'P IcoTerm', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('p_incoterm', $incoterms, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_p_incoterm']) !!}
			<span class="p_incoterm_span"></span>
		</div>
	</div>
	<div class="col-md-1">
		<div class="" id="p_curr">
			<i class=""></i>
			{!! Form::label('p_curr', 'Pcurr', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('p_curr', $currencys, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_p_curr']) !!}
			<span class="p_curr_span"></span>
		</div>
	</div>
	<div class="col-md-2">
		<div class="" id="p_incoterm_place_group">
			{!! Form::label('p_incoterm_place', 'PIncotermPlace', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
			{!! Form::text('p_incoterm_place', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_p_incoterm_place']) !!}
			<span class="p_incoterm_place_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="p_incoterm">
			<i class=""></i>
			{!! Form::label('s_incoterm', 'S IcoTerm', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('s_incoterm', $incoterms, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_s_incoterm']) !!}
			<span class="s_incoterm_span"></span>
		</div>
	</div>
	<div class="col-md-1">
		<div class="" id="s_curr">
			<i class=""></i>
			{!! Form::label('s_curr', 'Scurr', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('s_curr', $currencys, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_s_curr']) !!}
			<span class="s_curr_span"></span>
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group" id="s_incoterm_place_group">
			{!! Form::label('s_incoterm_place', 'SIncotermPlace', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
			{!! Form::text('s_incoterm_place', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_s_incoterm_place']) !!}
			<span class="p_incoterm_place_span"></span>
		</div>
	</div>
	<div class="col-12 alert-info text-center" style="border-radius: 50px"><b>LOGISTCS</b>
	</div>
	<div class="col-md-3">
		<div class="" id="ship_from_group">
			{!! Form::label('ship_from', 'Ship From', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
			{!! Form::text('ship_from', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_ship_from']) !!}
			<span class="ship_from_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="dead_line_ship_group">
			{!! Form::label('dead_line_ship', 'Dead Line Ship', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
			{!! Form::text('dead_line_ship', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_dead_line_ship']) !!}
			<span class="dead_line_ship_span"></span>
		</div>
	</div>
	<div class="col-md-1">
		<div class="" id="s_curr_group">
			<i class=""></i>
			{!! Form::label('cargo_unit', 'Cargo Unit', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('cargo_unit', $cargoUnits, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_cargo_unit']) !!}
			<span class="cargo_unit_span"></span>
		</div>
	</div>
	<div class="col-md-2">
		<div class="" id="log_unit_group">
			<i class=""></i>
			{!! Form::label('log_unit', 'Logunit', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('log_unit', $logunits, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_log_unit']) !!}
			<span class="log_unit_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="nb_log_units_group">
			<i class=""></i>
			{!! Form::label('nb_log_units', 'NbLogUnits', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('nb_log_units', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_nb_log_units']) !!}
			<span class="nb_log_units_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="pol_id_group">
			<i class=""></i>
			{!! Form::label('pol_id', 'POL', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('pol_id', $ports, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_pol_id']) !!}
			<span class="pol_id_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="origin_group">
			<i class=""></i>
			{!! Form::label('origin', 'Origin', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('origin', $countries, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_origin']) !!}
			<span class="origin_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="pod_id_group">
			<i class=""></i>
			{!! Form::label('pod_id', 'POD', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('pod_id', $ports, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_pod_id']) !!}
			<span class="pod_id_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="final_destination_group">
			<i class=""></i>
			{!! Form::label('final_destination', 'Final Destination', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('final_destination', $countries, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_final_destination']) !!}
			<span class="final_destination_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="est_freight_u_group">
			<i class=""></i>
			{!! Form::label('est_freight_u', 'EstFreightUnit', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('est_freight_u', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_est_freight_u']) !!}
			<span class="est_freight_u_span"></span>
		</div>
	</div>
	<div class="col-md-1">
		<div class="" id="est_inland_u_group">
			<i class=""></i>
			{!! Form::label('est_inland_u', 'EstInlandU', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('est_inland_u', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_est_inland_u']) !!}
			<span class="est_inland_u_span"></span>
		</div>
	</div>
	<div class="col-md-2">
		<div class="" id="est_legal_u_group">
			<i class=""></i>
			{!! Form::label('est_legal_u', 'EstLegalU', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('est_legal_u', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_est_legal_u']) !!}
			<span class="est_legal_u_span"></span>
		</div>
	</div>
	<div class="col-md-6">
		<div class="" id="add_instructions_group">
			<i class=""></i>
			{!! Form::label('add_instructions', 'Add Instructions', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('add_instructions', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_add_instructions']) !!}
			<span class="add_instructions_span"></span>
		</div>
	</div>
	<div class="col-md-12">
		<div class="" id="comments_group">
			<i class=""></i>
			{!! Form::label('comments', 'Comments', ['class'=>'col-form-label s-12']) !!}
			{!! Form::textarea('comments', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_comments', 'rows'=>"2"]) !!}
			<span class="acomments_span"></span>
		</div>
	</div>
</div>