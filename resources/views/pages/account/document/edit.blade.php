<!-- Modal -->
{!! Form::open(['method'=>'PUT','class'=>'formlDinamic form','id'=>'DataUpdate']) !!}
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="icon-eye"></i> Document Type Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group col-4 m-0" id="name_group">
                                <i class="icon-file-text mr-2"></i>
                                {!! Form::label('name', 'Name', ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('name', null, ['class'=>'form-control r-0 light s-12',  'id'=>'_name', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="name_span"></span>
                            </div>
                            <div class="form-group col-4 m-0" id="account_id_group">
								<i class="icon-globe mr-2"></i>
								
								{!! Form::label('document_type_id', 'Document Type', ['class'=>'col-form-label s-12']) !!}

                                {!! Form::select('documentType[]', $documentType, null, ['class'=>'form-control r-0 light s-12 select2 multiple', 'id'=>'document_types','multiple'=>'multiple','onclick'=>'inputClear(this.id)']) !!}
								<span class="document_type_id_span"></span>
							</div>
							<div class="form-group col-4 m-0" id="account_id_group">
								<i class="icon-globe mr-2"></i>
								{!! Form::label('account_id', 'Acount', ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('account_id', $account, null, ['class'=>'form-control r-0 light s-12', 'id'=>'account_id']) !!}
								<span class="account_id_span"></span>
							</div>
							<div class="form-group col-4 m-0" id="name_group">
                                <i class="icon-file-text mr-2"></i>
                                {!! Form::label('operation_id', 'Operation', ['class'=>'col-form-label s-12']) !!}
                                {!! Form::select('operation_id', $operation, null, ['class'=>'form-control r-0 light s-12',  'id'=>'_operation_id', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="operation_id_span"></span>
                            </div>
                        </div>
                        <div class="form-row">
                        </div>
                    </div>
                    
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>Save data</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}