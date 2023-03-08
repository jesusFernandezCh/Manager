<div class="row">
	@if (isset($docsInstruction))
	<div class="col-md-12">
		<div class="" id="account_id_group">
			<i class=""></i>
			{!! Form::label('account_id', 'Account *', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('account_id', $accounts, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_account_id']) !!}
			<span class="cnee_span"></span>
		</div>
	</div>
	@else
	<div class="col-md-6">
		<div class="" id="account_id_group">
			<i class=""></i>
			{!! Form::hidden('account_id', $account->id, ['class'=>'form-control r-0 light s-12', 'id'=>'_account_id']) !!}
			<span class="account_id_span"></span>
		</div>
	</div>	
	@endif
	<div class="col-6">
		<div class="" id="preshipmentinspection_group">
			{!! Form::label('&nbsp;', '&nbsp;', ['class'=>'col-form-label s-12']) !!}
			<div class="material-switch col-form-label s-12">
                <input id="_preshipmentinspection" name="preshipmentinspection" type="checkbox" value="1" @if(isset($docsInstruction))&& @if($docsInstruction->preshipmentinspection == 1){{'checked'}}@endif @endif/>
                <label for="_preshipmentinspection" class="bg-secondary"></label>
				&nbsp; Labels Received  
            </div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="" id="agency_group">
			<i class=""></i>
			{!! Form::label('agency', 'Agency', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('agency', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_agency']) !!}
			<span class="agency_span"></span>
		</div>
	</div>
	<div class="col-6">
		<div class="" id="shipper_group">
			<i class=""></i>
			{!! Form::label('shipper', 'shipper', ['class'=>'col-form-label s-12']) !!}
			{!! Form::textarea('shipper', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_shipper','rows'=>"2"]) !!}
			<span class="shipper_span"></span>
		</div>
	</div>
	<div class="col-6">
		<div class="" id="BLCnee_group">
			<i class=""></i>
			{!! Form::label('BLCnee', 'BLCnee', ['class'=>'col-form-label s-12']) !!}
			{!! Form::textarea('bl_cnee', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_bl_cnee','rows'=>"2"]) !!}
			<span class="bl_cneer_span"></span>
		</div>
	</div>
	<div class="col-6">
		<div class="" id="bnl_ntfly_group">
			<i class=""></i>
			{!! Form::label('bn_lntfly', 'BNLNtfly', ['class'=>'col-form-label s-12']) !!}
			{!! Form::textarea('bnl_ntfly', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_bnl_ntfly','rows'=>"2"]) !!}
			<span class="bnl_ntfly_span"></span>
		</div>
	</div>
	<div class="col-6">
		<div class="form-group" id="certs_cnee_group">
			<i class=""></i>
			{!! Form::label('certs_cnee', 'Certs Cnee', ['class'=>'col-form-label s-12']) !!}
			{!! Form::textarea('certs_cnee', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_certs_cnee','rows'=>"2"]) !!}
			<span class="certs_cnee_span"></span>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="Invoice_group">
			<div class="material-switch col-form-label s-12">
                <input id="_invoice" name="invoice" type="checkbox" value="1"  @if(isset($docsInstruction))&& @if($docsInstruction->invoice == 1){{'checked'}}@endif @endif/>
                <label for="_invoice" class="bg-secondary"></label>
				&nbsp; Invoice  
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="Halai_group">
			<div class="material-switch col-form-label s-12">
                <input id="_halai" name="halai" type="checkbox" value="1" @if(isset($docsInstruction))&& @if($docsInstruction->halai == 1){{'checked'}}@endif @endif/>
                <label for="_halai" class="bg-secondary"></label>
				&nbsp; Halai  
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="ExportsDeclaration_group">
			<div class="material-switch col-form-label s-12">
                <input id="_exports_declaration" name="exports_declaration" type="checkbox" value="1" @if(isset($docsInstruction))&& @if($docsInstruction->exports_declaration == 1){{'checked'}}@endif @endif/>
                <label for="_exports_declaration" class="bg-secondary"></label>
				&nbsp; ExportsDeclaration
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="No_Radiation">
			<div class="material-switch col-form-label s-12">
                <input id="_no_radiation" name="no_radiation" type="checkbox" value="1" @if(isset($docsInstruction))&& @if($docsInstruction->no_radiation == 1){{'checked'}}@endif @endif/>
                <label for="_no_radiation" class="bg-secondary"></label>
				&nbsp; No_Radiation  
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="co_forma_group">
			<div class="material-switch col-form-label s-12">
                <input id="_co_forma" name="co_forma" type="checkbox" value="1" @if(isset($docsInstruction))&& @if($docsInstruction->co_forma == 1){{'checked'}}@endif @endif/>
                <label for="_co_forma" class="bg-secondary"></label>
				&nbsp; CO_Forma
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="haccp_group">
			<div class="material-switch col-form-label s-12">
                <input id="_haccp" name="haccp" type="checkbox" value="1" @if(isset($docsInstruction))&& @if($docsInstruction->haccp == 1){{'checked'}}@endif @endif/>
                <label for="_haccp" class="bg-secondary"></label>
				&nbsp; HACCP
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="waver_besc_group">
			<div class="material-switch col-form-label s-12">
                <input id="_waver_besc" name="waver_besc" type="checkbox" value="1" @if(isset($docsInstruction))&& @if($docsInstruction->waver_besc == 1){{'checked'}}@endif @endif/>
                <label for="_waver_besc" class="bg-secondary"></label>
				&nbsp; Waver_BESC
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="packing_list_group">
			<div class="material-switch col-form-label s-12">
                <input id="_packing_list" name="packing_list" type="checkbox" value="1" @if(isset($docsInstruction))&& @if($docsInstruction->packing_list == 1){{'checked'}}@endif @endif/>
                <label for="_packing_list" class="bg-secondary"></label>
				&nbsp; PackingList 
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="legalization_group">
			<div class="material-switch col-form-label s-12">
                <input id="_legalization" name="legalization" type="checkbox" value="1" @if(isset($docsInstruction))&& @if($docsInstruction->legalization == 1){{'checked'}}@endif @endif/>
                <label for="_legalization" class="bg-secondary"></label>
				&nbsp; Legalization  
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="no_dioxyn_group">
			<div class="material-switch col-form-label s-12">
                <input id="_no_dioxyn" name="no_dioxyn" type="checkbox" value="1" @if(isset($docsInstruction))&& @if($docsInstruction->no_dioxyn == 1){{'checked'}}@endif @endif/>
                <label for="_no_dioxyn" class="bg-secondary"></label>
				&nbsp; No_Dioxyn
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="hc_group">
			<div class="material-switch col-form-label s-12">
                <input id="_hc" name="hc" type="checkbox" value="1" @if(isset($docsInstruction))&& @if($docsInstruction->hc == 1){{'checked'}}@endif @endif/>
                <label for="_hc" class="bg-secondary"></label>
				&nbsp; HC
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="quality_certificate_group">
			<div class="material-switch col-form-label s-12">
                <input id="_quality_certificate" name="quality_certificate" type="checkbox" value="1" @if(isset($docsInstruction))&& @if($docsInstruction->quality_certificate == 1){{'checked'}}@endif @endif/>
                <label for="_quality_certificate" class="bg-secondary"></label>
				&nbsp; Quality_Certificate  
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="lab_analysis_group">
			<div class="material-switch col-form-label s-12">
                <input id="_lab_analysis" name="lab_analysis" type="checkbox" value="1" @if(isset($docsInstruction))&& @if($docsInstruction->lab_analysis == 1){{'checked'}}@endif @endif/>
                <label for="_lab_analysis" class="bg-secondary"></label>
				&nbsp; LabAnalysis  
            </div>
		</div>
	</div>
	<div class="col-12">
		<div class="" id="Aditional_requirements_group">
			<i class=""></i>
			{!! Form::label('Aditional_requirements', 'Aditional Requirements', ['class'=>'col-form-label s-12']) !!}
			{!! Form::textarea('aditional_requirements', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_aditional_requirements','rows'=>"3"]) !!}
			<span class="Aditional_requirements_span"></span>
		</div>
	</div>
	<div class="col-md-12">
		<div class="" id="cnee_group">
			<i class=""></i>
			{!! Form::label('cnee', 'Cnee *', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('cnee', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_cnee']) !!}
			<span class="cnee_span"></span>
		</div>
	</div>
</div>