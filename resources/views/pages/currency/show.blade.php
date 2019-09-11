<!-- Modal -->
<div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="icon-eye"></i> Currency Show</h4>
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
                            <div class="form-group col-6 m-0">
                                <i class="icon-key4 mr-2"></i>
                                {!! Form::label('code', 'Code', ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('code', null, ['class'=>'form-control r-0 light s-12', 'id'=>'-code']) !!}
                                <span class="code_span"></span>
                            </div>
                        </div>
                        <div class="form-row">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group col-6 m-0" id="symbol_group">
                                <i class="icon-text_fields mr-2"></i>
                                {!! Form::label('symbol', 'Symbol', ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('symbol', null, ['class'=>'form-control r-0 light s-12',  'id'=>'-symbol', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="symbol_span"></span>
                            </div>
                            <div class="form-group col-6 m-0">
                                <i class="icon-cogs mr-2"></i>
                                {!! Form::label('status', 'Status', ['class'=>'col-form-label s-12']) !!}
                                {!! Form::select('active', $status, null, ['class'=>'form-control r-0 light s-12', 'id'=>'-active', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="active_span"></span>
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