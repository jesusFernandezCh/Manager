<!-- Modal -->
<div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="icon-eye"></i> {{ __('Currier Show') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group col-6">
                                <i class="icon-bank mr-2"></i>
                                {!! Form::label('currier_name',__('Currier Name'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('currier_name', null, ['class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'-currier_name']) !!}
                                <span class="currier_name_span"></span>
                            </div>
                            <div class="form-group col-6">
                                <i class="icon-bank mr-2"></i>
                                {!! Form::label('description',__('Description'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('description', null, ['class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'-description']) !!}
                                <span class="description_span"></span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Close') }}</button>
            </div>
        </div>
    </div>
</div>