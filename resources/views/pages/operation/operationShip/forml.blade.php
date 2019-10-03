<div class="row">
    <div class="col-12 alert-info text-center" style="border-radius: 50px">
    	<b>AVAILABILITY INSTURCTION</b>
    </div>
    {!! Form::hidden('operation', $operation->id, ['class'=>'form-control']) !!}
    <div class="col-md-3">
		<div class="" id="supplier_Admin_group">
			<i class=""></i>
			{!! Form::label('supplier_Admin', 'SupplierAdmin *', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('supplier_Admin', $supplier, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_supplier_Admin']) !!}
			<span class="supplier_Admin_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="supplier_ops_group">
			<i class=""></i>
			{!! Form::label('supplier_ops', 'SuplierOps', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('supplier_ops', $supplier, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_supplier_ops']) !!}
			<span class="supplier_ops_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="cust_Admin_group">
			<i class=""></i>
			{!! Form::label('cust_Admin', 'CustAdmin *', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('cust_Admin', $supplier, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_cust_Admin']) !!}
			<span class="cust_Admin_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="cust_ops_group">
			<i class=""></i>
			{!! Form::label('cust_ops', 'CustOps', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('cust_ops', $supplier, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_cust_ops']) !!}
			<span class="cust_ops_span"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="" id="date_availability_group">
			<i class=""></i>
			{!! Form::label('date_availability', 'Date Availability', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('date_availability', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_date_availability']) !!}
			<span class="date_availability_span"></span>
		</div>
	</div>
	<div class="col-3"></div>
	{{--  <div class="col-md-1">
		<div class="forml-group">
			{!! Form::label('&nbsp;', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', ['class'=>'col-form-label s-12']) !!}
			<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#doc" title="Add doc">Doc</button>
			
		</div>
	</div>  --}}
	<div class="col-6">
		<div class="" id="cust_ops_group">
			<i class=""></i>
			{!! Form::label('cnee', 'Cnee', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('cust_ops', [], null, ['class'=>'form-control r-0 light s-12', 'id'=>'_cust_ops']) !!}
			<span class="cust_ops_span"></span>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="labels_received_group">
			{!! Form::label('&nbsp;', '&nbsp;', ['class'=>'col-form-label s-12']) !!}
			<div class="material-switch ">
                <input id="_labels_received" name="labels_received" type="checkbox" value="1" />
                <label for="_labels_received" class="bg-secondary"></label>
				&nbsp; Labels Received  
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="labels_oK_group">
			{!! Form::label('&nbsp;', '&nbsp;', ['class'=>'col-form-label s-12']) !!}
			<div class="material-switch ">
                <input id="_labels_oK" name="labels_oK" type="checkbox" value="1" @if(isset($operation))&& @if($operation->su_po_signed == 1){{'checked'}}@endif @endif/>
                <label for="_labels_oK" class="bg-secondary"></label>
                &nbsp; Labels OK
            </div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group" id="insp_ref_group">
			<i class=""></i>
			{!! Form::label('insp_ref', 'InspRef', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('insp_ref', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_insp_ref']) !!}
			<span class="insp_ref_span"></span>
		</div>
	</div>
	<div class="col-3">
		<div class="form-group" id="licence_ok_group">
			{!! Form::label('&nbsp;', '&nbsp;', ['class'=>'col-form-label s-12']) !!}
			<div class="material-switch ">
                <input id="_licence_ok" name="licence_ok" type="checkbox" value="1" @if(isset($operation))&& @if($operation->su_po_signed == 1){{'checked'}}@endif @endif/>
                <label for="_licence_ok" class="bg-secondary"></label>
               	&nbsp; Licence OK
            </div>
		</div>
	</div>
	<div class="col-12 alert-info text-center" style="border-radius: 50px">
    	<b>INLAND</b>
    </div>
    <div class="col-3">
		<div class="" id="date_appointment_group">
			<i class=""></i>
			{!! Form::label('date_appointment', 'Date Appointment', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('date_appointment', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_date_appointment']) !!}
			<span class="date_appointment_span"></span>
		</div>
	</div>
	<div class="col-9"></div>
	<div class="col-6">
		<div class="" id="pickup_location_group">
			<i class=""></i>
			{!! Form::label('pickup_location', 'Pickup Location', ['class'=>'col-form-label s-12']) !!}
			{!! Form::textarea('pickup_location', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_pickup_location','rows'=>"2"]) !!}
			<span class="pickup_location_span"></span>
		</div>
	</div>
	<div class="col-6">
		<div class="form-group" id="instruction_inland_group">
			<i class=""></i>
			{!! Form::label('instruction_inland', 'Instruction Inland', ['class'=>'col-form-label s-12']) !!}
			{!! Form::textarea('instruction_inland', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_instruction_inland','rows'=>"2"]) !!}
			<span class="instruction_inland_span"></span>
		</div>
	</div>
	<div class="col-12 alert-info text-center" style="border-radius: 50px">
    	<b>BOOKING</b>
    </div>
    <div class="col-6">
		<div class="" id="freight_rate_group">
			<i class=""></i>
			{!! Form::label('freight_rate', 'Freight Rate', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('freight_rate', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_freight_rate']) !!}
			<span class="freight_rate_span"></span>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="booking_ref_group">
			<i class=""></i>
			{!! Form::label('booking_ref', 'BookingRef', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('booking_ref', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_booking_ref']) !!}
			<span class="booking_ref_span"></span>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="est_vessel_group">
			<i class=""></i>
			{!! Form::label('est_vessel', 'EstVessel', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('est_vessel', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_est_vessel']) !!}
			<span class="est_vessel_span"></span>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="cut_off_docs_group">
			<i class=""></i>
			{!! Form::label('cut_off_docs', 'Cut_OffDocs', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('cut_off_docs', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_cut_off_docs']) !!}
			<span class="cut_off_docs_span"></span>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="cut_off_cargo_group">
			<i class=""></i>
			{!! Form::label('cut_off_cargo', 'Cut_OffCargo', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('cut_off_cargo', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_cut_off_cargo']) !!}
			<span class="cut_off_cargo_span"></span>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="est_etd_group">
			<i class=""></i>
			{!! Form::label('est_etd', 'EstETD', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('est_etd', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_est_etd']) !!}
			<span class="est_etd_span"></span>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="est_eta_group">
			<i class=""></i>
			{!! Form::label('est_eta', 'EstETA', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('est_eta', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_est_eta']) !!}
			<span class="est_eta_span"></span>
		</div>
	</div>
</div>	



