<div class="row">
    <div class="col-12 alert-info text-center" style="border-radius: 50px">
    	<b>LOADING DETAILS</b>
    </div>
    {!! Form::hidden('operation_id', $operation->id, ['class'=>'form-control']) !!}
    <div class="col-md-3">
		<div class="" id="vessel_group">
			<i class=""></i>
			{!! Form::label('vessel', 'Vessel', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('vessel', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_vessel']) !!}
			<span class="vessel_span"></span>
		</div>
    </div>
    <div class="col-md-3">
		<div class="" id="shipping_date_group">
			<i class=""></i>
			{!! Form::label('shipping_date', 'ShippingDate', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('shipping_date', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'shipping_date_']) !!}
			<span class="shipping_date_span"></span>
		</div>
    </div>
    <div class="col-md-3">
		<div class="" id="eta_group">
			<i class=""></i>
			{!! Form::label('eta', 'ETA', ['class'=>'col-form-label s-12']) !!}
        {!! Form::text('eta', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_eta']) !!}
			<span class="eta_span"></span>
		</div>
    </div>
    <div class="col-md-3">
		<div class="" id="update_eta_on_group">
			<i class=""></i>
			{!! Form::label('update_eta_on', 'UpdateEtaOn', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('update_eta_on', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_update_eta_on','readonly']) !!}
			<span class="update_eta_on_span"></span>
		</div>
    </div>
    <div class="col-md-3">
		<div class="" id="bl_group">
			<i class=""></i>
			{!! Form::label('bl', 'BL', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('bl', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_bl']) !!}
			<span class="bl_span"></span>
		</div>
    </div>
    <div class="col-md-3">
		<div class="" id="container_group">
			<i class=""></i>
			{!! Form::label('container', 'Container', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('container', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_container']) !!}
			<span class="container_span"></span>
		</div>
    </div>
    <div class="col-md-3">
		<div class="" id="seals_group">
			<i class=""></i>
			{!! Form::label('seals', 'Seals', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('seals', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_seals']) !!}
			<span class="seals_span"></span>
		</div>
    </div>
    <div class="col-md-3">
		<div class="" id="date_insured_group">
			<i class=""></i>
			{!! Form::label('date_insured', 'DateInsured', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('date_insured', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_date_insured']) !!}
			<span class="date_insured_span"></span>
		</div>
    </div>
    <div class="col-md-3">
		<div class="" id="invoice_supplier_group">
			<i class=""></i>
			{!! Form::label('invoice_supplier', 'InvoiceSupplier', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('invoice_supplier', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_invoice_supplier']) !!}
			<span class="invoice_supplier_span"></span>
		</div>
    </div>
    <div class="col-md-3">
		<div class="" id="invoice_ppl_group">
			<i class=""></i>
			{!! Form::label('invoice_ppl', 'InvoicePPL', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('invoice_ppl', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_invoice_ppl']) !!}
			<span class="invoice_ppl_span"></span>
		</div>
    </div> <div class="col-md-3">
		<div class="form-grroup" id="invoice_forwarder_group">
			<i class=""></i>
			{!! Form::label('invoice_forwarder', 'InvoiceForwarder', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('invoice_forwarder', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_invoice_forwarder']) !!}
			<span class="invoice_forwarder_span"></span>
		</div>
    </div>
</div>
<div class="row">
	<div class="col-md-3">
		<div class="" id="total_pcs_group">
			<i class=""></i>
			{!! Form::label('total_pcs', 'TotalPcs', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('total_pcs', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_total_pcs']) !!}
			<span class="total_pcs_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="total_quantity_group">
			<i class=""></i>
			{!! Form::label('total_quantity', 'TotalQuantity', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('total_quantity', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_total_quantity']) !!}
			<span class="total_quantity_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="total_gw_group">
			<i class=""></i>
			{!! Form::label('total_gw', 'TotalGW', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('total_gw', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_total_gw']) !!}
			<span class="total_gw_span"></span>
		</div>
	</div>
</div>
