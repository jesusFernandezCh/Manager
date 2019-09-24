<!-- Modal -->
{!! Form::open(['route'=>'bank_transaction.store','method'=>'POST', 'class'=>'formlDinamic', 'id'=>'guardarRegistro']) !!}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="bank">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><i class="icon icon-goals-1"></i> {{__('Add New Bank Transaction') }}</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="form-row">
					<div class="col-md-12">
						<div class="form-row">
							<div class="form-group col-6 m-0">
								<i class="icon-bank mr-2"></i>
								{!! Form::label('bank_id',__('Bank'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('bank_id', $bank, null, ['class'=>'form-control r-0 light s-12', 'id'=>'bank_id', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="bank_id_span"></span>
							</div>
							<div class="form-group col-6 m-0" id="password_group">
								<i class="icon-file-text mr-2"></i>
								{!! Form::label('amount',__('Amount'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('amount', null, ['class'=>'form-control r-0 light s-12',  'id'=>'amount', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="amount_span"></span>
							</div>
							
							
						</div>
						<div class="form-row">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-row">
							<div class="form-group col-6 m-0">
								<i class="icon-key4 mr-2"></i>
								{!! Form::label('reference',__('Reference'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('reference', null, ['class'=>'form-control r-0 light s-12', 'id'=>'reference']) !!}
								<span class="reference_span"></span>
							</div>
							<div class="form-group col-6 m-0">
								<i class="icon-key4 mr-2"></i>
								{!! Form::label('date',__('Date'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::date('date', date('Y-m-d'), ['class'=>'form-control r-0 light s-12', 'id'=>'date']) !!}
								<span class="date_span"></span>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-6 m-0">
								<i class="icon-user mr-2"></i>
								{!! Form::label('user',__('User'), ['class'=>'col-form-label s-12']) !!}
								<input type="text" disabled value="{{ Auth::user()->fullname }}" class="form-control r-0 light s-12">
								{!! Form::hidden('user',  Auth::user()->id , ['class'=>'form-control r-0 light s-12', 'id'=>'user']) !!}
								<span class="user_span"></span>
							</div>
							<div class="form-group col-6 m-0">
								<i class="icon-user mr-2"></i>
								{!! Form::label('up',__('Updated Date'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('up',  date('Y-m-d H:i:s'), ['class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'up']) !!}
								<span class="update_span"></span>
							</div>
							<div class="form-group col-6 m-0">
								<i class="icon-bank mr-2"></i>
								{!! Form::label('type',__('Type'), ['class'=>'col-form-label s-12']) !!}

								{!! Form::select('type', $bank_account_type, null, ['class'=>'form-control r-0 light s-12', 'id'=>'type', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="type_span"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">{{__('Close') }}</button>
				<button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>{{__('Save data') }}</button>
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}