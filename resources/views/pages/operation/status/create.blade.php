<!-- Modal -->
{!! Form::open(['route'=>'status.store','method'=>'POST', 'class'=>'formlDinamic', 'id'=>'guardarRegistro']) !!}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><i class="icon icon-package s-18"></i> {{__('Add New Operation Status')}} </h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="form-row">
					<div class="col-md-12">
						<div class="form-row">
							<div class="form-group col-6 m-0" id="name_group">
								{!! Form::label('name', 'Name', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('name', null, ['class'=>'form-control r-0 light s-12', 'id'=>'name']) !!}
								<span class="name_span"></span>
							</div>
							<div class="form-group col-6 m-0" id="description_group">
								{!! Form::label('description', 'Description', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('description', null, ['class'=>'form-control r-0 light s-12', 'id'=>'name']) !!}
								<span class="description_span"></span>
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