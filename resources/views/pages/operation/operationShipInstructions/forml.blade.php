<div class="row">
	<div class="col-md-12">
		<div class="" id="cnee_group">
			<i class=""></i>
			{!! Form::label('cnee', 'Cnee', ['class'=>'col-form-label s-12']) !!}
			{!! Form::select('cnee', [], null, ['class'=>'form-control r-0 light s-12', 'id'=>'_cnee']) !!}
			<span class="cnee_span"></span>
		</div>
	</div>
	<div class="col-6">
		<div class="" id="pre_shipmentinspection_group">
			{!! Form::label('&nbsp;', '&nbsp;', ['class'=>'col-form-label s-12']) !!}
			<div class="material-switch col-form-label s-12">
                <input id="_pr_eshipmentinspection" name="pre_shipmentinspection" type="checkbox" value="1" />
                <label for="_pr_eshipmentinspection" class="bg-secondary"></label>
				&nbsp; Labels Received  
            </div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="" id="agency_group">
			<i class=""></i>
			{!! Form::label('agency', 'Agency', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('agency', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_agency']) !!}
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
			{!! Form::textarea('BLCnee', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_BLCnee','rows'=>"2"]) !!}
			<span class="BLCneer_span"></span>
		</div>
	</div>
	<div class="col-6">
		<div class="" id="bn_lntfly_group">
			<i class=""></i>
			{!! Form::label('bn_lntfly', 'BNLNtfly', ['class'=>'col-form-label s-12']) !!}
			{!! Form::textarea('bn_lntfly', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_bn_lntfly','rows'=>"2"]) !!}
			<span class="bn_lntfly_span"></span>
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
                <input id="_invoice" name="invoice" type="checkbox" value="1" />
                <label for="_invoice" class="bg-secondary"></label>
				&nbsp; Invoice  
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="Halai_group">
			<div class="material-switch col-form-label s-12">
                <input id="_halai" name="halai" type="checkbox" value="1" />
                <label for="_halai" class="bg-secondary"></label>
				&nbsp; Halai  
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="ExportsDeclaration_group">
			<div class="material-switch col-form-label s-12">
                <input id="_exports_declaration" name="exports_declaration" type="checkbox" value="1" />
                <label for="_exports_declaration" class="bg-secondary"></label>
				&nbsp; ExportsDeclaration
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="No_Radiation">
			<div class="material-switch col-form-label s-12">
                <input id="_no_radiation" name="no_radiation" type="checkbox" value="1" />
                <label for="_no_radiation" class="bg-secondary"></label>
				&nbsp; No_Radiation  
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="co_formA_group">
			<div class="material-switch col-form-label s-12">
                <input id="_co_formA" name="co_formA" type="checkbox" value="1" />
                <label for="_co_formA" class="bg-secondary"></label>
				&nbsp; CO_FormA
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="haccp_group">
			<div class="material-switch col-form-label s-12">
                <input id="_haccp" name="haccp" type="checkbox" value="1" />
                <label for="_haccp" class="bg-secondary"></label>
				&nbsp; HACCP
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="waver_besc_group">
			<div class="material-switch col-form-label s-12">
                <input id="_waver_besc" name="waver_besc" type="checkbox" value="1" />
                <label for="_waver_besc" class="bg-secondary"></label>
				&nbsp; Waver_BESC
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="packing_list_group">
			<div class="material-switch col-form-label s-12">
                <input id="_packing_list" name="packing_list" type="checkbox" value="1" />
                <label for="_packing_list" class="bg-secondary"></label>
				&nbsp; PackingList 
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="legalization_group">
			<div class="material-switch col-form-label s-12">
                <input id="_legalization" name="legalization" type="checkbox" value="1" />
                <label for="_legalization" class="bg-secondary"></label>
				&nbsp; Legalization  
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="no_dioxyn_group">
			<div class="material-switch col-form-label s-12">
                <input id="_no_dioxyn" name="no_dioxyn" type="checkbox" value="1" />
                <label for="_no_dioxyn" class="bg-secondary"></label>
				&nbsp; No_Dioxyn
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="hc_group">
			<div class="material-switch col-form-label s-12">
                <input id="_hc" name="hc" type="checkbox" value="1" />
                <label for="_hc" class="bg-secondary"></label>
				&nbsp; HC
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="quality_certificate_group">
			<div class="material-switch col-form-label s-12">
                <input id="_quality_certificate" name="quality_certificate" type="checkbox" value="1" />
                <label for="_quality_certificate" class="bg-secondary"></label>
				&nbsp; Quality_Certificate  
            </div>
		</div>
	</div>
	<div class="col-3">
		<div class="" id="lab_analysis_group">
			<div class="material-switch col-form-label s-12">
                <input id="_lab_analysis" name="lab_analysis" type="checkbox" value="1" />
                <label for="_lab_analysis" class="bg-secondary"></label>
				&nbsp; LabAnalysis  
            </div>
		</div>
	</div>
	<div class="col-12">
		<div class="" id="BLCnee_group">
			<i class=""></i>
			{!! Form::label('BLCnee', 'BLCnee', ['class'=>'col-form-label s-12']) !!}
			{!! Form::textarea('BLCnee', null, ['class'=>'form-control r-0 light s-12', 'id'=>'_BLCnee','rows'=>"2"]) !!}
			<span class="BLCneer_span"></span>
		</div>
	</div>
	<div class="col-md-12">
		<div class="" id="Cnee">
			<i class=""></i>
			{!! Form::label('cnee', 'Cnee', ['class'=>'col-form-label s-12']) !!}
			{!! Form::text('cnee', null, ['class'=>'form-control r-0 light s-12 datepicker', 'id'=>'_cnee']) !!}
			<span class="cnee_span"></span>
		</div>
	</div>
</div>