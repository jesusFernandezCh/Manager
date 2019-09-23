<!-- Modal -->
{!! Form::open(['route'=>'currier.store','method'=>'POST', 'class'=>'formlDinamic', 'id'=>'guardarRegistro']) !!}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="bank">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><i class="icon icon-goals-1"></i> {{__('Add New Currier') }}</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="form-row">
					
					<div class="col-md-12">
						<div class="form-row">
							<div class="form-group col-6">
								{!! Form::label('currier_name',__('Currier Name'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('currier_name', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'currier_name']) !!}
								<span class="line_span"></span>
							</div>
							<div class="form-group col-6">
								{!! Form::label('desription',__('Description'), ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('desription', null, [ 'class'=>'form-control r-0 light s-12', 'id'=>'desription']) !!}
								<span class="line_span"></span>
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

