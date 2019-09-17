<div class="row">
	<div class="col-6">
		<div class="forml-gruoup" id="payment_terms_group">
			{!! Form::label('payment_terms', 'Payment Terms', ['class'=>'control-label', 'id'=>'_PaymentTerms']) !!}
			{!! Form::text('payment_terms', null, ['class'=>'form-control']) !!}
			<span class="payment_terms_span"></span>
		</div>
	</div>
	<div class="col-6">
		<div class="forml-gruoup" id="ccapital_at_risk_group">
			{!! Form::label('capital_at_risk', 'CapitalAtRisk', ['class'=>'control-label']) !!}
			{!! Form::text('capital_at_risk', null, ['class'=>'form-control','id'=>'_capital_at_risk']) !!}
			<span class=capital_at_risk_span"></span>
		</div>
	</div>
</div>