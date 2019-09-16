<div class="row">
	<div class="col-6">
		<div class="forml-gruoup" id="name_group">
			{!! Form::label('name', 'Name', ['class'=>'control-label', 'id'=>'_name']) !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
			<span class="name_span"></span>
		</div>
	</div>
	<div class="col-6">
		<div class="forml-gruoup" id="risk_coefficient_group">
			{!! Form::label('risk_coefficient', 'Risk Coefficient', ['class'=>'control-label']) !!}
			{!! Form::text('risk_coefficient', null, ['class'=>'form-control','id'=>'risk_coefficient_']) !!}
			<span class="risk_coefficient_span"></span>
		</div>
	</div>
</div>