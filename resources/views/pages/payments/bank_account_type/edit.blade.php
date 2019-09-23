<!-- Modal -->
{!! Form::open(['method'=>'PUT','class'=>'formlDinamic form','id'=>'DataUpdate']) !!}
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="bank">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="icon-eye"></i> {{__('Bank Account Type Edit') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group offset-3 col-6">
                                <i class="icon-file-text mr-2"></i>
                                {!! Form::label('name',__('Name'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('name', null, ['class'=>'form-control r-0 light s-12',  'id'=>'_name', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="name_span"></span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{__('Close') }}</button>
                <button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>{{__('Save data') }}</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}