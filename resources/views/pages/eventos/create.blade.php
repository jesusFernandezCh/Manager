<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><i class="icon icon-calendar"></i> Nuevo Evento</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="col-12 form-group">
					{!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Título']) !!}
				</div>
				<div class="col-12">
					{!! Form::textarea('name', null, ['class'=>'form-control','placeholder'=>'Descripción']) !!}
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Close')}}</button>
				<button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>{{ __('Guardar')}}</button>
			</div>
		</div>
	</div>
</div>