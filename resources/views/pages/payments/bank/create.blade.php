<!-- Modal -->
{!! Form::open(['route'=>'bank.store','method'=>'POST', 'class'=>'formlDinamic', 'id'=>'guardarRegistro']) !!}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="bank">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><i class="icon icon-goals-1"></i> {{__('Add New Bank') }}</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="form-row">
					<div class="col-md-12">
						<div class="form-row">
							<div class="form-group col-6 m-0" id="password_group">
								<i class="icon-file-text mr-2"></i>
								{!! Form::label('name',__('Name'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('name', null, ['class'=>'form-control r-0 light s-12',  'id'=>'name', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="name_span"></span>
							</div>
							<div class="form-group col-6 m-0">
								<i class="icon-key4 mr-2"></i>
								{!! Form::label('description',__('Description'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('description', null, ['class'=>'form-control r-0 light s-12', 'id'=>'description']) !!}
								<span class="description_span"></span>
							</div>
						</div>
						<div class="form-row">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-row">
							<div class="form-group col-6 m-0">
								<i class="icon-cogs mr-2"></i>
								{!! Form::label('active',__('Status'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('active', $status, null, ['class'=>'form-control r-0 light s-12', 'id'=>'active', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="active_span"></span>
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
				<button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>{{__('Save data') }}</button>
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}