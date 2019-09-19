@extends('layouts.app')
@section('title')
<div class="nav-title text-white col-12"> 
	<i class="icon-person"></i>
	<a href="{{ route('operations.index') }}">{{__('Operation')}}</a> > {{$operation->account->name}} > {{$operation->code}}
</div>
<div class="col-12">
	<div class="text-white">Status: {{$operation->operationStatus->name}}</div>
</div>

@endsection
@section('maincontent')
<div class="page height-full">
	<div class="form-group" style="margin-top: 75px">
		@include($topMenu)
	</div>
	 <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
        	<div class="col-md-12">
	            <div class="card" style="margin-top:0px">
	                <div class="form-group">
	                    <div class="card-header white">
	                        <h6><i class=""></i> {{__('ORDER TERMS')}} </h6>
	                    </div>
	                </div>
	                <div class="card-body">
						{!! Form::model($operation,['route'=>["operations.update",$operation->id],'method'=>'PUT','class'=>'formlDinamic form','id'=>'DataUpdate']) !!}
						<div class="form-row">
							<div class="col-md-2">
								<div class="form-group" id="proforma_group">
									{!! Form::label('code', 'Order Name *', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
									{!! Form::text('code', $operation->code, ['class'=>'form-control r-0 light s-12', 'id'=>'code']) !!}
									<span class="code_span"></span>
								</div>
							</div>
							<div class="col-md-2">
								<div class="" id="date_group">
									{!! Form::label('date', 'Order date *', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
									{!! Form::text('date', $operation->created_at->format('d-m-Y'), ['class'=>'form-control r-0 light s-12', 'id'=>'date']) !!}
									<span class="date_span"></span>
								</div>
							</div>
							<div class="col-md-2">
								<div class="" id="operations_status_id_group">
									<i class=""></i>
									{!! Form::label('operations_status_id', 'Status *', ['class'=>'col-form-label s-12']) !!}
									{!! Form::select('operations_status_id', $status, null, ['class'=>'form-control r-0 light s-12', 'id'=>'operations_status_id']) !!}
									<span class="operations_status_id_span"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="" id="principal_id">
									<i class=""></i>
									{!! Form::label('business_line_id', 'Business Line *', ['class'=>'col-form-label s-12']) !!}
									{!! Form::select('business_line_id', [], null, ['class'=>'form-control r-0 light s-12', 'id'=>'business_line_id_id']) !!}
									<span class="business_line_id_span"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="" id="principal_id">
									<i class=""></i>
									{!! Form::label('principal_id', 'Principal *', ['class'=>'col-form-label s-12']) !!}
									{!! Form::select('principal_id', $principal, null, ['class'=>'form-control r-0 light s-12', 'id'=>'principal_id']) !!}
									<span class="principal_id_span"></span>
								</div>
							</div>
							<div class="col-6 alert-info text-center" style="border-radius: 50px"><b>PURCHASE</b></div>
							<div class="col-6 alert-info text-center" style="border-radius: 50px"><b>SALE</b></div>
							<div class="col-md-6">
								<div class="" id="suplier_id_group">
									<i class=""></i>
									{!! Form::label('supplier_id', 'Supplier *', ['class'=>'col-form-label s-12']) !!}
									{!! Form::select('supplier_id', $supplier, null, ['class'=>'form-control r-0 light s-12', 'id'=>'supplier_id']) !!}
									<span class="supplier_id_span"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="" id="customer_id_group">
									<i class=""></i>
									{!! Form::label('customer_id', 'Customer', ['class'=>'col-form-label s-12']) !!}
									{!! Form::select('customer_id', $accounts, null, ['class'=>'form-control r-0 light s-12', 'id'=>'customer_id']) !!}
									<span class="customer_id_span"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="" id="suplier_commercial_id_group">
									<i class=""></i>
									{!! Form::label('suplier_commercial_id', 'Supplier Commercial', ['class'=>'col-form-label s-12']) !!}
									{!! Form::select('supplier_commercil_id', $accounts, null, ['class'=>'form-control r-0 light s-12', 'id'=>'supplier_commercial_id']) !!}
									<span class="supplier_commercial_id_span"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="" id="proforma_group">
									{!! Form::label('proforma', 'Proforma', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
									{!! Form::text('proforma', null, ['class'=>'form-control r-0 light s-12', 'id'=>'proforma']) !!}
									<span class="proforma_span"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="" id="custom_commercial_id_group">
									<i class=""></i>
									{!! Form::label('custom_commercial_id', 'Customer  Commercial', ['class'=>'col-form-label s-12']) !!}
									{!! Form::select('cus_commercial_id', $accounts, null, ['class'=>'form-control r-0 light s-12', 'id'=>'cus_commercial_id_id']) !!}
									<span class="cus_commercial_id_span"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="" id="cus_ref_group">
									{!! Form::label('custom_ref', 'Custom Ref', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
									{!! Form::text('cus_ref', null, ['class'=>'form-control r-0 light s-12', 'id'=>'cus_ref_id']) !!}
									<span class="cus_ref_span"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="" id="purchase_by_group">
									<i class=""></i>
									{!! Form::label('purchase_by', 'Purchase By', ['class'=>'col-form-label s-12']) !!}
									{!! Form::select('purchase_by', $accounts, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_purchase_by_id']) !!}
									<span class="purchase_by_span"></span>
								</div>
							</div>
							<div class="col-md-3 text-center">
								<div class="" id="po_signed_group">
									<i class=""></i>
									<br>
									{!! Form::label('po_signed', 'PO Signed', ['class'=>'col-form-label s-12']) !!}
									<input type="checkbox" name="po_signed" value="1" class="" />
									<span class="po_signed_span"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="" id="sale_by_group">
									<i class=""></i>
									{!! Form::label('sale_by', 'Sale By', ['class'=>'col-form-label s-12']) !!}
									{!! Form::select('sale_by', $accounts, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_sale_by_id']) !!}
									<span class="sale_by_span"></span>
								</div>
							</div>
							<div class="col-md-3 text-center">
								<div class="" id="so_signed_group">
									<i class=""></i>
									<br>
									{!! Form::label('so_signed', 'SO Signed', ['class'=>'col-form-label s-12']) !!}
									<input type="checkbox" name="_so_signed" value="1" class="" />
									<span class="so_signed_span"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="" id="purchase_broker_id_group">
									<i class=""></i>
									{!! Form::label('purchase_broker_id', 'Purchase Broker *', ['class'=>'col-form-label s-12']) !!}
									{!! Form::select('purchase_broker_id', $accounts, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_purchase_broker_id_id']) !!}
									<span class="purchase_broker_id_span"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="" id="pb_roker_com_mt_group">
									{!! Form::label('pb_roker_com_mt', 'PBrokerComMT', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
									{!! Form::text('pb_roker_com_mt', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_pb_roker_com_mt_id']) !!}
									<span class="pb_roker_com_mt_span"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="" id="sale_broker">
									<i class=""></i>
									{!! Form::label('sale_broker', 'Sale Broker', ['class'=>'col-form-label s-12']) !!}
									{!! Form::select('sale_broker', $accounts, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_sale_broker_id']) !!}
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
									{!! Form::select('supplier_bank_id', $accounts, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_supplier_bank_id']) !!}
									<span class="supplier_bank_id_span"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="" id="customer_bank_id">
									<i class=""></i>
									{!! Form::label('customer_bank_id', 'Customer Bank', ['class'=>'col-form-label s-12']) !!}
									{!! Form::select('customer_bank_id', $accounts, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_supplier_bank_id']) !!}
									<span class="customer_bank_id_span"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="" id="p_modality_id">
									<i class=""></i>
									{!! Form::label('p_modality_id', 'PModality', ['class'=>'col-form-label s-12']) !!}
									{!! Form::select('p_modality_id', $accounts, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_p_modality_id']) !!}
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
								<div class="" id="payment_id">
									<i class=""></i>
									{!! Form::label('payment_id', 'Payment', ['class'=>'col-form-label s-12']) !!}
									{!! Form::select('payment_id', $accounts, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_payment_id']) !!}
									<span class="payment_id_span"></span>
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
									{!! Form::select('p_incoterm', $incoterms, null, ['class'=>'form-control r-0 light s-12', 'id'=>'p_incoterm']) !!}
									<span class="p_incoterm_span"></span>
								</div>
							</div>
							<div class="col-md-1">
								<div class="form-group" id="p_curr">
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
									{!! Form::select('s_incoterm', $incoterms, null, ['class'=>'form-control r-0 light s-12', 'id'=>'s_incoterm']) !!}
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
								<div class="" id="s_incoterm_place_group">
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
									{!! Form::text('ship_from', null, ['class'=>'form-control r-0 light s-12', 'id'=>'ship_from']) !!}
									<span class="ship_from_span"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="" id="dead_line_ship_group">
									{!! Form::label('dead_line_ship', 'Dead Line Ship', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
									{!! Form::text('dead_line_ship', null, ['class'=>'form-control r-0 light s-12', 'id'=>'dead_line_ship']) !!}
									<span class="dead_line_ship_span"></span>
								</div>
							</div>
							<div class="col-md-1">
								<div class="" id="s_curr_group">
									<i class=""></i>
									{!! Form::label('cargo_unit', 'Cargo Unit', ['class'=>'col-form-label s-12']) !!}
									{!! Form::select('cargo_unit', [1 => 'Kg', 2 => 'Mg'], null, ['class'=>'form-control r-0 light s-12', 'id'=>'_cargo_unit']) !!}
									<span class="cargo_unit_span"></span>
								</div>
							</div>
							<div class="col-md-2">
								<div class="" id="log_unit_group">
									<i class=""></i>
									{!! Form::label('log_unit', 'Logunit', ['class'=>'col-form-label s-12']) !!}
									{!! Form::select('log_unit', [1 => '40re', 2 => '50re'], null, ['class'=>'form-control r-0 light s-12', 'id'=>'_log_unit']) !!}
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
							{!! Form::hidden('route', route('operations.index'), ['id'=>'route']) !!}
						</div>
						<br>
						<div class="col-md-12 text-right">
							<a href="{{ route('operations.index') }}" class="btn btn-default" data-dismiss="modal">{{__('Back')}}</a>
							<button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>{{_('Save data')}}</button>
						</div>
						{!! Form::close() !!}
					</div>
				</div>
        	</div>
		</div>
	</div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#resumen').addClass('active');
    });
</script>
@endsection

