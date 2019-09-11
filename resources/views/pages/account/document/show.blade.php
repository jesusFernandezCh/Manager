<!-- Modal -->
<div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="icon-eye"></i> Document Show</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open() !!}
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group col-6 m-0" id="name_group">
                                <i class="icon-file-text mr-2"></i>
                                {!! Form::label('name', 'Name', ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('name', null, ['class'=>'form-control r-0 light s-12',  'id'=>'-name', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="name_span"></span>
                            </div>
                            <div class="form-group col-6 m-0" id="name_group">
                                <i class="icon-file-text mr-2"></i>
                                {!! Form::label('document_type_id', 'Document Type', ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('document_type_id', null, ['class'=>'form-control r-0 light s-12',  'id'=>'-document_type_id', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="name_span"></span>
                            </div>
                            <div class="form-group col-6 m-0" id="name_group">
                                <i class="icon-file-text mr-2"></i>
                                {!! Form::label('account_id', 'Account', ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('account_id', null, ['class'=>'form-control r-0 light s-12',  'id'=>'-account_id', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="name_span"></span>
                            </div>
                            <div class="form-group col-6 m-0" id="name_group">
                                <i class="icon-file-text mr-2"></i>
                                {!! Form::label('operation_id', 'Operation', ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('operation_id', null, ['class'=>'form-control r-0 light s-12',  'id'=>'-operation_id', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="name_span"></span>
                            </div>
                            
                        </div>
                        <div class="form-row">
                        </div>
                    </div>
                   
                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>