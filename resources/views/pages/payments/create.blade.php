<!-- Modal -->
{!! Form::open(['route'=>'payments.store','method'=>'POST']) !!}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="bank">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><i class="icon icon-goals-1"></i> {{__('Add New Payment') }}</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="form-row">
					<div class="col-md-12">
						<div class="form-row">
							<div class="form-group offset-2 col-8">
								<i class="icon-cogs mr-2"></i>
								{!! Form::label('operation_id',__('Operation'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('operation_id', $operation, null, ['class'=>'form-control text-center r-0 light s-12', 'id'=>'operation_id', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="operation_id_span"></span>
							</div>
							<div class="form-group offset-2 col-8">
								<i class="icon-cogs mr-2"></i>
								{!! Form::label('transaction_id',__('Bank Transaction'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('transaction_id', $cod, null, ['class'=>'form-control r-0 light s-12', 'id'=>'transaction_id', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="transaction_id_span"></span>
							</div>
							
						</div>
						<div class="form-row">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-row">
							<div class="form-group offset-2 col-8">
								<i class="icon-key4 mr-2"></i>
								{!! Form::label('amount',__('Amount'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('amount', null, ['onkeypress'=>'return soloNum(event)', 'class'=>'form-control r-0 light s-12', 'id'=>'amount']) !!}
								{!! Form::hidden('before', null, ['onkeypress'=>'return soloNum(event)', 'class'=>'form-control r-0 light s-12', 'id'=>'before']) !!}
								<span class="amount_span"></span>
							</div>
							<div class="form-group offset-2 col-8">
								<i class="icon-cogs mr-2"></i>
								{!! Form::label('type',__('Type'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('type', $type, null, ['class'=>'form-control r-0 light s-12', 'id'=>'type', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="type_span"></span>
							</div>

						</div>
						<div class="form-row">
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">{{__('Close') }}</button>
				<button type="submit" class="btn btn-primary" id="sub" disabled><i class="icon-save mr-2"></i>{{__('Save data') }}</button>
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}

