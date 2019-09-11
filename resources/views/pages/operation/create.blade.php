<!-- Modal -->
{!! Form::open(['route'=>'operations.store','method'=>'POST', 'class'=>'formlDinamic', 'id'=>'guardarRegistro']) !!}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><i class="icon icon-package s-18"></i> {{__('Add New Operation')}} </h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="form-row">
					<div class="col-md-12">
						<div class="form-row">
							<div class="form-group col-4 m-0" id="description_group">
								{!! Form::label('description', 'Description *', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('description', null, ['class'=>'form-control r-0 light s-12', 'id'=>'name']) !!}
								<span class="description_span"></span>
							</div>
							<div class="form-group col-4 m-0" id="total_amount_group">
								{!! Form::label('amount', 'Total Amount *', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('total_amount', null, ['class'=>'form-control r-0 light s-12', 'id'=>'total_amount']) !!}
								<span class="total_amount_span"></span>
							</div>
							<div class="form-group col-4 m-0" id="account_id_group">
								<i class="icon-globe mr-2"></i>
								{!! Form::label('account_id', 'Account *', ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('account_id', $accounts, null, ['class'=>'form-control r-0 light s-12', 'id'=>'account_id']) !!}
								<span class="account_id_span"></span>
							</div>
							<div class="form-group col-4 m-0" id="user_id_group">
								{!! Form::hidden('operator_id', Auth::user()->id, ['class'=>'form-control r-0 light s-12', 'id'=>'operator_id']) !!}
								<span class="user_id_span"></span>
							</div>
							<div class="form-group col-4 m-0" id="operations_status_id_group">
								{!! Form::hidden('operations_status_id', 2, ['class'=>'form-control r-0 light s-12', 'id'=>'status']) !!}
								<span class="operations_status_id_span"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">{{__('Close')}}</button>
				<button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>{{__('Save data')}}</button>
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}