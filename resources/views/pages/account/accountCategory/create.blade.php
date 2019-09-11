<!-- Modal -->
{!! Form::open(['route'=>'accountCategory.store','method'=>'POST', 'class'=>'formlDinamic', 'id'=>'guardarRegistro']) !!}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><i class=""></i> Add New Category</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="form-row">
					<div class="col-md-12">
						<div class="form-row">
							<div class="form-group col-4 m-0" id="name_group">
								{{-- <i class="icon icon-face mr-2"></i> --}}
								{!! Form::label('name', 'Name', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('name', null, ['class'=>'form-control r-0 light s-12', 'id'=>'name']) !!}
								<span class="name_span"></span>
							</div>
              <div class="form-group col-4 m-0" id="description_group">
								{{-- <i class="icon icon-face mr-2"></i> --}}
								{!! Form::label('description', 'Description', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::text('description', null, ['class'=>'form-control r-0 light s-12', 'id'=>'description']) !!}
								<span class="name_description"></span>
							</div>
              <div class="form-group col-4 m-0" id="status_group">
								{!! Form::label('status', 'Status', ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('active', [1=>'Active', 0=>'Inactive'], null, ['class'=>'form-control r-0 light s-12', 'id'=>'active', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="status_span"></span>
							</div>
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
