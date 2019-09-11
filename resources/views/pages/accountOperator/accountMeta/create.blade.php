<!-- Modal -->
{!! Form::open(['route'=>'accountMeta.store','method'=>'POST', 'class'=>'formlDinamic', 'id'=>'guardarRegistro']) !!}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="accountMeta">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><i class="icon icon-goals-1"></i> Add New Data Details</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="form-row">
					<div class="col-md-12">
						<div class="form-row">
							<div class="form-group col-6 m-0" id="value_group">
								{{-- <i class="icon icon-face mr-2"></i> --}}
								{!! Form::label('metaType', 'Data Details', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::select('account_meta_type_id', $metaTypes, null, ['class'=> 'form-control r-0 light s-12', 'id'=>'account_meta_type_id']) !!}
							</div>
							<div class="form-group col-6 m-0" id="value_group">
								{{-- <i class="icon icon-face mr-2"></i> --}}
								{!! Form::label('value', 'Value', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('value', null, ['class'=>'form-control r-0 light s-12', 'id'=>'value']) !!}
								<span class="value_span"></span>
							</div>
							{!! Form::hidden('account_id', $account->id, ['class'=>'form-control r-0 light s-12', 'id'=>'account_id']) !!}
							{!! Form::hidden('operator', true, ['class'=>'form-control r-0 light s-12', 'id'=>'operator']) !!}
						</div>	
					</div>
				</div>
			</div>
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>Save data</button>
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}