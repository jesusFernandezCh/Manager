<!-- Modal -->
{!! Form::open(['route'=>'document.store','method'=>'POST', 'class'=>'formlDinamic', 'id'=>'guardarRegistroMultitap', 'files' => true]) !!}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><i class="icon icon-goals-1"></i> Add New Document</h4>
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
							<div class="form-group col-4 m-0" id="name_group">
								<i class="icon-cogs mr-2"></i>
								{!! Form::label('document_type_id', 'Document Type', ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('documentType[]', $documentType, null, ['class'=>'form-control r-0 light s-12 select2', 'id'=>'documentType','multiple'=>'multiple']) !!}
								<span class="documentType_span"></span>
							</div>

							<div class="form-group col-4 m-0" id="name_group">
								<i class="icon-cogs mr-2"></i>
								{!! Form::label('account', 'Account', ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('account_id', $account, null, ['class'=>'form-control r-0 light s-12', 'id'=>'account', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="account_span"></span>
							</div>
							<div class="form-group col-4 m-0" id="name_group">
								<i class="icon icon-file mr-2"></i>
								{!! Form::label('file', 'File', ['class'=>'col-form-label s-12', 'onclick'=>'inputClear(this.id)']) !!}
								{!! Form::file('file', null, ['class'=>'form-control r-0 light s-12', 'id'=>'file']) !!}
								<span class="file_span"></span>
							</div>
								{!! Form::hidden('operation_id', $operation->id, ['class'=>'form-control r-0 light s-12', 'id'=>'operation_id']) !!}
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