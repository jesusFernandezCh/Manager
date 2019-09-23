<!-- Modal -->
{!! Form::open(['method'=>'PUT','class'=>'formlDinamic form','id'=>'DataUpdate']) !!}
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="bank">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><i class="icon-eye"></i> {{__('Bank Transaction Edit') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group col-6 m-0">
                                <i class="icon-globe mr-2"></i>
                                {!! Form::label('bank_id',__('Bank'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::select('bank_id', $bank, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_bank_id']) !!}
                                <span class="bank_id_span"></span>
                            </div>

                            <div class="form-group col-6 m-0">
                                <i class="icon-file-text mr-2"></i>
                                {!! Form::label('amount',__('Amount'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('amount', null, ['class'=>'form-control r-0 light s-12',  'id'=>'_amount', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="amount_span"></span>
                            </div>
                        </div>
                        <div class="form-row">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group col-6 m-0">
                                <i class="icon-file-text mr-2"></i>
                                {!! Form::label('reference',__('Reference'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('reference', null, ['class'=>'form-control r-0 light s-12',  'id'=>'_reference', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="reference_span"></span>
                            </div>
                            <div class="form-group col-6 m-0">
                                <i class="icon-file-text mr-2"></i>
                                {!! Form::label('date',__('Date'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('date', null, ['class'=>'form-control r-0 light s-12',  'id'=>'_date', 'onclick'=>'inputClear(this.id)']) !!}
                                <span class="date_span"></span>
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6 m-0">
                                <i class="icon-globe mr-2"></i>
                                {!! Form::label('user',__('User'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::select('user', $user, null, ['class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'_user']) !!}
                                <span class="bank_id_span"></span>
                            </div>
                            <div class="form-group col-6 m-0">
                                <i class="icon-user mr-2"></i>
                                {!! Form::label('up',__('Updated Date'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::text('up',  date('Y-m-d H:i:s'), ['class'=>'form-control r-0 light s-12','disabled'=>'true', 'id'=>'up']) !!}
                                <span class="update_span"></span>
                            </div>
                            <div class="form-group col-6 m-0">
                                <i class="icon-globe mr-2"></i>
                                {!! Form::label('type',__('Bank'), ['class'=>'col-form-label s-12']) !!}
                                {!! Form::select('type', $bank_account_type, null, ['class'=>'form-control r-0 light s-12', 'id'=>'_type']) !!}
                                <span class="bank_id_span"></span>
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