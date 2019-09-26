<div class="row">
	<div class="col-12">
		<div class="forml-gruoup" id="name_group">
			{!! Form::label('name', 'Name', ['class'=>'control-label', 'id'=>'_name']) !!}
			{!! Form::text('name', null, ['class'=>'form-control','onclick'=>'inputClear(this.id)']) !!}
			<span class="name_span"></span>
		</div>
	</div>
</div>